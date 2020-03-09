@extends('layouts.app')
@section('content')
	<div class="bg-white p-2">
		<p class="h2 bg-primary text-light text-center rounded p-2">New Products</p>
		<div class="row mx-auto justify-content-around">
			@foreach($randomProducts as $product)
			<x-product-card :product="$product" />
			@endforeach
		</div>
	</div>
@endsection