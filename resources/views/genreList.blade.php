@extends('layouts.templateLOG')
@section('content')
<title>Genre List - ononani.me</title>
<main>
    <!--Main layout-->
    <div class="container">

        <!--Page heading-->
        <div class="row anime-content">
            <div class="col-md-12">
                <div style="float: left;">
                    <h1 class="h1-responsive bold font-lightteal">GENRE
                        <small class="text-muted bold">LIST</small>
                    </h1>
                </div>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        <!--genre-row-->
        <div class="row">
            @foreach ($mesGenres as $ligne)
            <a href="genreList/{{ $ligne->NUMGENRE }}">
                <div class="col-sm-3 col-xs-6 genre-link">
                    {{ $ligne->LIBELLEGENRE }}
                </div>
            </a>
            @endforeach
        </div>
        <!--/.genre-row-->
    </div>
    <!--/.Main layout-->
</main>
@stop