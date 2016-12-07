@extends('layouts.master')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Your Decks</strong>
                    <a href="/decks/create" class="" style="float: right">New Deck</a>
                </div>
                <br>
                    {{-- Display all existing decks --}}
                    @foreach($decks as $deck)
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    {{ $deck->name }}
                                </div>
                                <div class="panel-body">
                                    <a href="/decks/{{ $deck->id }}" class="btn btn-default">Edit</a>
                                    <form action="/decks/{{ $deck->id }}" method="POST" style="display: inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                {{-- Create a new deck --}}
                <div class="panel-body">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <input class="input" form="create-deck" type="text" name="name" placeholder="New Deck">
                            </div>
                            <div class="panel-body">
                                <form id="create-deck" method="post" action="/decks">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-success" value="Create">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection