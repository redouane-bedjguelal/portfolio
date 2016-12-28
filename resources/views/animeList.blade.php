@extends('layouts.templateLOG')
@section('content')
<main>
    <!--Main layout-->
    <div class="container">

        <!--Page heading-->
        <div class="row anime-content">
            <div class="col-md-12">
                <div style="float: left;">
                    <h1 class="h1-responsive bold font-lightteal">ANIME
                        <small class="text-muted bold">LIST</small>
                    </h1>
                </div>
                <div style="float: right;">
                    <h1 class="h1-responsive bold font-lightteal">
                        <small class="text-muted bold">SELECT</small>
                        GENRE
                    </h1>
                    <!--TODO : DROPDOWN LIST-->
                </div>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>

        <!--anime-row-->
        <div class="row">
            <ul id="anime-list">

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <!--anime-block-->
                        <!--TODO : IMG URL-->
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">Masamune-kun no Revenge</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                        <!--/.anime-block-->
                    </div>
                </li>

                
            </ul>
        </div>
        <!--/.anime-row-->
    </div>
    <!--/.Main layout-->
    <!-- INFINITE SCROLL http://wern-ancheta.com/blog/2015/03/01/how-to-implement-scroll-in-laravel/ -->
    <!-- ou pagination() laravel-->
</main>
@stop