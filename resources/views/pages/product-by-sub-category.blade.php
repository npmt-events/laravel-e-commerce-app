@extends('layouts.app')
@section('content')

<div>
	<div class="pb-3 shadow">
		<p class="lead alert alert-info col-12">
			<a href="{{ url('/products') }}">Products </a>/
			<a href="{{ url('/category/'.$cat->category->id) }}"> {{$cat->category->name}} /</a>
			  {{ $cat->name }}
		</p>
		<p class="col-12 text-muted text-center">
			total items : {{ count($products) }}
		</p>
		<div class="row mx-auto justify-content-center" style="max-height:450px;overflow: auto;">
			@foreach($products as $product)
			<x-product-card :product="$product" />
			@endforeach
		</div>
	</div>
</div>

@endsection