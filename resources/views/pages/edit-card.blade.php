@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Card
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/cards/{{ $card->id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Front
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="front" value="{{ $card->front }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Back
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" type="text" name="back" value="{{ $card->back }}">
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-success" type="submit" name="save" value="Save" style="float: right">
                            <input type="hidden" name="deck_id" value="{{ $card->deck_id }}">

                            {{--Display errors--}}
                            @if(count($errors) > 0)
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>
                        <a class="btn btn-danger" href="/decks/{{ $card->deck_id }}">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection