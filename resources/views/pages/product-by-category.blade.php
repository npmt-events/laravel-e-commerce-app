@extends('layouts.app')
@section('content')

<div>
	<div class="row mx-auto justify-content-center bg-white py-0" style="max-height:650px;overflow: scroll;">
		<p class="lead alert alert-info col-12">
			<a href="{{ url('/products') }}">Products </a>/
			{{$cat->name}}
		</p>
		<p class="col-12 text-muted text-center">
			total items : {{ $products->total() }}
		</p>
		@foreach($products as $product)
		<x-product-card :product="$product" />
		@endforeach
	</div>
	<div class="row justify-content-center my-2">
		{{ $products->links() }}
	</div>
</div>

@endsection