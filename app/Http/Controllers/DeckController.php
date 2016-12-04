<?php

namespace App\Http\Controllers;

use App\Deck;
use App\Card;
use Illuminate\Http\Request;


class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create-deck');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deck = new Deck();
        $deck->name = $request->input('name');
        $user = \Auth::user();
        $deck->user_id = $user->id;
        $deck->save();

        return redirect()->route('cards.create', ['deck_id' => $deck->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deck = Deck::find($id);
        $cards = Card::where('deck_id', '=', $deck->id)->get();

        return view('pages.overview-deck')->with(['deck' => $deck, 'cards' => $cards]);
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
        # delete related cards
        Card::where('deck_id', $id)->delete();

        # delete deck
        Deck::find($id)->delete();

        return redirect()->route('home');
    }
}
