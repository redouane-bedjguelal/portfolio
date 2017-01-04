<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Tab icon -->
        <link rel="icon" href="http://i.imgur.com/quLWzbI.png">
        
        <!--Font Awesome + Baumans-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Baumans" rel="stylesheet">
        <!--CSS-->
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/mdb.min.css') !!}
        {!! Html::style('assets/css/styleLOG.css') !!}
        <!--SCRIPTS-->
        {!! Html::script('assets/js/jquery-3.1.1.min.js') !!}
        {!! Html::script('assets/js/tether.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/mdb.min.js') !!}
    </head>
    <body class="img-gradient">
        <header>
            <!--Navbar-->
            <nav class="navbar navbar-dark black navbar-fixed-top" style="position: fixed;">

                <!--Collapse button-->
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="container">

                    <!--Collapse content-->
                    <div class="collapse navbar-toggleable-xs" id="collapseEx">
                        <!--Navbar Brand-->
                        <a class="navbar-brand" href="{{ url('welcome') }}"><span class="font-teal">ononani</span><span class="font-pink">.</span><span class="font-teal">me</span></a>
                        <!--Links-->
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('recentEpisodes') }}">RECENT EPISODES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('animeList') }}">ANIME LIST</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('genreList') }}">GENRE LIST</a>
                            </li>
                        @if(Session::get('id')=='nunuz')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('ajouterAnime') }}">ADD ANIME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('animeListSimple') }}">EDIT ANIME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('ajouterEpisode') }}">ADD EPISODE</a>
                            </li>
                        @endif
                        </ul>
                        <ul class="nav navbar-nav" style="float: right;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('userPage') }}/{{Session::get('id')}}"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('signOut') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Collapse content-->
                </div>

            </nav>
            <!--/.Navbar-->
        </header>
        <!--yield-->
        @yield('content')
        <!--/.yield-->
    </body>
</html>
