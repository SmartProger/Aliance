<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "Главная";
include_once("templateParts/head.php"); ?>

<body class="front-page">

	<? include_once("templateParts/mobileMenu.php"); ?>
	<? include_once("templateParts/navbar.php"); ?>


	<header class="header header-image">
		<div class="container">
			<div class="header-content">
				<div class="separator"></div>
				<h1 class="header-title">
					Комплексное обеспечение товарами и расходными материалами бизнеса
				</h1>
				<p class="header-text">
					Высокий уровень вовлечения представителей целевой аудитории является четким
					доказательством простого факта: высококачественный прототип будущего проекта напрямую
					зависит от анализа существующих паттернов поведения.
				</p>
				<button class="button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
			</div>
			<!-- /.header-content -->

			<!-- Slider main container -->
			<div class="swiper features-slider">
				<!-- Additional required wrapper -->
				<ul class="swiper-wrapper header-features">
					<!-- Slides -->
					<li class="swiper-slide header-features-item">
						<svg width="36px" height="36px">
							<use href="img/sprite.svg#time"></use>
						</svg>
						<p class="header-features-text">Непрерывная работа c 2017 года</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36px" height="36px">
							<use href="img/sprite.svg#sertificate"></use>
						</svg>
						<p class="header-features-text">Вся продукция сертифицирована</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36px" height="36px">
							<use href="img/sprite.svg#control"></use>
						</svg>
						<p class="header-features-text">Контроль качества на всех этапах</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36px" height="36px">
							<use href="img/sprite.svg#delivery"></use>
						</svg>
						<p class="header-features-text">Возможны поставки по всей России</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36px" height="36px">
							<use href="img/sprite.svg#speed"></use>
						</svg>
						<p class="header-features-text">Оперативное производство</p>
					</li>
				</ul>

				<!-- If we need navigation buttons -->
				<div class="slider-buttons">
					<div class="slider-button-prev">
						<svg width="36px" height="24px">
							<use href="img/sprite.svg#arrow-prev"></use>
						</svg>
					</div>
					<div class="slider-button-next">
						<svg width="36px" height="24px">
							<use href="img/sprite.svg#arrow-next"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</header>
	<? include_once("templateParts/shemaRaboty.php"); ?>

	<section class="section production">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">контрактное производство</h2>
			<div class="cards">
				<a href="#" class="card">
					<div class="card-content">
						<h3 class="card-title">Автомобильная химия</h3>
						<p class="card-text">
							Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
							воздействия.
						</p>
					</div>
					<img src="img/avto-him.png" alt="Автомобильная химия" class="card-image" />
				</a>
				<a href="#" class="card">
					<div class="card-content">
						<h3 class="card-title">Бытовая химия</h3>
						<p class="card-text">
							А также стремящиеся вытеснить традиционное производство, нанотехнологии
							функционально разнесены на независимые элементы.
						</p>
					</div>
					<img src="img/byt-him.png" alt="Бытовая химия" class="card-image" />
				</a>
				<a href="#" class="card">
					<div class="card-content">
						<h3 class="card-title">Дезинфицирующие средства</h3>
						<p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
					</div>
					<img src="img/dez-sredstva.png" alt="Дезинфицирующие средства" class="card-image" />
				</a>
				<a href="#" class="card">
					<div class="card-content">
						<h3 class="card-title">Пищевые аэрозоли</h3>
						<p class="card-text"></p>
					</div>
					<img src="img/dez-sredstva.png" alt="Пищевые аэрозоли" class="card-image" />
				</a>
				<a href="#" class="card">
					<div class="card-content">
						<h3 class="card-title">Косметическая продукция</h3>
						<p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
					</div>
					<img src="img/avto-him.png" alt="Косметическая продукция" class="card-image" />
				</a>
				<a href="#" class="card">
					<div class="card-content">
						<h3 class="card-title">Краски аэрозольные</h3>
						<p class="card-text">
							А также стремящиеся вытеснить традиционное производство, нанотехнологии
							функционально разнесены на независимые элементы.
						</p>
					</div>
					<img src="img/byt-him.png" alt="Краски аэрозольные" class="card-image" />
				</a>
			</div>
		</div>
	</section>
	<section class="section trademark">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">собственные торговые марки</h2>
			<div class="trademark-cards">
				<div class="trademark-card">
					<svg class="trademark-card-logo">
						<use href="img/sprite.svg#AGTECH"></use>
					</svg>
					<h3 class="trademark-card-title">Автохимия AG-Tech</h3>
					<p class="trademark-card-text">
						Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
						создаёт предпосылки для поставленных обществом задач.
					</p>
				</div>
				<div class="trademark-card">
					<svg class="trademark-card-logo">
						<use href="img/sprite.svg#AP"></use>
					</svg>
					<h3 class="trademark-card-title">Автохимия AP</h3>
					<p class="trademark-card-text">
						Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
						создаёт предпосылки для поставленных обществом задач.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section founder">
		<picture class="founder-photo">
			<source type="image/webp" srcset="img/founder.webp">
			<source type="image/jpeg" srcset="img/founder.jpg">
			<img src="img/founder.jpg" class="founder-photo" alt="founder">
		</picture>
		<div class="container">
			<div class="founder-content-wrapper">
				<div class="founder-content">
					<div class="separator"></div>
					<h2 class="section-title">Отношение к делу и к клиентам</h2>
					<p class="founder-text">
						Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
						показывает, что укрепление и развитие внутренней структуры говорит о возможностях
						соответствующих условий активизации. Внезапно, независимые государства, которые
						представляют собой яркий пример континентально-европейского типа политической
						культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся
						международной обстановки, синтетическое тестирование выявляет срочную потребность
						системы массового участия. А ещё действия представителей оппозиции, превозмогая
						сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами
						себе. Не следует, однако, забывать, что выбранный нами инновационный путь в
						значительной степени обусловливает важность дальнейших направлений развития.
					</p>
					<a href="#" class="button-link">Подробнее о компании</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /.section founder -->
	<section class="section clients">
		<div class="container">
			<div class="separator"></div>
			<div class="clients-wrapper">
				<div class="clients-content">
					<h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
					<ul class="clients-list">
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#him"></use>
							</svg>
							Химические производства
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car"></use>
							</svg>
							Автомойки
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#eat"></use>
							</svg>
							Пищевая продукция
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#brush"></use>
							</svg>
							Лаки и краски
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#cosmetic"></use>
							</svg>
							Косметические средства
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car-cosm"></use>
							</svg>
							Автомобильная косметика
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#shirt"></use>
							</svg>
							Косметика по уходу за одеждой
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#boots"></use>
							</svg>
							Косметика по уходу за обувью
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#bricks"></use>
							</svg>
							Строительные материалы
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#more"></use>
							</svg>
							И многих других
						</li>
					</ul>
				</div>
				<div class="clients-logo-list">
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
					<a href="#" class="clients-logo-item">
						<img src="img/client.png" alt="client" class="clients-logo" />
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section blog">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">Блог экспертов в области производства</h2>
			<div class="swiper blog-slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper blog">
					<!-- Slides -->
					<a href="#" class="swiper-slide blog-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo1.webp">
							<source type="image/jpeg" srcset="img/blog-photo1.jpg">
							<img src="img/blog-photo1.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
						<h3 class="blog-card-title">
							Современная методология разработки одухотворила всех причастных
						</h3>
						<p class="blog-card-text">
							Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
							ситуацию, в равной степени предоставлены...
						</p>
					</a>
					<a href="#" class="swiper-slide blog-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo2.webp">
							<source type="image/jpeg" srcset="img/blog-photo2.jpg">
							<img src="img/blog-photo2.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
						<h3 class="blog-card-title">
							Современная методология разработки одухотворила всех причастных
						</h3>
						<p class="blog-card-text">
							Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
							ситуацию, в равной степени предоставлены...
						</p>
					</a>
					<a href="#" class="swiper-slide blog-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo1.webp">
							<source type="image/jpeg" srcset="img/blog-photo1.jpg">
							<img src="img/blog-photo1.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
						<h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
						<p class="blog-card-text">
							Сложно сказать, почему элементы политического процесса функционально разнесены на
							независимые элементы. Безусловно, высокотехнологичная...
						</p>
					</a>
				</div>

				<!-- If we need navigation buttons -->
				<div class="blog-slider-footer">
					<a href="#" class="button-link">весь блог</a>
					<div class="blog-buttons primary-buttons">
						<div class="blog-button-prev primary-button-prev">
							<svg width="36px" height="24px">
								<use href="img/sprite.svg#arrow-prev"></use>
							</svg>
						</div>
						<div class="blog-button-next primary-button-next">
							<svg width="36px" height="24px">
								<use href="img/sprite.svg#arrow-next"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>
</body>

</html>