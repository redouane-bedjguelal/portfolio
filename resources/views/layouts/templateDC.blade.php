<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ononani.me</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Baumans" rel="stylesheet">
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/mdb.min.css') !!}
        {!! Html::style('assets/css/styleDC.css') !!}
        <!-- SCRIPTS -->
        {!! Html::script('assets/js/jquery-3.1.1.min.js') !!}
        {!! Html::script('assets/js/tether.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/mdb.min.js') !!}
    </head>
    <body id="home" class="font-baumans">
        <!--Navbar-->
        <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">
            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>
            <div class="container">
                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand font-baumans" href="accueil">ononani.me</a>
                    <!--Links-->
                    <ul class="nav navbar-nav" style="float: right;">
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login" data-toggle="modal" data-target="#myModal">Sign in</a>
                        </li>
                    </ul>
                </div>
                <!--/.Collapse content-->
            </div>
        </nav>
        <!--/.Navbar-->
        <!--yield-->
        @yield('content')
        <!--/.yield-->
        <!-- Modal Sign in -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign in</h4>
                    </div>
                    <div class="modal-body">
                        <!--Form without header-->
                        <div class="card-block">
                            <!--Header-->
                            <div class="text-xs-center">
                                <h3><i class="fa fa-lock"></i> Login:</h3>
                                <hr class="mt-2 mb-2">
                            </div>
                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-asterisk prefix"></i>
                                <input type="text" id="form1" class="form-control" placeholder="Username">
                            </div>
                            <div class="md-form">
                                <i class="fa fa-unlock-alt prefix"></i>
                                <input type="password" id="form2" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-xs-center">
                                <button class="btn btn-dark-green">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>