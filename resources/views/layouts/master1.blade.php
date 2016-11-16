<!doctype HTML>
<html lang="fr">
    <head>
        <title>ononani.me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/mangas.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                
            </div>
        </nav>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>