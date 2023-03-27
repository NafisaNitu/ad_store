<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaleAdStoreRequest;
use App\Models\Sale;
use Image;
Use File;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index()
    {
        $sales = Sale::all();
        return view('backend.pages.sales.manage', compact('sales'));
    }
    public function create()
    {
        return view('backend.pages.sales.add');
    }

    public function store(SaleAdStoreRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/sales/'.$img);
            Image::make($image)->resize(570, 230)->save($location);

            $sale = new Sale();
            $sale->type = $request->type;
            $sale->name = $request->name;
            $sale->description = $request->description;
            $sale->image = $img;
            $sale->save();
        }
        return back()->with('success','Sales add successfully.');
    }
}
