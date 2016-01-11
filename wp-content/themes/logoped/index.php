<!DOCTYPE html>
<html lang="ru">
<head>
<!--[if lt IE 9]>
	<link rel="stylesheet" href="https://rawgit.com/codefucker/finalReject/master/reject/reject.css" media="all" />
	<script type="text/javascript" src="https://rawgit.com/codefucker/finalReject/master/reject/reject.min.js"></script>
	<![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_url' ); ?>/css/jquery.bxslider.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,700&subset=cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
	<div id="bg-wrapper">
		<div class="head-and-content">
			<div class="container">
				<div class="row" id="header">
					<div class="col-md-4">
						<h1 class="head-text">Виктория Светлицкая</h1>
						<p class="head-text">логопед-психолог в г.<span id="probel">.</span>Киеве</p>
					</div>
				<div class="col-md-8">
					<ul id="navbar" class="nav navbar-nav">
                		<li class="active"><a href="#">ГЛАВНАЯ</a></li>
               			<li><a href="#">О СЕБЕ</a></li>
                 		<li><a href="#">О ЗАНЯТИЯХ</a></li>
                 		<li><a href="#">СТОИМОСТЬ</a></li>
                 		<li><a href="#">РОДИТЕЛЯМ</a></li>
                 		<li><a href="#">NEW! ГРУППЫ</a></li>
                 		<li><a href="#">СТАТЬИ</a></li>
                 		<li><a href="#">ОТЗЫВЫ</a></li>
                 		<li><a href="#">КОНТАКТЫ</a></li>

            		</ul>
				</div>
			</div>
			<div class="row" id="content">
				<div id="head-foto" class="col-md-5" >
					<img src="<?php bloginfo( 'template_url' ); ?>/images/head-foto.jpg">
				</div>
				<div class="col-md-7">
					<h2>Услуги логопеда-психолога в г. Киеве</h2>
					<a href="#" id="red">
						<div>
							<span>ЦЕЛЬ</span>
						</div>
						</a>
					<a href="#" id="blue">
						<div>
							<span>ЗАДАЧА</span>
						</div>
						</a>
					<a href="#" id="yellow">
						<div>
							<span>МЕТОД</span>
						</div>
						</a>
					<p><strong>Я детский логопед-психолог, оказываю услуги логопеда-психолога в Киеве уже более 9 лет,</strong> помогу справиться с речевыми проблемами у  Ваших детей. Вы хотите видеть своих детей успешными и благополучными, хорошо образованными, чтобы они чувствовали себя свободными и уверенными во всём? Тогда обращайте внимание на то, правильно ли  ваш ребёнок произносит все звуки, чётко ли различает на слух звуки в собственной и чужой речи, какое состояние речеслуховой памяти, грамматического строя речи, богат ли словарный запас и многое другое.Всем известно, что число детей с нарушениями речи и познавательной сферы растет из года в год. На мой взгляд, каждый малыш особенный, и к каждому нужен свой индивидуальный подход. В своей работе я использую омбинированные программы, вариативные методики, которые позволяют мне найти общий язык с детьми и их родителями.</p>
				</div>
			</div>
		</div>
		</div>
		<div id="bg-wrapper-footer">
			<div class="container">
				<div class="row" id="footer">
					<div class="col-md-3">
						<div class="wrapper-glif">
							<span class="glyphicon glyphicon-earphone"></span>
						</div>
						<p>Телефон</p>
						<p>+380964471033</p>
					</div>
					<div class="col-md-3">
						<div class="wrapper-glif">
							<span class="glyphicon glyphicon-envelope"></span>
						</div>
						<p>E-mail</p>
						<p>vika.svetlickaya@mail.ru</p>	
					</div>
					<div class="col-md-3">
						<div class="wrapper-glif plus">
							<span class="glyphicon glyphicon-plus"></span>
						</div>
						<p>Я в соц. сетях</p>
							<div><img src="images/facebook.png" alt="Я  в Фейсбуке">
								<img src="images/twitter.png" alt=" Я в Твиттере">
								<img src="images/google.png" alt=" Я в Гугл +">	
							</div>
					</div>

					<div class="col-md-3 col-xs-12">
						<div class="wrapper-glif">
							<span class="glyphicon glyphicon-copyright-mark"></span>
						</div>
						<p>Все права защищены</p>
						<a href="http://site4you.kiev.ua">Сайт разработан Юрием Тараненко</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/myjs.js"></script>
    <?php wp_footer();?>		
</body>
</html>