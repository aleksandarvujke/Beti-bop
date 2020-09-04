@extends('layouts.layout')


@section('content')

<div class="hero-image">
	<div class="container">
		<div class="row" id="hero-title">
			<h1 class="align-middle d-flex">Početna</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row align-items-center rose-image">
		<div class="col-12 col-md-6">
			<div class="introduction-one-image">
				<div class="introduction-one-image-detail">
					<img src="images/img1.png" alt="">
					<img src="images/img2.png" alt="">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="introduction-one-content">
				<h5>Ukratko o <span>Betty-Boop</span></h5>
				<div class="section-title -style1" style="margin-bottom: 1.875em;">
					<h2>When u look good
						<br>
						U Feel Good
					</h2>
				</div>
				<p>The top three occupations in the Beauty salons Industry Group are Hairdressers, hairstylists, & cosmetologists, Manicurists and pedicurists, Receptionists & information clerks, Supervisors of personal care and service workers, and Skincare specialists.</p>

				<a href="#" class="btn-primary-betty">Saznajte više</a>
			</div>
		</div>	
	</div>
</div>

<div class="container">
		<div class="products" style="text-align: center; margin-bottom: 50px;">
			<h1 class= "">Tretmani</h1>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<?php $i=0; ?>
				 <?php foreach ($tretmans as $tretman): ?>
				 	
				 	<div class="col-sm-3 p-0 mr-4 mb-4" style="height: 361px;" id="tretman-card">	
						<a href="storage/{{$tretman->image}}"><img src="storage/{{$tretman->image}}" alt="{{$tretman->title}}" class="w-100" style="height: 150px;"></a>
						<h6 class="mt-2 mb-3 ml-2" style="text-align: left;">{{$tretman->title}}</h6>
						<p class="ml-2">Cena: {{$tretman->price}}</p>
						<p class="ml-2 mr-2" style="text-align: left; font-size: 12px; overflow: hidden; height: 50px;">{{$tretman->body}}</p>
						<a href="#" class="btn-reservation">Rezerviši</a>
					</div>
					<?php if (++$i == 6) break; ?>

				 <?php endforeach ?>
				
			</div>
		</div>
</div>

@endsection