@extends('layouts.master')
@section('content')
<h1>Mes adhérents</h1>
<hr>
{{ Form::close() }}
<table>
    @foreach($mesAdherents as $ligne)
    <tr>
        <td>{{$ligne->prenom_adherent}}</td>
        <td>{{$ligne->nom_adherent}}</td>
        <td>{{$ligne->ville_adherent}}</td>
        <td style="text-align:center;"><a href="{{ url('/modifierAdherent') }}/{{ $ligne->id_adherent }}">
                <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
<hr>
@stop