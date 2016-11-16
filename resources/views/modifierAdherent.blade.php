{!! Form::open(array('route' => array('postmodifierAdherent', $unAdherent->id_adherent), 'method' => 'post')) !!}
<div class="col-md-12 well well-sm">
    <div class="form-group">
        <label class="col-md-3 control-label">Titre</label>
        <div class="col-md-3">
            <input type="hidden" name="id_manga" value="{{$unAdherent->id_adherent or ''}}"/>
            <input type="text" name="titre" value="{{unAdherent->nom_adherent or ''}}"
                   class="form-control" required autofocus/>
        </div>
    </div>
</div>