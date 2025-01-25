<?php

namespace App\Http\Controllers;
use App\Models\inventory;
use Illuminate\Http\Request; 
use App\Models\inventory_images; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\categories;
use App\Models\brands;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $items = inventory::orderBy('name')->with(['brand', 'category', 'images'])->get();
          $brands = brands::orderBy('name')->get();
          $categories = categories::orderBy('name')->get();           
        return view('home', compact('items', 'brands', 'categories'));
    }
}
