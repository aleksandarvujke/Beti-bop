@extends('layouts.layout')


@section('content')
	<div class="container">
	<?php foreach ($tretmans as $tretman): ?>
	
		<div class="wrapper-image d-flex" style="background: yellow; width: 100%; height: 350px;">
			<div class="body-image" style="width:250px;height:250px;">
				<img src="storage/{{$tretman->image}}" alt="a" class="w-100">
			</div>
				
		</div>

	
	<?php endforeach ?>
	</div>

@endsection