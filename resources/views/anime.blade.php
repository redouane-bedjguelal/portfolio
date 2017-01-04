@extends('layouts/master')
@section('content')

<body>
    <div>
        Titre :{{$unAnime->NOMANIME or ''}}

        Année : {{$unAnime->ANNEEANIME
                Saison : {{$unAnime->SAISONANIME or ''}}
        Nombre d'épisodes : {{$unAnime->NBEPISODES or ''}}" class="form-control" required>
        Fini : 
        Studio :{{$unAnime->STUDIO or ''}}
        Genre(s) : </label>

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


<!--
<div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Couverture : </label>
    <div class="col-md-9 col-sm-9 ">
        <input type="hidden" name ="couverture" value="{{$unLivre->couverture or ''}}"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
        <input name="couverture" type="file" class="btn btn-default pull-left"/>
    </div>
 </div>   
-->



<div class="form-group">
    <label class="col-md-3 col-sm-3 control-label">Résumé : </label>
    <div class="col-md-3  col-sm-3">
        <textarea rows="5" cols="60" name="resume" placeholder="Entrez un résumé">{{$unAnime->RESUME or ''}}</textarea> 
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
</body>

@stop

