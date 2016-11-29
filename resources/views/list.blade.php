@extends('layout')

@section('content')

    <h2>Ads List</h2>

    <ul class="list-group">
        @foreach($ads as $ad)
            <li class="list-group-item">
                <h4 class="list-title">{!! $ad->title !!}</h4>
                <p>{!! $ad->body !!}</p>
                <h4>
                    <span class="label label-default">Autor:</span>&nbsp;
                    <span class="label label-warning">{!! $ad->user->name!!}</span>
                </h4>
            </li>
        @endforeach
    </ul>

    {!! $ads->render() !!}

@endsection
