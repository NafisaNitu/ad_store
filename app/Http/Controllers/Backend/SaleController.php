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

        $sale = new Sale();
        $sale->type = $request->type;
        $sale->name = $request->name;
        $sale->description = $request->description;
        if ($request->has('image')) {
            
            $image = $request->file('image');
            
            $reImage = time() . '.' . $image->getClientOriginalExtension();
           
            $image_resize = Image::make($image)->resize(320, 240);
            $dest = public_path('public/images/sales');
            

            $image_resize->save($dest,$reImage);

            // save in database
            $sale->image = $reImage;
        }
        $sale->save();

        return back()->with('success','Sales add successfully.');
    }
}
