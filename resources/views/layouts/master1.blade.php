<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title>ononani.me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/bootstrap.css') !!}
    </head>
    <body class="body">
        <nav class="navbar navbar-default navbar-fixed-top">
            <a class="navbar-brand" href="#">
                <img id="logo" alt="ononani.me" src="http://i.imgur.com/L5N1Zsp.png">
                Navbar
            </a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline float-xs-right">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>