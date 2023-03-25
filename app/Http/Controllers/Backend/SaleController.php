<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaleAdStoreRequest;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index(){
        $sales = Sale::all();
        return view('backend.pages.sales.manage',compact('sales'));
    }
    public function create(){
        return view('backend.pages.sales.add');
    }

    public function store(SaleAdStoreRequest $request){
       
        $sale = new Sale();
        $sale->type = $request->type;
        $sale->name = $request->name;
        $sale->image = $request->image;
        $sale->description = $request->description;        
        $sale->save(); 

        return back();
    }
}
