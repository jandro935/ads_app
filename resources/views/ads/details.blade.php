@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="title-show">{!! $ad->title !!}</h2>
                <p>{!! $ad->body !!}</p>
                <p>Autor: {!! $ad->author->name !!}</p>

                @if (Auth::check() && (Auth::user()->id == $ad->user_id))
                    <h4>
                        <a href="{{ route('ads.edit', $ad->id) }}" title="Update Ad" class="btn btn-primary">
                            Update Add
                        </a>
                    </h4>

                    {!! Form::model($ad, ['action' => ['AdsController@destroy', 'id' => $ad->id], 'method' => 'DELETE']) !!}
                    <h4>
                        <p><button type="submit" class="btn btn-danger">Delete Add</button></p>
                    </h4>
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </div>

@endsection
