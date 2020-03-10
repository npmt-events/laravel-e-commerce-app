@php 
	$cats = \App\Product::select('category_id')->distinct()->with('category','category.subCategory')->get();
@endphp
<div class="px-0  bg-white shadow pb-3 pt-2 order-2">
	<x-search-bar />
	<nav class="nav px-0 d-lg-block d-none">
		@foreach($cats as $cat )
		<li class="nav-item col-12">
			<a href="#menu_{{ $cat->category_id }}" class="nav-link small" data-toggle="collapse" >{{$cat->category->name}}<span class="float-right"><i class="fa fa-chevron-down"></i></span></a>
			<div class="collapse px-2 bg-white border text-center rounded" id="menu_{{$cat->category_id}}">
				<a href="{{ url('/category/'.$cat->category_id) }}" class="nav-link small border-bottom">
					All
				</a>
				@foreach($cat->category->SubCategory as $sub)
				<a href="{{ url('/sub-category/'.$sub->id) }}" class="nav-link small border-bottom">
					{{$sub->name}}
				</a>
				@endforeach
			</div>
		</li>
		@endforeach
	</nav>
	<div class="d-block d-lg-none row mx-auto my-2 bg-white shadow py- px-3 rounded">
		<p class="col-12 lead px-0 text-primary">
			<span><i class="fa fa-sitemap"></i></span>
			<span>Menu</span>
		</p>
		<hr>
		<div class="col-12 row mx-auto pb-3">
			<select class="col-md form-control" id="categories_menus">
				<option value="">Select Category</option>
				@foreach($cats as $cat)
				<option value="{{ $cat->category_id }}" class="bg-primary text-light">{{$cat->category->name}}</option>
					@foreach($cat->category->SubCategory as $sub)
					<option value="--{{ $sub->id }}" class="text-primary font-weight-bold small">-- {{$sub->name}}</option>
					@endforeach
				@endforeach
			</select>
			<button class="btn btn-primary col-md-auto ml-md-2 ml-0 my-md-0 my-1" id="go_btn">go</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	(function () { 
		let dir_link;
		let category_menu = document.querySelector('#categories_menus'); 
		let go_btn = document.querySelector("#go_btn");
		if(category_menu) {
			category_menu.addEventListener('change', function () {
				let link = categories_menus.value;
				if(link.indexOf("--") !== -1) {
					link = link.replace("--","");
					dir_link = "{{url("sub-category")}}/"+link;
				} else {
					dir_link = "{{url("category")}}/"+link;
				}
			});
			go_btn.addEventListener('click', function () {
				window.location.href = dir_link;
			})
		};
	})();
</script>