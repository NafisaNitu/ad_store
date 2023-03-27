<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RentAdFormRequest;
use App\Models\RentAd;
use Illuminate\Http\Request;

class RentAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RentAdFormRequest $request)
    {
        $rent_add = new RentAd();
        $rent_add->type = $request->type;
        $rent_add->name = $request->name;
        $rent_add->description = $request->description;
        if ($request->has('image')) {
            $image = $request->file('image');
            $reImage = time() . '.' . $image->getClientOriginalExtension();
            $dest = public_path('/images/rent_ad');
            $image->move($dest, $reImage);

            // save in database
            $rent_add->image = $reImage;
        }
        $rent_add->save();

        return back()->with('success','BuyAds add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
