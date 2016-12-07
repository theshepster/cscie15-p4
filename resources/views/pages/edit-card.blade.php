@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Update Card
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/cards/{{ $card->id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <label>Front:</label>
                            <input type="text" name="front" placeholder="Something on the front" value="{{ $card->front }}">
                            <br>
                            <label>Back:</label>
                            <input type="text" name="back" placeholder="Something on the back" value="{{ $card->back }}">
                            <br>
                            <input type="submit" name="save_more" value="Save">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection