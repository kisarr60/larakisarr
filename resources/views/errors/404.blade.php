@extends('errors::layout')
@section('title', 'Page introuvable')

@section('message')
<h3>Waaww!!</h3>
La page demandée est introuvable <br>
<h6><a href="{{route('root_path')}}">Retour à l'accueil</a></h6>
@stop

