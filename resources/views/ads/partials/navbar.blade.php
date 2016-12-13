<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url() }}" title="Ads App">Ads App</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Route::is('ads.index') ? 'active' : '' }}">
                    <a href="{{ url() }}" title="Latest">Latest</a>
                </li>
                @if (Auth::check())
                    <li class="{{ Route::is('ads.indexByAuthor') ? 'active' : '' }}">
                        <a href="{{ route('ads.indexByAuthor', Auth::user()->id) }}" title="Your Ads">Your Ads</a>
                    </li>
                    <li class="{{ Route::is('ads.indexByStar') ? 'active' : '' }}">
                        <a href="{{ route('ads.indexByStar', Auth::user()->id) }}" title="Your Star Ads">Your Star Ads</a>
                    </li>
                @endif
            </ul>

            @include('ads/partials/loginbar')
        </div>
    </div>
</nav>
