@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Edit Profile</h2>

                <h3>
                    <span class="label label-danger">{{ $user->role }}</span>
                </h3>

                @include('ads/partials/errors')

                {!! Form::model($user, ['action' => ['UserController@update', 'id' => $user->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', $user->name, [
                            'class' => 'form-control'
                        ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail') !!}
                        {!! Form::text('email', $user->email, [
                            'class' => 'form-control'
                        ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::text('phone', $user->phone, [
                            'class' => 'form-control'
                        ]) !!}
                    </div>

                    <p><button type="submit" class="btn btn-primary">Update Profile</button></p>
                {!! Form::close() !!}

                {{--{!! Form::open(['route' => 'user.edit', 'method' => 'PUT']) !!}--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('name', 'Name') !!}--}}
                        {{--{!! Form::text('name', $user->name, [--}}
                            {{--'class' => 'form-control'--}}
                        {{--]) !!}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('email', 'E-mail') !!}--}}
                        {{--{!! Form::text('email', $user->email, [--}}
                            {{--'class' => 'form-control'--}}
                        {{--]) !!}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('phone', 'Phone') !!}--}}
                        {{--{!! Form::text('phone', $user->phone, [--}}
                            {{--'class' => 'form-control'--}}
                        {{--]) !!}--}}
                    {{--</div>--}}

                {{--<p><button type="submit" class="btn btn-primary">Update Profile</button></p>--}}
                {{--{!! Form::close() !!}--}}
            </div>
        </div>
    </div>

@endsection
