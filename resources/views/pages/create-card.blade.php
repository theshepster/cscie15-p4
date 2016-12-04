@extends('layouts.master-home')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add a new card to {{ $deck->name }}
                    </div>
                    <div class="panel-body">
                        <form method="post" action="/cards">
                            {{ csrf_field() }}
                            <label>Front:</label>
                            <input type="text" name="front" placeholder="Something on the front" value="{{ old('front') }}">
                            <br>
                            <label>Back:</label>
                            <input type="text" name="back" placeholder="Something on the back" value="{{ old('back') }}">
                            <br>
                            <input type="submit" name="save_more" value="Save and Add Another">
                            <input type="submit" name="save_done" value="Save and Done">
                            <input type="hidden" name="deck_id" value="{{ $deck->id }}">

                            {{--Display errors--}}
                            @if(count($errors) > 0)
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>
                        <a href="/decks/{{ $deck->id }}">Just KIDDING don't add any more cards!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection