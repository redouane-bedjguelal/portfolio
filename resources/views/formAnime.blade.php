@extends('layouts.templateLOG')
@section('content')
<title>Add / Edit Anime - ononani.me</title>
<main>
    <div class="container font-white anime-content">
        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive bold font-lightteal">ADD / EDIT
                    <small class="text-muted bold">ANIME</small>
                </h1>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        {!! Form::open(['url' => 'validerAnime']) !!}
        <div class="col-md-12  col-sm-12 well well-md">
            <center><h1> </h1></center>
            <div class="form-horizontal"> 
                <input type="hidden" name="idAnime" value="{{$unAnime->NUMANIME or 0}}">
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Titre : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="nomAnime" value="{{$unAnime->NOMANIME or ''}}" class="form-control" placeholder="Entrez un titre" required autofocus>
                    </div>

                    <label class="col-md-3 col-sm-3 control-label">Année : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="annee" value="{{$unAnime->ANNEEANIME or ''}}" class="form-control" required>
                    </div>

                    <label class="col-md-3 col-sm-3 control-label">Saison : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="saison" value="{{$unAnime->SAISONANIME or ''}}" class="form-control" required>
                    </div>

                    <label class="col-md-3 col-sm-3 control-label">Nombre d'épisodes : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="nbEp" value="{{$unAnime->NBEPISODES or ''}}" class="form-control" required>
                    </div>

                    <label class="col-md-3 col-sm-3 control-label">Fini : </label><br>
                    <div class="col-md-3 col-sm-3">
                        <input type="radio" name="fini" value='1'>Oui<br/>
                        <input type="radio" name="fini" value='0'>Non<br/>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Studio : </label>

                    <div class="col-md-3 col-sm-3">
                        <select class="form-control" name="studio" value="{{$unAnime->STUDIO or ''}}" required="">
                            <option value="0"></option>
                            @foreach ($mesStudios as $unStudio)
                            <option value="{{$unStudio->NUMSTUDIO}}">{{$unStudio->NOMSTUDIO}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <br/>

                    <label class="col-md-3 col-sm-3 control-label">Genre(s) : </label>

                    <div class="col-md-3 col-sm-3">
                        <select class="form-control" name="genre1" required="">
                            <option value="0"></option>
                            @foreach ($mesGenres as $unGenre)
                            <option value="{{$unGenre->NUMGENRE}}">{{$unGenre->LIBELLEGENRE}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <select class="form-control" name="genre2">
                            <option value="0"></option>
                            @foreach ($mesGenres as $unGenre)
                            <option value="{{$unGenre->NUMGENRE}}">{{$unGenre->LIBELLEGENRE}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <select class="form-control" name="genre3">
                            <option value="0"></option>
                            @foreach ($mesGenres as $unGenre)
                            <option value="{{$unGenre->NUMGENRE}}">{{$unGenre->LIBELLEGENRE}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Cover : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="image" value="{{$unAnime->IMGANIME or ''}}" class="form-control" placeholder="Cover URL" required>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Résumé : </label>
                    <div class="col-md-3  col-sm-3">
                        <textarea class="font-white" rows="5" cols="60" name="resume" placeholder="Entrez un résumé">{{$unAnime->RESUME or ''}}</textarea> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-default btn-primary">
                            <span class="glyphicon glyphicon-ok"></span> Valider
                        </button>
                        &nbsp;
                        <button type="button" class="btn btn-default btn-primary" 
                                onclick="javascript: window.location = '';">
                            <span class="glyphicon glyphicon-remove"></span> Annuler</button>
                    </div>           
                </div>
                <div class="col-md-6 col-md-offset-3  col-sm-6 col-sm-offset-3">

                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</main>
@stop

