<?php

namespace App\Http\Controllers;

use App\Card;
use App\Deck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $deck_id
     * @return \Illuminate\Http\Response
     */
    public function create($deck_id)
    {
        $deck = Deck::find($deck_id);
        if ($deck)
        {
            return view('pages.create-card')->with(['deck' => $deck]);
        }
        else
        {
            return redirect()->route('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # make sure both fields are nonblank
        $this->validate($request, [
            'front' => 'required',
            'back' => 'required',
        ]);

        # save the card in the database
        $card = new Card();
        $card->front = $request->input('front');
        $card->back = $request->input('back');
        $card->deck_id = $request->input('deck_id');
        $card->save();

        # redirect user depending on which button was clicked
        if (Input::get('save_more'))
        {
            return redirect()->route('cards.create', ['deck_id' => $card->deck_id]);
        }
        else // (Input::get('save_done'))
        {
            return redirect()->route('decks.show', ['id' => $card->deck_id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::find($id);

        if ($card)
        {
            return view('pages.edit-card')->with(['card' => $card]);
        }
        else
        {
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('cards.show', ['id' => $id]);
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
        $card = Card::find($id);
        $card->front = $request->input('front');
        $card->back = $request->input('back');
        $card->save();

        return redirect()->route('decks.show', ['id' => $card->deck_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = Card::find($id);
        $deck_id = $card->deck_id;
        $card->delete();

        return redirect()->route('decks.show', ['id' => $deck_id]);
    }
}
