@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (isset($cards[0]))
                            Deck: {{ $deck->name }}
                        @else
                            There are no cards in {{ $deck->name }}
                        @endif
                        <a href="/home" style="float: right;;">Back</a>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="row">
                                @if(!isset($cards[0]))
                                    <a href="/cards/create/{{ $deck->id }}" class="btn btn-success">Create Your First Card</a>
                                @else
                                    <a href="/decks/review/{{ $deck->id }}" class="btn btn-success">Review Deck</a>
                                    <a href="/cards/create/{{ $deck->id }}" class="btn btn-info">Create a New Card</a>
                                @endif
                                <a href="/decks/{{ $deck->id }}/edit" class="btn btn-warning">Change Deck Name</a>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
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
                                                <input style="float: right;" type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

