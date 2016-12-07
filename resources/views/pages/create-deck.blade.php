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
                           <label>
                               Name of Deck:
                           </label>
                               <input type="text" name="name" placeholder="My cool new deck">
                               <input type="submit" class="btn btn-success">

                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection