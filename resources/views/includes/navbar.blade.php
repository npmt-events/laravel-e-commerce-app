@php 
	$cats = \App\Product::select('category_id')->distinct()->with('category','category.subCategory')->get();
@endphp
<div class="px-0">
	<p class="lead text-center">Category</p>
	<nav class="nav px-0">
		@foreach($cats as $cat )
		<li class="nav-item col-12">
			<a href="#menu_{{ $cat->category_id }}" class="nav-link small" data-toggle="collapse" >{{$cat->category->name}}<span class="float-right"><i class="fa fa-chevron-down"></i></span></a>
			<div class="collapse px-2 bg-white border text-center" id="menu_{{$cat->category_id}}">
				<a href="{{ url('/category/'.$cat->category_id) }}" class="nav-link small">
					All
				</a>
				@foreach($cat->category->SubCategory as $sub)
				<a href="{{ url('/sub-category/'.$sub->id) }}" class="nav-link small">
					{{$sub->name}}
				</a>
				@endforeach
			</div>
		</li>
		@endforeach
	</nav>
</div>