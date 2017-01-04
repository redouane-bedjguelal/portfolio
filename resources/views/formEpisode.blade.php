@extends('layouts.templateLOG')
@section('content')
<title>Add / Edit Episode - ononani.me</title>
<main>
    <div class="container font-white anime-content" style='min-height: 500px;'>
        <!--Page heading-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1-responsive bold font-lightteal">ADD / EDIT
                    <small class="text-muted bold">EPISODE</small>
                </h1>
            </div>
        </div>
        <!--/.Page heading-->
        <hr>
        {!! Form::open(['url' => 'validerEpisode']) !!}
        <div class="col-md-12  col-sm-12 well well-md">
            <center><h1> </h1></center>
            <div class="form-horizontal"> 
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Numéro d'épisode : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="idEpisode" value="{{$unEpisode->NOMEPISODE or ''}}" class="form-control" placeholder="Entrez un titre" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">Titre : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="nom" value="{{$unEpisode->NOMEPISODE or ''}}" class="form-control" placeholder="Entrez un titre" required autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 col-sm-3 control-label">ID Video : </label>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="idVideo" value="{{$unEpisode->IDVIDEO or ''}}" class="form-control" placeholder="Entrez un titre" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <br/>
                    <br/>

                    <label class="col-md-3 col-sm-3 control-label">Anime : </label>

                    <div class="col-md-3 col-sm-3">
                        <select class="form-control" name="idAnime" required="">
                            <option value="0"></option>
                            @foreach ($mesAnime as $unAnime)
                            <option value="{{$unAnime->NUMANIME}}">{{$unAnime->NOMANIME}}</option>
                            @endforeach
                        </select>
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

