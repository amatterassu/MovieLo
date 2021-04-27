<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topRated = Http::withToken(config('service.tmdb'))
        ->get('https://api.themoviedb.org/3/movie/top_rated?api_key=a4565cd3ca7b8566d6eb7083e8034978&language=en-US&page=1')
        ->json()['results'];

        $popularMovies = Http::withToken(config('service.tmdb'))
        ->get('https://api.themoviedb.org/3/movie/popular?api_key=a4565cd3ca7b8566d6eb7083e8034978&language=en-US&page=1')
        ->json()['results'];

        
        //dump($popularMovies);


        return view('admin/dashboard', [
            'popularMovies' => $popularMovies,
            'topRated' => $topRated,
        ]);
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
    public function store(Request $request)
    {
        //
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
