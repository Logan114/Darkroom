<?php

namespace App\Http\Controllers;

use App\Models\filmstocks;
use Illuminate\Http\Request;

class FilmstocksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Filmstocks::query()
            ->orderBy('manufacturer')
            ->orderBy('stock_name')
            ->get(['stockID','manufacturer','stock_name','box_iso','format'])
        );
    }


public function show($id)
{
    $film = Filmstocks::query()
        ->where('stockID', $id)
        ->first();

    if (!$film) {
        return response()->json([
            'message' => 'Film not found'
        ], 404);
    }

    return response()->json($film);
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, filmstocks $filmstocks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(filmstocks $filmstocks)
    {
        //
    }
}
