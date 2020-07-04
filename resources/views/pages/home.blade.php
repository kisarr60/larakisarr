@extends('layouts.default', ['title' => 'Accueil'])
@section('content')
	<div class="container text-center">
		@if(Session::has('message'))
		  <p class="alert alert-success">{{ Session::get('message') }}</p>
		@endif
    	<h1>Map here !!</h1>
    </div>
@stop