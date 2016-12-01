<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Laravel 5.1 App</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    {!! Html::style('css/styles.css') !!}
</head>

<body>

    @include('ads/partials/navbar')

    <div class="container ads-list">

        @yield('content')

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {!! Html::script('js/functions.js') !!}

</body>
</html>
