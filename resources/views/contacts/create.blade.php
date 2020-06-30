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
					  	<form action="#" method="POST">
					  		<div class="form-group">
					  			<label for="name" class="control-label">Name</label>
					  			<input type="text" id="name" name="name" class="form-control">
					  		</div>
					  		<div class="form-group">
					  			<label for="email" class="control-label">Email</label>
					  			<input type="email" id="email" name="email" class="form-control">
					  		</div>
					  		<div>
					  			<label for="message" class="control-label sr-only">Message</label>
					  			<textarea class="form-control" name="message" id="mesaage" cols="30" rows="4"></textarea>
					  		</div>
					  </div>
					  	<div class="card-footer"><button name="submit" class="btn-block btn btn-primary" value="Envoyer">Envoyer votre requête ---&raquo</button></div>
					  </form>
				</div>
    		</div>
    	</div>
    </div>
@stop