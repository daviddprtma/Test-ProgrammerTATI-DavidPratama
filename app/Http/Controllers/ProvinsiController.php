<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Provinsi::all();
    }

    /**
     * Show the form for creating a new resource.
     */
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
        $request->validate([
            'code' => 'integer|required',
            'name' => 'required|string|max:255',
        ]);

        $provinsi = Provinsi::create($request->all());
        return response()->json($provinsi, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return Provinsi::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provinsi $provinsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $provinsi = Provinsi::find($id);
        $request->validate([
            'code' => 'integer|required',
            'name' => 'string|max:255',
        ]);

        $provinsi->update($request->all());
        return response()->json($provinsi, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
        return response()->json(null, 204);
    }
}
