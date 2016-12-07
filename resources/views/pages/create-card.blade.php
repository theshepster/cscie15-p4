@extends('layouts.master')

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
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Front
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="front" placeholder="Something on the front" value="{{ old('front') }}">
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
                                        <input class="form-control" type="text" name="back" placeholder="Something on the back" value="{{ old('back') }}">
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-info" type="submit" name="save_more" value="Save and Add Another" style="float: right; margin-left: 1em">
                            <input class="btn btn-success" type="submit" name="save_done" value="Save and Done" style="float: right">
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
                        <a class="btn btn-danger" href="/decks/{{ $deck->id }}">End</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection