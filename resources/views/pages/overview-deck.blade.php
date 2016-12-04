@extends('layouts.master-home')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Look at all the cards in {{ $deck->name }}!
                    </div>
                    <div class="panel-body">
                        <a href="/cards/create/{{ $deck->id }}">Create a New Card</a>
                        <br>
                        Cards in this deck:
                        {{--TODO: add buttons for Review Deck--}}
                        <ul>
                            @foreach($cards as $card)
                                <li>
                                    {{ $card->front }}
                                    <a href="/cards/{{ $card->id }}/edit">Edit</a>
                                    <form action="/cards/{{ $card->id }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input type="submit" value="Delete">
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

