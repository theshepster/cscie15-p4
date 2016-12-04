@extends('layouts.master-home')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-title">
                    Your Decks
                </div>

                {{-- Create a new deck --}}
                <div class="panel-body">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                Create a new deck!
                            </div>
                            <div class="panel-body">
                                <a href="/decks/create" class="btn btn-info">New Deck</a>
                            </div>
                        </div>
                    </div>

                    {{-- Display all existing decks --}}
                    @foreach($decks as $deck)
                        <div class="col-md-4">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection