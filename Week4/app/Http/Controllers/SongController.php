<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSongRequest;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all(); // geeft alle songs terug

        return view('songs.index', ['songs' => $songs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
        return redirect()->route('songs.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSongRequest $request)
    {


        Song::create($request->except(['_token']));
        // Song::create({

        // })

        return redirect()->route('songs.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id); // find = zoek op ID
        return view('songs.show', ['song' => $song]);
    }
    // $id = 0
    // $songs[$id]
    //

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id == 0)
        {
            $id = 1;
        }
        {
            $song = Song::find($id); // find = zoek op ID
            return view('songs.edit', ['song' => $song]);
        }
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

        $validated = $request->validate([
            'title' => 'required|max:100',
            'singer' => 'max:50',
        ]);


        Song::find($id)->update($request->only(['title','singer']));
        return redirect()->route('songs.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::destroy($id);
    }
}
