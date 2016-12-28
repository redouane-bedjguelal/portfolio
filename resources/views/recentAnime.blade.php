@extends('layouts.templateLOG')
@section('content')
<main>
    <!--Main layout-->
    <div class="container anime-content">

        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive bold font-lightteal">MOST RECENT
                    <small class="text-muted bold">EPISODES</small>
                </h1>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        <!--episode-rows-->
        <div class="row">
            <ul id="episode-list">

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 episode-grid">
                        <!--episode-block-->
                        <div class="view overlay hm-teal-strong episode-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask">
                                    <i class="fa fa-play-circle play-button"></i>
                                </div>
                            </a>
                        </div>
                        <!--/.episode-block-->
                        <!--episode-block-title-->
                        <a href="#!" title="Masamune-kun no Revenge">
                            <div style="float: left; width: 80%;">
                                <p class="episode-name">Masamune-kun no Revenge</p>
                            </div>
                        </a>
                        <div style="float: right;">
                            <p class="episode-number">Ep. 1</p>
                        </div>
                        <!--/.episode-block-title-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 episode-grid">
                        <!--episode-block-->
                        <div class="view overlay hm-teal-strong episode-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask">
                                    <i class="fa fa-play-circle play-button"></i>
                                </div>
                            </a>
                        </div>
                        <!--/.episode-block-->
                        <!--episode-block-title-->
                        <a href="#!" title="Masamune-kun no Revenge">
                            <div style="float: left; width: 80%;">
                                <p class="episode-name">Masamune-kun no Revenge</p>
                            </div>
                        </a>
                        <div style="float: right;">
                            <p class="episode-number">Ep. 1</p>
                        </div>
                        <!--/.episode-block-title-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 episode-grid">
                        <!--episode-block-->
                        <div class="view overlay hm-teal-strong episode-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask">
                                    <i class="fa fa-play-circle play-button"></i>
                                </div>
                            </a>
                        </div>
                        <!--/.episode-block-->
                        <!--episode-block-title-->
                        <a href="#!" title="Masamune-kun no Revenge">
                            <div style="float: left; width: 80%;">
                                <p class="episode-name">Masamune-kun no Revenge</p>
                            </div>
                        </a>
                        <div style="float: right;">
                            <p class="episode-number">Ep. 1</p>
                        </div>
                        <!--/.episode-block-title-->
                    </div>
                </li>

                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 episode-grid">
                        <!--episode-block-->
                        <div class="view overlay hm-teal-strong episode-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask">
                                    <i class="fa fa-play-circle play-button"></i>
                                </div>
                            </a>
                        </div>
                        <!--/.episode-block-->
                        <!--episode-block-title-->
                        <a href="#!" title="Masamune-kun no Revenge">
                            <div style="float: left; width: 80%;">
                                <p class="episode-name">Masamune-kun no Revenge</p>
                            </div>
                        </a>
                        <div style="float: right;">
                            <p class="episode-number">Ep. 1</p>
                        </div>
                        <!--/.episode-block-title-->
                    </div>
                </li>
                
                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 episode-grid">
                        <!--episode-block-->
                        <div class="view overlay hm-teal-strong episode-list" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                            <a href="#!">
                                <div class="mask">
                                    <i class="fa fa-play-circle play-button"></i>
                                </div>
                            </a>
                        </div>
                        <!--/.episode-block-->
                        <!--episode-block-title-->
                        <a href="#!" title="Masamune-kun no Revenge">
                            <div style="float: left; width: 80%;">
                                <p class="episode-name">Masamune-kun no Revenge</p>
                            </div>
                        </a>
                        <div style="float: right;">
                            <p class="episode-number">Ep. 1</p>
                        </div>
                        <!--/.episode-block-title-->
                    </div>
                </li>

            </ul>
        </div>
        <!--/.episode-row-->
    </div>
    <!--/.Main layout-->
    <!-- INFINITE SCROLL http://wern-ancheta.com/blog/2015/03/01/how-to-implement-scroll-in-laravel/ -->
    <!-- ou pagination() laravel-->
</main>
@stop