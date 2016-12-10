@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create a New Deck
                    </div>
                    <div class="panel-body">
                       <form method="post" action="/decks">
                           {{ csrf_field() }}
                           <input class="form-control" type="text" name="name" placeholder="Deck name">
                           <br>
                           <input class="btn btn-success form-control" type="submit">

                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection