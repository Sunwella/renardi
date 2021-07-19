@extends('layouts.app')

@section('content')
	<section id="page-title">

		<div class="container clearfix">
			<h1 class="text-center">Благодарим за оформление заказа!</h1>
		</div>

	</section>

	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">

				<div class="row col-mb-50 mb-0">

					<div class="col-lg-12">

						<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
							<h4>Ваш заказ №123456789 <span>оформлен</span></h4>
						</div>
						<p>Благодарим, что сделали заказ! В ближайшее время с вами свяжется оператор для уточнения деталей заказа и способа оплаты!</p>
					</div>
					<a href="{{ route('home') }}" class="button button-3d float-right">Вернуться на главную</a>
				</div>
			</div>
		</div>
	</section>

@endsection