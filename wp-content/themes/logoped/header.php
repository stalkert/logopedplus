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
                		<li class="<?php if(get_current_URL()=='http://logopedplus.in.ua/'){echo 'active';}; ?>"><a href="<?php bloginfo( 'url' ); ?>">ГЛАВНАЯ</a></li>
               			<li class="<?php if(get_current_URL()==get_page_link(16)){echo 'active';}; ?>"><a href="<?php echo get_permalink(16)?>">О СЕБЕ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(18)){echo 'active';}; ?>"><a href="<?php echo get_permalink(18)?>">О ЗАНЯТИЯХ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(20)){echo 'active';}; ?>"><a href="<?php echo get_permalink(20)?>">СТОИМОСТЬ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(22)){echo 'active';}; ?>"><a href="<?php echo get_permalink(22)?>">РОДИТЕЛЯМ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(24)){echo 'active';}; ?>"><a href="<?php echo get_permalink(24)?>">NEW! ГРУППЫ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(26)){echo 'active';}; ?>"><a href="<?php echo get_permalink(26)?>">СТАТЬИ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(28)){echo 'active';}; ?>"><a href="<?php echo get_permalink(28)?>">ОТЗЫВЫ</a></li>
                 		<li class="<?php if(get_current_URL()==get_page_link(30)){echo 'active';}; ?>"><a href="<?php echo get_permalink(30)?>">КОНТАКТЫ</a></li>
            		</ul>
				</div>
			</div>