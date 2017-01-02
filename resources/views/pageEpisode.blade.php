@extends('layouts.templateLOG')
@section('content')
<title>Ep. {{$idEpisode}} 
    @foreach ($mesAnime as $ligne)
    @if ($ligne->NUMANIME == $idAnime)
    {{ $ligne->NOMANIME }}
    @endif
    @endforeach
    - ononani.me
</title>
<main>
    <!--Main layout-->
    <div class="container anime-content">

        <!--video-block-->
        <div class="video-block unselectable">
            @foreach ($mesEpisodes as $ligne)
            @if ($ligne->NUMANIME == $idAnime)
            @if ($ligne->NUMEPISODE == $idEpisode)
            <p style="color: transparent;">{{$test = $ligne->IDVIDEO}}</p>
            @endif
            @endif
            @endforeach
            <iframe src="https://www.youtube.com/embed/{{$test}}?rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>

        </div>
        <!--/.video-block-->
        <!--video-bottom-buttons-->
        
        <a href="" style="pointer-events: none;"><div class="col-xs-4 video-bottom-buttons" style="z-index: 1;"><i class="fa fa-angle-left" aria-hidden="true"></i></div></a>
        <a href="" style="pointer-events: none;"><div class="col-xs-4 video-bottom-buttons" style="z-index: 1;"><i class="fa fa-list" aria-hidden="true"></i></div></a>
        <a href="" style="pointer-events: none;"><div class="col-xs-4 video-bottom-buttons" style="z-index: 1;"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a>
        @if ($idEpisode == 1)
        <a href="" style="pointer-events: none;"><div class="col-xs-4 video-bottom-buttons" style="z-index: 2; top: -50px;"><i class="fa fa-angle-left" aria-hidden="true"></i></div></a>
        @endif
        @foreach ($mesEpisodes as $ligne)
        @if ($ligne->NUMANIME == $idAnime)
        @if ($ligne->NUMEPISODE == $idEpisode - 1)
        <a href="{{ url('anime/' . $idAnime . '/' . ($idEpisode - 1)) }}"><div class="col-xs-4 video-bottom-buttons arrows" style="z-index: 2; top: -50px;"><i class="fa fa-angle-left" aria-hidden="true"></i></div></a>
        @endif
        @endif
        @endforeach
        <a href="{{ url('anime/' . $idAnime) }}"><div class="col-xs-4 video-bottom-buttons" style="z-index: 2; top: -50px;"><i class="fa fa-list" aria-hidden="true"></i></div></a>
        @foreach ($mesEpisodes as $ligne)
        @if ($ligne->NUMANIME == $idAnime)
        @if ($ligne->NUMEPISODE == $idEpisode + 1)
        <a href="{{ url('anime/' . $idAnime . '/' . ($idEpisode + 1)) }}"><div class="col-xs-4 video-bottom-buttons arrows" style="z-index: 2; top: -50px;"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a>
        @endif
        @else
        @endif
        @endforeach

        <!--/.video-bottom-buttons-->
        <!--video-title-->
        <div style="margin-top: 80px;">
            <h1 class="h3-responsive bold font-lightteal uppercase overflow-hidden" style="float:left;" title="twice">
                @foreach ($mesAnime as $ligne)
                @if ($ligne->NUMANIME == $idAnime)
                {{ $ligne->NOMANIME }}
                @endif
                @endforeach
            </h1>
            <h1 class="h3-responsive bold uppercase" style="float:right; width:30%; text-align: right;">
                <small class="text-muted bold">ep. {{$idEpisode}}</small>
            </h1>
        </div>
        <!--/.video-title-->

    </div>
    <!--/.Main layout-->
</main>

@stop