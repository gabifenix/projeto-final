<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        return Movie::all();
    }
    public function create(){}

    public function store(Request $request)
    {
        $dados = $request->all();
        // dd($dados);
        return Movie::create($request->all());
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
    }
}
