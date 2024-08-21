<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    // public static $products = [
    //     ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>"1000"],
    //     ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>"2000"],
    //     ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>"3000"],
    //     ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>"4000"],
    // ];

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        //isset checks if the value exists and is not null, then chekcs the value
        //of products array for the id
        // if(!isset(ProductController::$products[$id-1])){
        //     //redirect to the index if isset is false
        //     return redirect()->route("home.index");
        // }
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product['name'].' - Online Store';
        $viewData['subtitle'] = $product['name'].' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): view|RedirectResponse
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        // dd($request->all());
        //display message
        //here will be the code to call the model and save it to the database
        Product::create($request->only(['name', 'price']));

        return redirect()->route('product.created');

    }

    public function created(): View
    {
        return view('product.product_created');
    }
}
