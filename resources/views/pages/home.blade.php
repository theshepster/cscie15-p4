@extends('layouts.master-home')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Your Decks
                </div>
                <div class="panel-body">
                    <a href="/decks/create">Create a New Deck</a>
                    <br>
                    Existing Decks:
                    <ul>
                        @foreach($decks as $deck)
                            <li>
                                <a href="/decks/{{ $deck->id }}">{{ $deck->name }}</a>
                                <form action="/decks/{{ $deck->id }}" method="POST">
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