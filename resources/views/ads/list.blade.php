@extends('layout')

@section('content')

    <h3>Latest Ads</h3>

    @if (Auth::check())
        <h4>
            <a href="{{ route('ads.create') }}" title="New Ad" class="btn btn-primary">New Ad</a>
        </h4>
    @endif

    <ul class="list-group">
        @foreach($ads as $ad)
            <li class="list-group-item">
                <a href="{{ route('ads.show', $ad) }}">
                    <h4 class="list-title">{!! $ad->title !!}</h4>
                </a>

                @if (strlen($ad->body) < 350)
                    <p>{!! $ad->body !!}</p>
                @else
                    <p>{!! substr($ad->body, 0, -350) !!}...</p>
                @endif
                <h4>
                    <span class="label label-default">Autor:</span>&nbsp;
                    <span class="label label-warning">{!! $ad->author->name !!}</span>
                </h4>
                <h4>
                    <span class="label label-primary">Contacto:</span>
                    <span class="label label-danger">{!! $ad->author->phone !!}</span>
                </h4>
            </li>
        @endforeach
    </ul>

    {!! $ads->render() !!}

@endsection
