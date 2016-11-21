<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title>ononani.me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/mdb.min.css') !!}
    </head>
    <body class='body'>
        <!--Navigation-->
        <nav class="navbar white navbar-fixed-top z-depth-1" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand waves-effect waves-light" href="#">
                        <img class="logo" src="http://i.imgur.com/w9XBlfb.jpg" alt="ononani.me">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="waves-effect waves-light">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#" class="waves-effect waves-light">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group waves-effect waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!--/.Navigation-->
        <main>
            <div class="col-md-8 col-md-offset-2">
                <div class='wave'>
                    <br><br>
                    <span></span>
                    f
                    f
                    f
                    f
                    ff
                    
                </div>
                
                @yield('content')
            </div>
        </main>
    </body>
</html>