<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Fish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index(): View
    {
        $viewData['fish'] = Fish::all();
        return view('fish.index')->with('viewData', $viewData);
    }
    public function create(): view
    {   

        return view('fish.create');
    }
    public function save(Request $request): RedirectResponse
    {
        Fish::validate($request);
        Fish::create($request->only(['name', 'specie', 'weight']));
        return back();
    }
    public function statistics(): View
    {
        $fishesPerSpecie = Fish::groupBy('specie')
                            ->selectRaw('specie, count(*) as total')
                            ->get();

        $heaviestFish = Fish::orderBy('weight', 'desc')->first();
        $viewData = [];
        $viewData['fishesPerSpecie'] =  $fishesPerSpecie;
        $viewData['heaviestFish'] = $heaviestFish;
        return view('fish.statistics')->with('viewData', $viewData);
    }
}