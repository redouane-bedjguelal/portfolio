@extends('layouts.templateLOG')
@section('content')
<title>Anime List - ononani.me</title>
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
                <!--FAIRE UNE AUTRE PAGE POUR ANIME PAR GENRE
                <div style="float: right; padding-top: -20px;">
                    <form name="selectGenre" action="animeList" method="GET">
                        <fieldset class="form-group" onchange="this.form.submit()">
                            <select class="form-control genre-select-list" name="genre">
                                <option class="genre-select-list-drop" selected="selected" value="">-- select a genre --</option>
                                <option class="genre-select-list-drop" value="">none</option>
                                @foreach ($mesGenres as $ligne)
                                <option class="genre-select-list-drop" value="{{ $ligne->NUMGENRE }}">{{ $ligne->LIBELLEGENRE }}</option>
                                @endforeach
                            </select>
                            </table>
                        </fieldset>
                    </form>
                </div>
                -->
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        <!--anime-row-->
        <div class="row" id="content">
            <ul id="anime-list">

                <!--anime-block-->
                @foreach ($mesAnime as $ligne)
                <li>
                    <div class="col-lg-3 col-md-4 col-sm-6 anime-grid">
                        <div class="view overlay hm-teal-strong anime-list" style="background-image: url('{{ $ligne->IMGANIME }}');">
                            <a href="#!">
                                <div class="mask flex-center">
                                    <!--anime-block-title-->
                                    <p class="white-text">{{ $ligne->NOMANIME }}</p>
                                    <!--/.anime-block-title-->
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
                <!--/.anime-block-->

            </ul>
        </div>
        <!--/.anime-row-->
        <hr style="margin-top: -15px;">
        <div style="text-align: center;">
            <div class="custom-pagination unselectable" style="display: inline-block;">
                {!! $mesAnime->render() !!}
            </div>
        </div>
    </div>
    <!--/.Main layout-->
</main>
@stop