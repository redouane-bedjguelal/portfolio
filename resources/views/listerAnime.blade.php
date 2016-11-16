@extends('layouts.master')
@section('content')
<h1>Mes anime</h1>
<hr>
{{ Form::close() }}
<table>
@foreach($mesAnime as $ligne)
<tr>
    <td>{{$ligne->numanime}}</td>
    <td>{{$ligne->numstudio}}</td>
    <td>{{$ligne->nomanime}}</td>
    <td>{{$ligne->saisonanime}}</td>
    <td>{{$ligne->anneeanime}}</td>
    <td>{{$ligne->nbepisodes}}</td>
    <td>{{$ligne->resume}}</td>
    <td>{{$ligne->estfini}}</td>
    <td style="text-align:center;"><a href="{{ url('/modifierAdherent') }}/{{ $ligne->id_adherent }}">
            <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span>
        </a>
    </td>
</tr>
@endforeach
</table>
<hr>
@stop