@extends('layouts.app')
@section('content')
@php
	$products = \App\Product::paginate(15);
@endphp

<div>
	<div class="row mx-auto justify-content-center py-3" style="max-height:600px;overflow: scroll;">
		@foreach($products as $product)
		<x-product-card :product="$product" />
		@endforeach
	</div>
	<div class="row justify-content-center">
		{{ $products->links() }}
	</div>
</div>

@endsection