<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cats DB</title>
        <link rel="stylesheet" 
              href="{{URL::to('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                @yield('header')
            </div>
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>