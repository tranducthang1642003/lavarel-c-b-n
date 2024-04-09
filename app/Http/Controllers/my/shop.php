<?php

namespace App\Http\Controllers\my;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\danhmuc;


class shop
{
    /**
     * Display a listing of the resource.
     */
    public function sanpham()

{
    $products = sanpham::all();
    return view('shop.sanpham',compact('products'));
}
    

public function danhmuc()

{
     $danhmucs = DanhMuc::all();
    return view('shop.sanpham',compact('danhmucs'));
}



    public function create()
    {
        //
    }


  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
