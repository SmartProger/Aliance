<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "О компании";
include_once("templateParts/head.php"); ?>

<body>

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "navbar-light";
	include_once("templateParts/navbar.php"); ?>
	<?php include_once("templateParts/header-secondary.php"); ?>

	<section class="section-experts">
		<div class="container">
			<div class="experts-wrapper">
				<picture class="experts-photo">
					<source type="image/webp" srcset="img/experts.webp">
					<source type="image/jpeg" srcset="img/experts.jpg">
					<img src="img/experts.jpg" class="experts-photo" alt="experts">
				</picture>
				<div class="experts-content">
					<div class="separator"></div>
					<h2 class="section-title">мы - эксперты в области производства химии</h2>
					<p class="experts-text">
						Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
					</p>
				</div>
			</div>

		</div>
	</section>

	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>

</body>

</html>