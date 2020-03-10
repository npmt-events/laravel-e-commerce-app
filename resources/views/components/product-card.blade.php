<div class="card px-0 col-lg-3 col-md-5 mx-3 my-2">
	<div class="card-body text-center">
		<img src="{{ url('/images')."/".$product->thumb }}" alt="{{ $product->name }}" class="img-fluid">
		<p class="lead">
		{{ $product->name }}
		</p>
		<p>
			Price : <span class="badge badge-info text-light p-1">{{ $product->price }}</span> EGP
		</p>
		<span class="badge badge-warning p-1 sale-label">{{ $product->sale }}%</span>
		
	</div>
</div>