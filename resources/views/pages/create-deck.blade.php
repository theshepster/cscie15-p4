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
                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                               <div class="col-md-12">
                                   <input class="form-control"
                                          type="text"
                                          name="name"
                                          placeholder="Deck name"
                                          value="{{ old('name') }}"
                                          required
                                          style="margin-bottom: 1em;"
                                   >
                                   @if ($errors->has('name'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('name') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>

                           <input class="btn btn-success form-control" type="submit">
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection