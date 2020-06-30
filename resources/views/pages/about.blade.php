@extends('layouts.default', ['title' => 'About'])
@section('content')
	<div class="container">
    	<h2>What is Larakisarr?</h2>
    	<p>Larakisarr is a clone app of <a target="_blank" href="laracarte.com">Laracarte.com</a></p>
		
		<div class="row">
			<div class="col-md-6">
				<p class="alert alert-warning">
					<i class="fas fa-bell"></i>
					<i class="fab fa-laravel"></i><i class="fas fa-exclamation-triangle"></i> This app has been built by <a target="_blank" href="https://twitter.com/ibousarr">IbouS@rr</a> for learning purposes.<i class="fas fa-laravel"></i>	
				</p>
			</div>
		</div>
		<p>Feel free to help to impove <a target="_blank" href="https://github.com/kisarr60/larakisarr">the code source.</a></p>
		<hr>
		<h2>What is Laramap?</h2>
		<p>Laramap is the website by which Larakisarr was inspired. :)</p>
		<p>More info <a href="https://laramap.com/p/about">here</a></p>
		<hr>
		<h2>Which tools and services are used in Larakisarr?</h2>
		<p>Basically, it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>...</li>
		</ul>

    </div>
@stop