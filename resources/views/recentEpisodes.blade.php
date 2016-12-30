@extends('layouts.templateLOG')
@section('content')
<title>Recent Episodes - ononani.me</title>
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

                @foreach ($mesEpisodes as $ligne)
                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 episode-grid">
                        <!--episode-block-->
                        @foreach ($mesAnime as $ligne2)
                        @if ($ligne->NUMANIME === $ligne2->NUMANIME)
                        <div class="view overlay hm-teal-strong episode-list" style="background-image: url('{{ $ligne2->IMGANIME }}');">
                            <a href="#!">
                                <div class="mask">
                                    <i class="fa fa-play-circle play-button"></i>
                                </div>
                            </a>
                        </div>
                        <!--/.episode-block-->
                        <!--episode-block-title-->
                        
                        <a href="#!" title="{{ $ligne2->NOMANIME }}">
                            <div style="float: left; width: 80%;">
                                <p class="episode-name">{{ $ligne2->NOMANIME }}</p>
                            </div>
                        </a>
                        @endif
                        @endforeach
                        <div style="float: right;">
                            <p class="episode-number">Ep. {{ $ligne->NUMEPISODE }}</p>
                        </div>
                        <!--/.episode-block-title-->
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <!--/.episode-row-->
        <hr style="margin-top: -15px;">
        <div style="text-align: center;">
            <div class="custom-pagination unselectable" style="display: inline-block;">
                {!! $mesEpisodes->render() !!}
            </div>
        </div>
    </div>
    <!--/.Main layout-->
</main>
@stop