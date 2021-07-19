@extends('layouts.app')

@section('content')
	<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 120px 0; background-image: url('img-renardi/about.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
		<div class="container clearfix">
			<h1>Каталог</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
				<li class="breadcrumb-item active" aria-current="page">Каталог</li>
			</ol>
		</div>
	</section>

	<section id="content">

		<div class="content-wrap">
			<div class="container clearfix">

				<div class="row">

					<div class="col-12 col-md-auto">

						<!-- выбор категории -->
						<div class="grid-filter-wrap">
							<ul class="grid-filter" data-container="#shop">
								<li class="activeFilter"><a href="#" data-filter="*">Показать всё</a></li>
								@foreach($categories as $category)
									<li><a href="#" data-filter=".pf-dress">{{ $category->title }}</a></li>
								@endforeach
							</ul>
						</div>

					</div>

				</div>

				<div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">

					@foreach($products as $product)
						<div class="product col-lg-3 col-md-4 col-sm-6 col-12 pf-dress">
							<div class="grid-inner card">
								<div class="product-image">
									<img src="{{ $product->img }}" height="225px">
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="{{ route('product', ['shopProduct' => ($product->slug)]) }}" class="btn btn-dark" data-lightbox="ajax">
												<i class="icon-line-expand"></i>
											</a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title pl-2">
										<h3><a href="renardi/product-item.blade.php" data-lightbox="ajax">{{ $product->title }}</a></h3>
									</div>
									<div class="row">
										<div class="col-9">
											<div class="product-price pl-2"><ins>{{ $product->price }} руб.</ins></div>
										</div>
										<div class="col-3">
											<a href="#" class="btn"><i class="icon-shopping-cart"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach

				</div>

			</div>
		</div>

	</section>

@endsection