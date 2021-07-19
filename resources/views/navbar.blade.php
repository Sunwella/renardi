<header id="header" class="full-header">
	<div id="header-wrap">
		<div class="container">
			<div class="header-row">

				<!-- логотип -->
				<div id="logo">
					
					<a href="{{ route('home') }}" class="retina-logo">
						<img src="img-renardi/renardi-logo.png" alt="Renardi Logo">
					</a>
				</div>

				<div class="header-misc">

					<!-- корзина -->
					<div id="top-cart" class="header-misc-icon d-none d-sm-block">
						<a href="{{ route('cart') }}">
							<i class="icon-line-bag"></i>
							<span class="top-cart-number">5</span>
						</a>
					</div>

				</div>

				<!-- уменьшение размера навбара при прокрутки страницы -->
				<div id="primary-menu-trigger">
					<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
				</div>

				<nav class="primary-menu">
					<ul class="menu-container">
						<li class="menu-item">
							<a class="menu-link" href="{{ route('home') }}">
								<div>Главная</div>
							</a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="{{ route('catalog') }}">
								<div>Каталог</div>
							</a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="{{ route('exclusive') }}">
								<div>EXCLUSIVE</div>
							</a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="{{ route('about') }}">
								<div>О нас</div>
							</a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="{{ route('pay') }}">
								<div>Оплата</div>
							</a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="{{ route('delivery') }}">
								<div>Доставка</div>
							</a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="{{ route('contact') }}">
								<div>Контакты</div>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>