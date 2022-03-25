<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use DB;

class filmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $films = DB::table('films')
                    -> orderby('rating', 'desc') 
                    -> get();
        return view('films/index', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('films/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'filmName' => 'required',
            'rating' => 'required'
        ]);

        $film = new Film;
        $film -> filmName = $request ->input('filmName');
        $film -> rating = $request -> input('rating');
        $film -> releaseDate = $request -> input('releaseDate');
        $film -> save();

        return redirect ('films');
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
        $film = Film::find($id);
        return view('films/show', ['film' => $film]);
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
        $film = Film::find($id);
        return view('films/edit', ['film' => $film]);
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
        $this->validate($request, [
            'filmName' => 'required',
            'rating' => 'required',
            'releaseDate' => 'required'
        ]);
        
        $videogame = Film::find($id);
        $videogame->filmName = $request->input('filmName');
        $videogame->rating = $request->input('rating');
        $videogame->releaseDate = $request->input('releaseDate');
        $videogame->save();

        return redirect ('films');
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
        DB::table('films')->where('id', '=', $id)->delete();
        return redirect('films');
    }
}
