@extends('layout')

@section('content')

    <h3>Latest Ads</h3>

    <ul class="list-group">
        @foreach($ads as $ad)
            <li class="list-group-item">
                <a href="{{ route('ads.show', $ad) }}">
                    <h4 class="list-title">{!! $ad->title !!}</h4>
                </a>
                <p>{!! substr($ad->body, 0, -350) !!}...</p>
                <h4>
                    <span class="label label-default">Autor:</span>&nbsp;
                    {{--<span class="label label-warning">{!! $ad->author->name !!}</span>--}}
                    <span class="label label-warning">{!! $ad->user_id !!}</span>
                </h4>
            </li>
        @endforeach
    </ul>

    {!! $ads->render() !!}

@endsection
