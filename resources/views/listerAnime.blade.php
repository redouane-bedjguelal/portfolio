@extends('layouts.templateLOG')
@section('content')
<title>Anime List - ononani.me</title>
<main class="anime-content" style="min-height: 500px;">
    <div class="container">
        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive bold font-lightteal">ANIME
                    <small class="text-muted bold">LIST</small>
                </h1>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        <table border="1" style="width: 100%;">
            <tr>
                <td>n°A</td>
                <td>n°S</td>
                <td>Title</td>
                <td>Season</td>
                <td>Year</td>
                <td>Eps</td>
                <td>Airing</td>
            </tr>
            @foreach($mesAnime as $ligne)
            <tr>
                <td>{{$ligne->NUMANIME}}</td>
                <td>{{$ligne->NUMSTUDIO}}</td>
                <td>{{$ligne->NOMANIME}}</td>
                <td>{{$ligne->SAISONANIME}}</td>
                <td>{{$ligne->ANNEEANIME}}</td>
                <td>{{$ligne->NBEPISODES}}</td>
                <!--<td>{{$ligne->RESUME}}</td>-->
                <td>{{$ligne->ESTFINI}}</td>
                <td style="text-align:center;"><a href="{{ url('/modifierAnime') }}/{{ $ligne->NUMANIME }}">
                        <span class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</main>
@stop