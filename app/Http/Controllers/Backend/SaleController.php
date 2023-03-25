<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        return view('backend.pages.sales.add');
    }

    public function manage(){
        $sales = Sale::all();
        return view('backend.pages.sales.manage',compact('sales'));
    }

    public function store(Request $request){
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image',
        ],
        [
            'type.required' => 'Please provide a sale product type',
            'name.required' => 'Please provide a sale product name',
            'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension'
        ]);
       
        $sale = new Sale();
        $sale->type = $request->type;
        $sale->name = $request->name;
        $sale->image = $request->image;
        $sale->description = $request->description;        
        $sale->save(); 

        return back();
    }
}
