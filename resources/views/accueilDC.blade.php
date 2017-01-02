@extends('layouts.templateDC')
@section('content')
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
                            {!! Form::open(['url' => 'login']) !!}
                            <div class="md-form">
                                <i class="fa fa-asterisk prefix fff"></i>
                                <input type="text" name="login" id="form1" class="form-control" placeholder="Username">
                            </div>
                            <div class="md-form">
                                <i class="fa fa-unlock-alt prefix fff"></i>
                                <input type="password" name="password" id="form2" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-xs-center">
                                <button class="btn btn-primary btn-dark-green btn-lg">Sign up</button>
                                <button class="btn btn-pink btn-lg" data-toggle="modal" data-target="#myModal">Sign in</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!--/.Form-->
                </div>
                <!--/.Second column-->
            </div>
            <div class="row">
                <div class="col-lg-12" style="background-color: transparent; margin-top: 140%;"></div>
            </div>
        </div>
    </div>
</div>
<!--/.Mask-->
@stop