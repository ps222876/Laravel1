<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Plus;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all(); // geeft alle clubs terug

        return view('players.index', ['players' => $players]);}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
        return redirect()->route('players.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Player::create($request->except(['_token']));
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id); // find = zoek op ID
        return view('players.show', ['player' => $player]);
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
            $player = Player::find($id); // find = zoek op ID
            return view('players.edit', ['player' => $player]);
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
            'Position' => 'max:30',
            'Nationality' => 'max:30',
            'Birthdate' => 'max:10',

        ]);



        Player::find($id)->update($request->only(['Name','Position', 'Nationality', 'Birthdate']));
        return redirect()->route('players.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::destroy($id);
        return redirect()->route('players.index');
    }
}
