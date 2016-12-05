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
        {!! Html::style('assets/css/style.css') !!}
        <!-- SCRIPTS -->
        {!! Html::script('assets/js/jquery-3.1.1.min.js') !!}
        {!! Html::script('assets/js/tether.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/mdb.min.js') !!}
    </head>
    <body id="home">
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
                    <a class="navbar-brand" href="">ononani.me</a>
                    <!--Links-->
                    <ul class="nav navbar-nav" style="float: right;">
                        <li class="nav-item">
                            <a class="nav-link" href="LOGIN">Sign in</a>
                        </li>
                    </ul>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="background-color: transparent; margin-top: 20%;"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="http://i.imgur.com/yXHWJ5w.png" id="banniere">
                        </div>
                    </div>
                    <div class="row">
                        <!--First column-->
                        <div class="col-lg-3">
                        </div>
                        <!--Second column-->
                        <div class="col-lg-6">
                            <!--Form-->
                            <div class="card transparent wow fadeInDown bordure">
                                <div class="card-block">
                                    <!--Header-->
                                    <div class="text-xs-center fff">
                                        <h3><i class="fa fa-user"></i> Register</h3>
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix fff"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix fff"></i>
                                        <input type="password" id="form4" class="form-control">
                                        <label for="form4">Password</label>
                                    </div>

                                    <div class="text-xs-center">
                                        <button class="btn btn-primary btn-dark-green btn-lg">Sign up</button>
                                        <button class="btn btn-pink btn-lg">Sign in</button>
                                    </div>

                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->

                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="background-color: transparent; margin-top: 140%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->
    </body>
</html>