@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Deck Title
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/decks/{{ $deck->id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input class="form-control" type="text" name="name" value="{{ $deck->name }}">
                            <br>
                            <a class="btn btn-danger" href="/decks/{{ $deck->id }}">Cancel</a>
                            <input class="btn btn-default" type="reset" value="Reset">
                            <input class="btn btn-success" type="submit" value="Update" style="float: right;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection