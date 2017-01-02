@extends('layouts.templateLOG')
@section('content')
<title> - ononani.me</title>
<main>
    <!--Main layout-->
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <!--Left row-->
            <div class="col-lg-4 col-md-5" style="margin-bottom: 20px;">
                <img style="width: 100%; border-radius: 0; margin-bottom: 20px;" src="{{$unAnime->IMGANIME}}" alt="anime-img">
                <div class="anime-infos font-aaa ">
                    <span class="unselectable">episodes</span>
                    <span class="anime-infos-right font-white">{{$unAnime->NBEPISODES}}</span>
                </div>
                <div class="anime-infos font-aaa">
                    <span class="unselectable">studio</span>
                    <span class="anime-infos-right font-white">{{$unStudio->NOMSTUDIO}}</span>
                </div>
                <div class="anime-infos font-aaa">
                    <span class="unselectable">aired</span>
                    <!--TODO : SAISON + ANNEE-->
                    <span class="anime-infos-right font-white">ccc</span>
                </div>
                <div class="anime-infos font-aaa">
                    <span class="unselectable">status</span>
                    <!--TODO : IF BOOL-->
                    <span class="anime-infos-right font-white">ddd</span>
                </div>
                <div class="anime-infos font-aaa">
                    <span class="unselectable">rating</span>
                    <!--TODO : RATING SYSTEM-->
                    <span class="anime-infos-right font-white">
                        <i class="fa fa-star teal-text unselectable"></i>
                        eee
                    </span>
                </div>
            </div>
            <!--/.Left row-->
            <!--Right row-->
            <div class="col-lg-8 col-md-7" style="padding-top: 19px;">
                <div class="anime-title font-white">
                    {{$unAnime->NOMANIME}}
                </div>
                <div class="font-aaa">
                    <ul class="anime-genres unselectable">
                        <!--TODO : FOREACH + RECHERCHE PAR GENRE-->
                        <li class="anime-genre"><a class="font-aaa anime-genre-link" href="">{{$mesGenres[0]}}</a></li>
                        @if($mesGenres[1]!='')
                        <li class="anime-genre"><a class="font-aaa anime-genre-link" href="">{{$mesGenres[1]}}</a></li>
                        @endif
                        @if($mesGenres[2]!='')
                        <li class="anime-genre"><a class="font-aaa anime-genre-link" href="">{{$mesGenres[2]}}</a></li>
                        @endif
                    </ul>
                </div>
                <div class="anime-synopsis font-aaa" style="margin-bottom: 20px;">
                    <!--TODO : ADD SYNOPSIS-->
                    Thalassius vero ea tempestate praefectus praetorio praesens ipse quoque adrogantis ingenii, considerans incitationem eius ad multorum augeri discrimina, non maturitate vel consiliis mitigabat, ut aliquotiens celsae potestates iras principum molliverunt, sed adversando iurgandoque cum parum congrueret, eum ad rabiem potius evibrabat, Augustum actus eius exaggerando creberrime docens, idque, incertum qua mente, ne lateret adfectans. quibus mox Caesar acrius efferatus, velut contumaciae quoddam vexillum altius erigens, sine respectu salutis alienae vel suae ad vertenda opposita instar rapidi fluminis irrevocabili impetu ferebatur.
                </div>
                <!--Episodes-->
                <div class="row" style="margin-bottom: 20px;">
                    <ul id="episode-list">

                        <!--TODO : FOREACH-->
                        <li>
                            <div class="col-lg-4 col-md-6 episode-grid">
                                <!--episode-block-->
                                <div class="view overlay hm-teal-strong episode-list-2" style="background-image: url('http://cdn.masterani.me/poster/2275GWxGpFo0.jpg');">
                                    <a href="#!">
                                        <div class="mask">
                                            <i class="fa fa-play-circle play-button"></i>
                                        </div>
                                    </a>
                                </div>
                                <!--/.episode-block-->
                                <!--episode-block-title-->
                                <a href="#!" title="Buta"><!--TODO : NOM EP-->
                                    <div style="float: left; width: 80%;">
                                        <p class="episode-name">Buta</p><!--TODO : NOM EP-->
                                    </div>
                                </a>
                                <div style="float: right;">
                                    <p class="episode-number">Ep. 1</p>
                                </div>
                                <!--/.episode-block-title-->
                            </div>
                        </li>
                        <!--/.TODO : FOREACH-->
                        
                    </ul>
                </div>
            </div>
            <!--/.Right row-->
        </div>
    </div>
    <!--/.Main layout-->
</main>
@stop
