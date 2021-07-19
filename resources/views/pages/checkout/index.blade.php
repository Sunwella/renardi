@extends('layouts.app')

@section('content')
	<section id="page-title">

		<div class="container clearfix">
			<h1>Оформление заказа</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
				<li class="breadcrumb-item"><a href="{{ route('catalog') }}">Каталог</a></li>
				<li class="breadcrumb-item"><a href="{{ route('cart') }}">Корзина</a></li>
				<li class="breadcrumb-item active" aria-current="page">Оформление заказа</li>
			</ol>
		</div>

	</section>

	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">


				<div class="row col-mb-50 gutter-50">
					<div class="col-lg-12">
						<h3>Контактная информация</h3>

						<p></p>

						<form id="billing-form" name="billing-form" class="row mb-0" action="#" method="post">

							<div class="col-md-6 form-group">
								<label for="billing-form-name">Имя:</label>
								<input type="text" id="billing-form-name" name="billing-form-name" value="" class="sm-form-control" />
							</div>

							<div class="col-md-6 form-group">
								<label for="billing-form-lname">Фамилия:</label>
								<input type="text" id="billing-form-lname" name="billing-form-lname" value="" class="sm-form-control" />
							</div>

							<div class="w-100"></div>


							<div class="col-12 form-group">
								<label for="billing-form-address">Адрес:</label>
								<input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
							</div>

							<div class="col-12 form-group">
								<input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
							</div>

							<div class="col-12 form-group">
								<label for="billing-form-city">Город:</label>
								<input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
							</div>

							<div class="col-md-6 form-group">
								<label for="billing-form-email">Email:</label>
								<input type="email" id="billing-form-email" name="billing-form-email" value="" class="sm-form-control" />
							</div>

							<div class="col-md-6 form-group">
								<label for="billing-form-phone">Телефон:</label>
								<input type="text" id="billing-form-phone" name="billing-form-phone" value="" class="sm-form-control" />
							</div>

						</form>
					</div>

					<div class="w-100"></div>

					<div class="col-lg-6">
						<h4>Ваш заказ</h4>

						<div class="table-responsive">
							<table class="table cart">
								<thead>
									<tr>
										<th class="cart-product-thumbnail">&nbsp;</th>
										<th class="cart-product-name">Название</th>
										<th class="cart-product-quantity">Количество</th>
										<th class="cart-product-subtotal">Итого</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="cart-product-thumbnail">
											<a href="#"><img width="64" height="64" src="img-renardi/shop/belis.png"></a>
										</td>

										<td class="cart-product-name">
											<a href="#">Бейлис</a>
										</td>

										<td class="cart-product-quantity">
											<div class="quantity clearfix">
												1x2
											</div>
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">3 280 руб.</span>
										</td>
									</tr>
									<tr class="cart_item">
										<td class="cart-product-thumbnail">
											<a href="#"><img width="64" height="64" src="img-renardi/shop/bow.png"></a>
										</td>

										<td class="cart-product-name">
											<a href="#">Бант</a>
										</td>

										<td class="cart-product-quantity">
											<div class="quantity clearfix">
												1x1
											</div>
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">1 700 руб.</span>
										</td>
									</tr>
									<tr class="cart_item">
										<td class="cart-product-thumbnail">
											<a href="#"><img width="64" height="64" src="img-renardi/shop/karuzel.jpg"></a>
										</td>

										<td class="cart-product-name">
											<a href="#">Карузель</a>
										</td>

										<td class="cart-product-quantity">
											<div class="quantity clearfix">
												1x3
											</div>
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">4 797 руб.</span>
										</td>
									</tr>
								</tbody>

							</table>
						</div>
					</div>

					<div class="col-lg-6">
						<h4>Итого </h4>

						<div class="table-responsive">
							<table class="table cart">
								<tbody>
									<tr class="cart_item">
										<td class="border-top-0 cart-product-name">
											<strong>Сумма заказа</strong>
										</td>

										<td class="border-top-0 cart-product-name">
											<span class="amount">9 777 руб.</span>
										</td>
									</tr>
									<tr class="cart_item">
										<td class="cart-product-name">
											<strong>Доставка</strong>
										</td>

										<td class="cart-product-name">
											<span class="amount">800 руб.</span>
										</td>
									</tr>
									<tr class="cart_item">
										<td class="cart-product-name">
											<strong>Итого к оплате</strong>
										</td>

										<td class="cart-product-name">
											<span class="amount color lead"><strong>10 577 руб.</strong></span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="accordion clearfix">
							<div class="accordion-header">
								<div class="accordion-icon">
									<i class="accordion-closed icon-line-minus"></i>
									<i class="accordion-open icon-line-check"></i>
								</div>
								<div class="accordion-title">
									Оплата при получении
								</div>
							</div>
							<div class="accordion-content clearfix">Оплатите наличными или картой курьеру при получении.</div>


							<div class="accordion-header">
								<div class="accordion-icon">
									<i class="accordion-closed icon-line-minus"></i>
									<i class="accordion-open icon-line-check"></i>
								</div>
								<div class="accordion-title">
									Онлайн-оплата картой
								</div>
							</div>
							<div class="accordion-content clearfix">Оплатите заказ онлайн картой. Для этого попросите у операта ссылку на старницу оналайн-оплаты заказа.</div>
						</div>
						<a href="{{ route('thanks') }}" class="button button-3d float-right">Оформить заказ</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection