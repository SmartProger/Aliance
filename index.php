<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "Главная";
include_once("templateParts/head.php"); ?>

<body class="front-page">

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "";
	include_once("templateParts/navbar.php"); ?>


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

			<?php
			$features_slider_color = "features-slider-light";
			include_once("templateParts/swiper/features-slider.php"); ?>
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

	<?php include_once("templateParts/founder.php") ?>

	<?php include_once("templateParts/clients.php") ?>


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