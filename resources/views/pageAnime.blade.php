@extends('layouts.templateLOG')
@section('content')
<title>{{$unAnime->NOMANIME}} - ononani.me</title>
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
                    <span class="anime-infos-right font-white">{{$unAnime->SAISONANIME}} {{$unAnime->ANNEEANIME}}</span>
                </div>
                <div class="anime-infos font-aaa">
                    <span class="unselectable">status</span>
                    <span class="anime-infos-right font-white">
                        @if($unAnime->ESTFINI==0)Ongoing
                        @else Finished
                        @endif
                    </span>
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
                        @foreach ($mesGenres2 as $ligne)
                        @if ($ligne->LIBELLEGENRE == $mesGenres[0])
                        <li class="anime-genre"><a class="font-aaa anime-genre-link" href="{{url('animeList/' . $ligne->NUMGENRE)}}">{{$mesGenres[0]}}</a></li>
                        @endif
                        @if($mesGenres[1]!='')
                        @if ($ligne->LIBELLEGENRE == $mesGenres[1])
                        <li class="anime-genre"><a class="font-aaa anime-genre-link" href="{{url('animeList/' . $ligne->NUMGENRE)}}">{{$mesGenres[1]}}</a></li>
                        @endif
                        @endif
                        @if($mesGenres[2]!='')
                        @if ($ligne->LIBELLEGENRE == $mesGenres[2])
                        <li class="anime-genre"><a class="font-aaa anime-genre-link" href="{{url('animeList/' . $ligne->NUMGENRE)}}">{{$mesGenres[2]}}</a></li>
                        @endif
                        @endif
                        @endforeach
                    </ul>
                </div>
                <div class="anime-synopsis font-aaa" style="margin-bottom: 20px;">
                    {{$unAnime->RESUME}}
                </div>
                <!--Episodes-->
                <div class="row" style="margin-bottom: 20px;">
                    <ul id="episode-list">

                        <!--TODO : FOREACH-->
                        @foreach ($mesEpisodes as $unEp)
                        <li>
                            <div class="col-lg-4 col-md-6 episode-grid">
                                <!--episode-block-->
                                <div class="view overlay hm-teal-strong episode-list-2" style="background-image: url('{{$unAnime->IMGANIME}}');">
                                    <a href="{{url('anime/' . $unAnime->NUMANIME . '/' . $unEp->NUMEPISODE)}}">
                                        <div class="mask">
                                            <i class="fa fa-play-circle play-button"></i>
                                        </div>
                                    </a>
                                </div>
                                <!--/.episode-block-->
                                <!--episode-block-title-->
                                <a href="{{url('anime/' . $unAnime->NUMANIME . '/' . $unEp->NUMEPISODE)}}" title="{{$unEp->NOMEPISODE}}">
                                    <div style="float: left; width: 80%;">
                                        <p class="episode-name">{{$unEp->NOMEPISODE}}</p>
                                    </div>
                                </a>
                                <div style="float: right;">
                                    <p class="episode-number">Ep.{{$unEp->NUMEPISODE}}</p>
                                </div>
                                <!--/.episode-block-title-->
                            </div>
                        </li>
                        <!--/.TODO : FOREACH-->
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--/.Right row-->
        </div>
    </div>
    <!--/.Main layout-->
</main>
@stop
