<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ URL::asset("css/style.css") }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="pad-body">
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{ URL::asset("images/padcoin.png") }}" class="img-fluid" width="50%"  alt="One Paper Dragon">
        </div>
    </div>
</div>
@yield('content')
<script src="{{ URL::asset("https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js") }}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
