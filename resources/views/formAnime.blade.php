@extends('layouts/master')
@section('content')

<body>
    <div>
        <h1>Ajouter un anime</h1>
        {!! Form::open(['url' => 'validerLivre']) !!}
        <div class="col-md-12  col-sm-12 well well-md">
    <center><h1> </h1></center>
    <div class="form-horizontal"> 
        <input type="hidden" name="idAnime" value="{{$unAnime->NUMANIME or 0}}">
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Titre : </label>
            <div class="col-md-3 col-sm-3">
                <input type="text" name="nomAnime" value="{{$unAnime->NOMANIME or ''}}" class="form-control" placeholder="Entrez un titre" required autofocus>
            </div>
        </div>

        <div class="form-group">
            
            <label class="col-md-3 col-sm-3 control-label">Genre(s) : </label>
            
            <div class="col-md-3 col-sm-3">
                <select class="form-control" name="categorie" required="">
                        @foreach ($lesCategories as $uneCat)
                            <option value="{{$uneCat->codecategorie}}"
                                @if( $uneCat->codecategorie == $unLivre->codecategorie )
                                     selected="selected"
                                @endif >   {{$uneCat->libellecategorie}}
                        @endforeach
                </select>
            </div>
            
        </div>
        
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Auteur : </label>
            <div class="col-md-2  col-sm-2">
                <select class="form-control" name="auteur" required="">
                    @foreach ($lesAuteurs as $unA)
                    <option value="{{$unA->idauteur}}">
                           @if ( $unA->idauteur == $unLivre->idauteur )
                                selected="selected"
                           @endif >    {{$unA->prenomauteur}} {{$unA->nomauteur}}
                    @endforeach
                </select>
            </div>
            </div>
        
        <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Couverture : </label>
            <div class="col-md-9 col-sm-9 ">
                <input type="hidden" name ="couverture" value="{{$unLivre->couverture or ''}}"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
                <input name="couverture" type="file" class="btn btn-default pull-left"/>
            </div>
         </div>   
        
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Année de parution : </label>
            <div class="col-md-3  col-sm-3">
                <input type="text" name="annee" value="{{$unLivre->anneeparution or ''}}"  class="form-control" placeholder="Entrez une année" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Nombre de pages : </label>
            <div class="col-md-3  col-sm-3">
                <input type="number" name="pages" value="{{$unLivre->resume or ''}}">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Résumé : </label>
            <div class="col-md-3  col-sm-3">
                <textarea rows="5" cols="60" name="resume" placeholder="Entrez un résumé">{{$unLivre->resume or ''}}</textarea> 
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

