@extends('layouts.master')

@section('title')
	Laravel 5.3 Shopping Cart
@stop

@section('content')
	@if (Session::has('success'))
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<div id="charge-message" class="alert alert-success">
				{{ Session::get('success') }}
			</div>
		</div>
	</div>
	@endif
	@foreach ($products->chunk(3) as $productsChunk)
		<div class="row">
			@foreach ($productsChunk as $product)
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
					  <img src="{{ $product->imagePath }}" alt="..." class="image-responisve" >
					  <div class="caption">
					    <h3>{{ $product->title }}</h3>
					    <p class="description">{{ $product->description }}</p>
					    <div class="clearfix">
					    	<div class="pull-left price">$ {{ $product->price }}</div>
					     	<a href="{{ route('product.addToCart', ['id'=> $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
					 	</div>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
	@endforeach
@stop