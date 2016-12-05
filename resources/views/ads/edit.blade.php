@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Edit Add</h2>

                @include('ads/partials/errors')

                {!! Form::model($ad, ['action' => ['AdsController@update', 'id' => $ad->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', $ad->title, [
                        'class' => 'form-control'
                    ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Body') !!}
                    {!! Form::textarea('body', $ad->body, [
                        'class' => 'form-control'
                    ]) !!}
                </div>

                <p><button type="submit" class="btn btn-primary">Update Add</button></p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
