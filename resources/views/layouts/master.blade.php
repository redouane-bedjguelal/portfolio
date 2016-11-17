<!doctype html>
<html lang="fr">
    <head>
        <title>Mangas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
    </head>
    <body class="body">
        
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar+ bvn"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/')}}">ononanime</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-target">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/listerAnime') }}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister</a></li>
                            <li><a href="{{ url('/listerMangasGenre') }}" data-toggle="collapse" data-target=".navbar-collapse.in">Mangas par genre</a></li>
                            <li><a href="{{ url('/ajouterAnime') }}" data-toggle="collapse" data-target=".navbar-collapse.in">Ajouter</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @section('entete')
           
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
