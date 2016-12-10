@extends('layouts.master')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Reviewing Deck: {{ $deck->name }}
                    </div>
                    <div class="panel-body">

                        @for ($i = 0, $end = count($cards); $i < $end; $i++)

                            @php
                                $card = $cards[$i];
                                if ($i < $end - 1)
                                {
                                    $next = $cards[$i+1];
                                }
                            @endphp

                            <div id="card{{ $card->id }}" @if($i != 0) class="hidden" @endif >

                                {{--Card front--}}
                                <div class="col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Front
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-12">
                                                <p>{{ $card->front }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--Card back--}}
                                <div class="col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Back
                                        </div>
                                        <div class="panel-body">
                                            <p id="back{{ $card->id }}" style="display: none">{{ $card->back }}</p>
                                            <a id="reveal{{ $card->id }}"
                                               onclick="document.getElementById('back{{ $card->id }}').style.display = 'inline';
                                                        document.getElementById('reveal{{ $card->id }}').style.display = 'none';"
                                               class="btn btn-info">Reveal</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="btn btn-success"
                                           style="float: right;"
                                           @if($i < $end - 1)
                                               onclick="document.getElementById('card{{ $card->id }}').className = 'hidden';
                                                        document.getElementById('card{{ $next->id }}').className = '';"
                                           @else
                                               href="/decks/{{ $deck->id }}"
                                           @endif
                                        >
                                            @if($i < $end - 1)
                                                Next
                                            @else
                                                Done
                                            @endif
                                        </a>
                                        <a class="btn btn-danger" href="/decks/{{ $deck->id }}" style="float: left;">End</a>
                                    </div>
                                </div>

                            </div>

                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection