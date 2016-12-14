@extends('layouts.master')
@section('content')
<h1>Mes anime</h1>
<hr>
<table>
@foreach($mesAnime as $ligne)
<tr>
    <td>{{$ligne->NUMANIME}}</td>
    <td>{{$ligne->NUMSTUDIO}}</td>
    <td>{{$ligne->NOMANIME}}</td>
    <td>{{$ligne->SAISONANIME}}</td>
    <td>{{$ligne->ANNEEANIME}}</td>
    <td>{{$ligne->NBEPISODES}}</td>
    <td>{{$ligne->RESUME}}</td>
    <td>{{$ligne->ESTFINI}}</td>
<td style="text-align:center;"><a href="{{ url('/modifierAnime') }}/{{ $ligne->NUMANIME }}">
            <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span>
        </a>
    </td>
</tr>
@endforeach
</table>
<hr>
@stop