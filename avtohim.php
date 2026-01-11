<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "Автомобильная химия";
include_once("templateParts/head.php"); ?>

<body>

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "navbar-light";
	include_once("templateParts/navbar.php"); ?>

	<section class="header-secondary">
		<div class="container">
			<div class="header-secondary-wrapper">
				<div class="header-secondary-content">
					<div class="separator header-secondary-separator"></div>
					<h2 class="section-title header-secondary-title"><?= $page_title ?></h2>
					<div class="breadcrumbs">
						<a href="index.php" class="breadcrumbs-home">Главная — </a>
						<span class="breadcrumbs-current"><?= $page_title ?></span>
					</div>
				</div>
				<div class="header-secondary-img-block">
					<img class="header-secondary-img" src="img/avto-him-header.png" alt="logo">
				</div>
			</div>
		</div>
	</section>
	<section class="section section-experts">
		<div class="container">
			<div class="avtohim-wrapper">
				<div class="avtohim-image-wrapper">
					<img src="img/contract-avtohim.png" class="avtohim-photo" alt="contract-avtohim">
				</div>
				<div class="experts-content">
					<div class="separator"></div>
					<h2 class="section-title">Контрактное производство автомобильной химии</h2>
					<p class="experts-text">
						Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
						Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
					</p>
				</div>
			</div>

		</div>
	</section>

	<?php
	$features_slider_color = "features-slider-dark";
	include_once("templateParts/swiper/features-slider.php"); ?>

	<section class="section section-ourProduction">
		<div class="container container-right">
			<div class="ourProduction-wrapper experts-wrapper">
				<div class="ourProduction-title-separator-block">
					<div class="separator ourProduction-saparator-hidden"></div>
					<h2 class="section-title ourProduction-title-hidden">Изготовление автохимии</h2>
				</div>
				<div class="ourProduction-content experts-content">
					<div class="separator ourProduction-saparator"></div>
					<h2 class="section-title ourProduction-title">Изготовление автохимии</h2>
					<p class="ourProduction-text experts-text">
						Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
					</p>

					<ul class="clients-list">
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car"></use>
							</svg>
							Автомобильная химия
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car-cosm"></use>
							</svg>
							Бытовая химия
						</li>

						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#bricks"></use>
							</svg>
							Дезинфицирующие средства
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#brush"></use>
							</svg>
							Пищевые аэрозоли
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#cosmetic"></use>
							</svg>
							Косметическая продукция
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car-cosm"></use>
							</svg>
							Краски аэрозольные
						</li>
					</ul>
				</div>

				<div class="izgot-avtohim-wrapper">
					<img src="img/izgot-avtohim.png" class="izgot-avtohim" alt="izgot-avtohim">
				</div>

			</div>

		</div>
	</section>
	<section class="section avtohim-types">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">Виды автохимии</h2>
			<p class="ourProduction-text experts-text text">
				Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
			</p>
			<ul class="avtohim-types-list">
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Антискотч
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Многоцелевая смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Жидкий ключ
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Высокотемпературная смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<div class="avtohim-types-item-end">
						Универсальный очиститель деталей
					</div>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Силиконовая смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Цепная смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Медная смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Графитовая смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель кондиционера пенный
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель тормозных дисков
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель битумных пятен
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель кондционера
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель дросельной заслонки
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель обивки
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Тефлоновая смазка
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Очиститель двигателя
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Универсальный очиститель
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Чернитель шин
					</span>
				</li>
				<li class="avtohim-types-item">
					<span class="avtohim-types-item-start">
						—
					</span>
					<span class="avtohim-types-item-end">
						Чернитель шин + очистка
					</span>
				</li>

			</ul>
		</div>
	</section>


	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>

</body>

</html>