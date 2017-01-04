@extends('layouts.templateLOG')
@section('content')
<title>{{$user->LOGINUSER}}'s page - ononani.me</title>
<main>
    <!--Main layout-->
    <div class="container anime-content" style="min-height: 500px;">
        <div class="row">
            <div class="col-sm-3">
                <div class="anime-title font-white">
                    {{$user->LOGINUSER}}
                </div>
                <hr>
                <div class="col-sm-3 square" style="background-image: url('{{$user->AVATARUSER}}');"></div>
                <hr>
            </div>
            <!--anime-row-->
            <div class="col-sm-9">
                <div class="col-xs-12 anime-title font-white">
                    Liked
                    <hr>
                </div>
                <div>
                    <ul id="anime-list">
                        @if(count($like)>0)
                        @foreach ($like as $anime)
                        <li>
                            <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                                <!--anime-block-->
                                <div class="view overlay hm-teal-strong anime-list-user" style="background-image: url('{{$anime->IMGANIME}}');">
                                    <a href="{{ url('anime/' . $anime->NUMANIME) }}">
                                        <div class="mask flex-center">
                                            <!--anime-block-title-->
                                            <p class="white-text">{{$anime->NOMANIME}}</p>
                                            <!--/.anime-block-title-->
                                        </div>
                                    </a>
                                </div>
                                <!--/.anime-block-->
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <!--/.anime-row-->
        </div>
    </div>
    <!--/.Main layout-->
</main>
@stop