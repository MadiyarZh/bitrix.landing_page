<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $APPLICATION->ShowHead(); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<link href="local/templates/blog/assets/styles/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="local/templates/blog/assets/styles/style.css">
</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
	<header class="container header_class">
		<a href="/" class="logo">
			<img src="local/templates/blog/assets/img/main_logo.png">
		</a>


		<?$APPLICATION->IncludeComponent("bitrix:menu", "main__menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
		

		<!-- <ul class="main_menu">
			<li>
				<a href="">
					О нас
				</a>
			</li>
			<li>
				<a href="">
					Портфолио
				</a>
			</li>
			<li>
				<a href="">
					Тариф
				</a>
			</li>
			<li>
				<a href="">
					Блог
				</a>
			</li>
			<li>
				<a href="">
					Контакты
				</a>
			</li>
		</ul> -->
	</header>
	<div class="container">