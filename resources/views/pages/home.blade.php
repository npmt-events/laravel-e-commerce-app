@extends('layouts.app')
@section('content')
	<div class="bg-white px-0">
		<p class="h2 text-center font-weight-light"><span><i class="fa fa-star text-warning"></i></span>New</p>
		<div class="row mx-auto justify-content-around p-2">
			@foreach($randomProducts as $product)
			<x-product-card :product="$product" />
			@endforeach
		</div>
		<p class="h2 bg-warning text-center rounded p-2">Big Deal</p>
		<div class="row mx-auto justify-content-around p-2">
			@foreach($offerProducts as $product)
			<x-product-card :product="$product" />
			@endforeach
		</div>
	</div>
@endsection