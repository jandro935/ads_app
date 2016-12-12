@extends('layout')

@section('content')

    <div class="col-lg-6 col-sm-6">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            </div>
            <div class="useravatar">
                <img alt="einstein" src="http://static.notinerd.com/wp-content/uploads/2016/03/881.jpg">
            </div>
            <div class="card-info">
                <span class="card-title">{{ Auth::user()->name }}</span>
            </div>
        </div>

        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-primary" href="#tab1" data-toggle="tab">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Personal Data</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-default" href="#tab2" data-toggle="tab">
                    <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                    <div class="hidden-xs">Your Stats</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#tab3" data-toggle="tab">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Favorites</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <p class="form-control-static mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <p class="form-control-static mb-0">{{ Auth::user()->phone }}</p>
                        </div>
                    </div>
                    <h4>
                        <a href="{{ route('user.edit', Auth::user()->id) }}" title="Update Ad" class="btn btn-primary">
                            Update Profile
                        </a>
                    </h4>
                </div>
                <div class="tab-pane fade in" id="tab2">
                    <h3>You have 2 Ads</h3>
                    <p>Se debe colocar un componente que devuelva el número de ads por user</p>
                </div>
                <div class="tab-pane fade in" id="tab3">
                    <h3>This is tab 3</h3>
                    <p>Implementar la funcionalidad para que se puedan ver los ads favoritos</p>
                </div>
            </div>
        </div>
    </div>

@endsection
