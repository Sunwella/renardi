@extends('layouts.app')

@section('content')
	<section id="page-title">

		<div class="container">
			<h1>Корзина</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
				<li class="breadcrumb-item"><a href="{{ route('catalog') }}">Каталог</a></li>
				<li class="breadcrumb-item active" aria-current="page">Корзина</li>
			</ol>
		</div>

	</section>

	<section id="content">
			<div class="content-wrap">
				<div class="container">

					<table class="table cart mb-5">
						<thead>
							<tr>
								<th class="cart-product-remove">&nbsp;</th>
								<th class="cart-product-thumbnail">&nbsp;</th>
								<th class="cart-product-name">Название</th>
								<th class="cart-product-price">Цена</th>
								<th class="cart-product-quantity">Количество</th>
								<th class="cart-product-subtotal">Итого</th>
							</tr>
						</thead>
						<tbody>
							<tr class="cart_item">
								<td class="cart-product-remove">
									<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
								</td>

								<td class="cart-product-thumbnail">
									<a href="#"><img width="64" height="64" src="img-renardi/shop/belis.png"></a>
								</td>

								<td class="cart-product-name">
									<a href="#">Бейлис</a>
								</td>

								<td class="cart-product-price">
									<span class="amount">1 640 руб.</span>
								</td>

								<td class="cart-product-quantity">
									<div class="quantity">
										<input type="button" value="-" class="minus">
										<input type="text" name="quantity" value="2" class="qty" />
										<input type="button" value="+" class="plus">
									</div>
								</td>

								<td class="cart-product-subtotal">
									<span class="amount">3 280 руб.</span>
								</td>
							</tr>
							<tr class="cart_item">
								<td class="cart-product-remove">
									<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
								</td>

								<td class="cart-product-thumbnail">
									<a href="#"><img width="64" height="64" src="img-renardi/shop/bow.png"></a>
								</td>

								<td class="cart-product-name">
									<a href="#">Бант</a>
								</td>

								<td class="cart-product-price">
									<span class="amount">1 700 руб.</span>
								</td>

								<td class="cart-product-quantity">
									<div class="quantity">
										<input type="button" value="-" class="minus">
										<input type="text" name="quantity" value="1" class="qty" />
										<input type="button" value="+" class="plus">
									</div>
								</td>

								<td class="cart-product-subtotal">
									<span class="amount">1 700 руб.</span>
								</td>
							</tr>
							<tr class="cart_item">
								<td class="cart-product-remove">
									<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
								</td>

								<td class="cart-product-thumbnail">
									<a href="#"><img width="64" height="64" src="img-renardi/shop/karuzel.jpg"></a>
								</td>

								<td class="cart-product-name">
									<a href="#">Карузель</a>
								</td>

								<td class="cart-product-price">
									<span class="amount">1 599 руб.</span>
								</td>

								<td class="cart-product-quantity">
									<div class="quantity">
										<input type="button" value="-" class="minus">
										<input type="text" name="quantity" value="3" class="qty" />
										<input type="button" value="+" class="plus">
									</div>
								</td>

								<td class="cart-product-subtotal">
									<span class="amount">4 797 руб.</span>
								</td>
							</tr>
							<tr class="cart_item">
								<td colspan="6">
									<div class="row justify-content-between py-2 col-mb-30">
										<div class="col-lg-auto pl-lg-0">
											<div class="row">
												<div class="col-md-8">
													<input type="text" value="" class="sm-form-control text-center text-md-left" placeholder="Введите промокод..." />
												</div>
												<div class="col-md-4 mt-3 mt-md-0">
													<a href="#" class="button button-3d button-black m-0">Промокод</a>
												</div>
											</div>
										</div>
										<div class="col-lg-auto pr-lg-0">
											<a href="{{ route('checkout') }}" class="button button-3d m-0">Оформить заказ</a>
											<a href="{{ route('catalog') }}" class="button button-3d mt-2 mt-sm-0 mr-0">Продолжить покупки</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>

					</table>

				</div>
			</div>
		</section>
@endsection