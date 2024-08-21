<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }
    public function about(): View
    {
        $title = "About us - Online Store";
        $subtitle = "About us";
        $description = "This is an about page ...";
        $author = "Developed by: Jacobo Zuluaga";
        return view('home.about')->with("title", $title)
        ->with("subtitle", $subtitle)
        ->with("description", $description)
        ->with("author", $author);
            return view('home.about');
    }
    public function contact(): View
    {
        return view('home.contact');
    }
}
