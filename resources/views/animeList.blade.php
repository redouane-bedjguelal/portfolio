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
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        <!--anime-row-->
        <div class="row" id="results-wrapper">
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
        <hr>
        <div style="text-align: center;">
            <div id="pagination-wrapper" class="custom-pagination unselectable" style="display: inline-block;">
                @include('layouts.pagination', ['paginator' => $mesAnime])
            </div>
        </div>
    </div>
    <!--/.Main layout-->
</main>
<!--no loading-->
<script>
    $(document).on('click', '#pagination-wrapper a', function (e) {
        e.preventDefault();
        $('#results-wrapper').load($(this).attr('href') + ' #results-wrapper');
    });
</script>
@stop