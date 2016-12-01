@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>New Ad</h2>

                @include('ads/partials/errors')

                {!! Form::open(['route' => 'ads.store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Ad Title'
                        ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('body', 'Description') !!}
                        {!! Form::textarea('body', null, [
                                'rows' => 2,
                                'class' => 'form-control',
                                'placeholder' => 'Ad Description'
                        ]) !!}
                    </div>

                    <p><button type="submit" class="btn btn-primary">Enviar</button></p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
