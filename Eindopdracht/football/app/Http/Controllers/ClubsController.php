<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all(); // geeft alle clubs terug

        return view('clubs.index', ['clubs' => $clubs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
        return redirect()->route('clubs.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Club::create($request->except(['_token']));
        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::find($id); // find = zoek op ID
        return view('clubs.show', ['club' => $club]);
    }

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
            $club = Club::find($id); // find = zoek op ID
            return view('clubs.edit', ['club' => $club]);
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
            'Name' => 'required|max:50',
            'League' => 'max:30',
            'Champions_league_titels' => 'max:2',
            'Top_scorer' => 'max:50',

        ]);


        Club::find($id)->update($request->only(['Name','League', 'Champions_league_titels', 'Top_scorer']));
        return redirect()->route('clubs.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Club::destroy($id);
        return redirect()->route('clubs.index');
    }
}
