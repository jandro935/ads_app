@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="title-show">{!! $ad->title !!}</h2>
                <p>{!! $ad->body !!}</p>
                <p>Autor: {!! $ad->author->name !!}</p>
            </div>
        </div>
    </div>

@endsection
