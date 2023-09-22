<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furniture;


class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $furnitures =  Furniture::all();
         return view('furnitures', ['furniture'=>$furnitures]);
        // return view('furnitures');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'ukuran_kubus' => 'required',
            'ukuran_lingkaran' => 'required',
        ]);
        return Furniture::create($request->all()

        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Furniture::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $furniture = Furniture::find($id);
        $furniture->update($request->all());
        return $furniture;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Furniture::destroy($id);
    }
}
