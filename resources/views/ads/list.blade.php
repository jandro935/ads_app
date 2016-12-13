@extends('layout')

@section('content')

    <h3>{{ $title }}</h3>

    @if (Auth::check())
        <h4>
            <a href="{{ route('ads.create') }}" title="New Ad" class="btn btn-primary">New Ad</a>
        </h4>
    @endif

    <ul class="list-group">
        @foreach($ads as $ad)
            <li data-id="{{ $ad->id }}" class="list-group-item ad">
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
                    <span class="label label-default">Contacto:</span>
                    <span class="label label-warning">{!! $ad->author->phone !!}</span>
                </h4>

                @if (Auth::check())
                {{--@if(Auth::user()->id != $ad->author->id)--}}
                    <h4>
                        <a href="#" title="Star Ad"
                            {!! Html::classes(['btn btn-success btn-star', 'hidden' => currentUser()->hasStar($ad)]) !!}>
                            Star Ad
                        </a>
                    </h4>

                    <h4>
                        <a href="#" title="Unstar Ad"
                            {!! Html::classes(['btn btn-danger btn-unstar', 'hidden' => !currentUser()->hasStar($ad)]) !!}>
                            Unstar Ad
                        </a>
                    </h4>
                {{--@endif--}}
                @endif
            </li>
        @endforeach
    </ul>

    {!! Form::open(['id' => 'form-star', 'route' => ['star.submit', ':id'], 'method' => 'POST']) !!}
    {!! Form::close() !!}

    {!! Form::open(['id' => 'form-unstar', 'route' => ['star.destroy', ':id'], 'method' => 'DELETE']) !!}
    {!! Form::close() !!}

    {!! $ads->render() !!}

@endsection
