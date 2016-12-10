@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Look at all the cards in {{ $deck->name }}!
                        @if (isset($cards[0]))
                            <a href="/decks/review/{{ $deck->id }}" style="float: right; margin-left: 2em">Review Deck</a>
                        @endif
                        <a href="/cards/create/{{ $deck->id }}" style="float: right; margin-left: 2em">Create a New Card</a>
                        <a href="/decks/{{ $deck->id }}/edit" style="float: right">Change Deck Name</a>

                    </div>
                    <div class="panel-body">
                        {{--TODO: make this look nice--}}
                        {{--TODO: add button for back to home--}}
                        {{--TODO: add a button and create route to edit deck title--}}
                            @foreach($cards as $card)



                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            {{ $card->front }}
                                        </div>
                                        <div class="panel-body">
                                            <a href="/cards/{{ $card->id }}" class="btn btn-default">Edit</a>
                                            <form action="/cards/{{ $card->id }}" method="POST" style="display: inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </div>




                            @endforeach
                        </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

