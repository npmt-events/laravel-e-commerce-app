@extends('layouts.app')
@section('content')

<div>
	<div class="row mx-auto justify-content-center py-3" style="max-height:650px;overflow: scroll;">
		<p class="lead alert alert-info col-12">
			<a href="{{ url('/products') }}">Products </a>/
			<a href="{{ url('/category/'.$cat->category->id) }}"> {{$cat->category->name}} /</a>
			  {{ $cat->name }}
		</p>
		<p class="col-12 text-muted text-center">
			total items : {{ count($products) }}
		</p>
		@foreach($products as $product)
		<x-product-card :product="$product" />
		@endforeach
	</div>
</div>

@endsection