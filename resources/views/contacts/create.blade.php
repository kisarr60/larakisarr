@extends('layouts.default', ['title' => 'Contact'])
@section('content')
	<div class="container pt-4">
    	<div class="row">
    		<div class="col-md-8 offset-2">
    			<div class="card">
					  <div class="card-header">
					  	<h2>Get In Touch</h2>
					  	<p>If you are having trouble with this service, please ask <a href="mailto:sarrsindian@gmail.com">for help.</a></p>
					  </div>
					  <div class="card-body">
					  	<form action="  {{route('contact_path')}} " method="POST">
					  		@csrf
					  		<div class="form-group has-error">
					  			<label for="name" class="control-label">Name</label>
					  			<input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
					  			@error('name')
								    <p class="alert alert-danger">{{ $message }}</p>
								@enderror
					  		</div>
					  		<div class="form-group">
					  			<label for="email" class="control-label">Email</label>
					  			<input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
					  			@error('email')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
					  		</div>
					  		<div>
					  			<label for="message" class="control-label sr-only">Message</label>
					  			<textarea class="form-control" name="message" id="mesaage" cols="30" rows="4">{{old('message')}}</textarea>
					  			@error('message')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
					  		</div>
					  </div>
					  	<div class="card-footer"><button type="submit" name="submit" class="btn-block btn btn-primary" value="Envoyer">Envoyer votre requête ---&raquo</button></div>
					  </form>
				</div>
    		</div>
    	</div>
    </div>
@stop