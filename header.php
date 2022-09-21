<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> - <?php the_field('title_seo', 'option'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> - <?php the_field('description_seo', 'option'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> - <?php the_field('title_seo', 'option'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> - <?php the_field('description_seo', 'option'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- JavaScript -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		<!-- Inicio Wordpress Header -->
		<?php wp_head(); ?>
		<!-- Final Wordpress Header -->
	</head>
	<body>

		<header class="header-lp">
			<div class="header-lp__content header-lp__content--logo">
				<div class="header-lp__container container_mw-1367">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php the_field('logo', 'option'); ?>" alt="<?php the_field('logo_text_alt', 'option'); ?>">
					</a>
				</div>
			</div>

			<div class="header-lp__content header-lp__content--title">
				<div class="header-lp__container container_mw-1367">
					<?php if ( wp_is_mobile() ) { ?>
						<h1 class="header-lp__title-page"><?php the_field('titulo_desktop', 'option'); ?></h1>
					<?php } else { ?>
						<h1 class="header-lp__title-page header-lp__title-page--mobile"><?php the_field('titulo_mobile', 'option'); ?></h1>
					<?php } ?>
				</div>
			</div>
		</header>
