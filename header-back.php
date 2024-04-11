<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php bloginfo( 'name' ); ?> - <?php the_title(); ?></title>
	<meta name="description" content="<?php echo esc_html( pll__( 'Krohvimis-ja maalimistööd Eesti majades' ) ) ?>">
	<meta name="keywords" content="<?php echo esc_html( pll__( 'Krohvimis-ja maalimistööd Eesti majades' ) ) ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= get_template_directory_uri() ?>/assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#333333">
	<meta name="theme-color" content="#ffffff">
	<meta property="og:type" content="website">
  	<meta property="og:url" content="https://suurehitus.ee/">
  	<meta property="og:title" content="SuurEhitus">
  	<meta property="og:description" content="Krohvimis-ja maalimistööd Eesti majades">
  	<meta property="og:image" content="https://suurehitus.ee/wp-content/themes/pwdsuurehitus/assets/images/cover.png">
	<!-- Google Tag Manager 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQPHD7Z5');</script>
End Google Tag Manager -->
	
	<style>
		.preloader{position:fixed;top:0;left:0;z-index:20;background-color:var(--white);width:100vw;height:100vh;display:flex;align-items:center;justify-content:center;transition:var(--default-transition);pointer-events:auto;visibility:visible;opacity:1}.preloader__container{display:flex;flex-direction:column;align-items:center;justify-content:center}.preloader__title{text-transform:uppercase}@keyframes ldio-ymt930n2wm{0%{opacity:1}100%{opacity:0}}.ldio-ymt930n2wm div{left:48px;top:24px;position:absolute;animation:ldio-ymt930n2wm linear 1s infinite;background:#909090;width:4px;height:12px;border-radius:0;transform-origin:2px 26px}.ldio-ymt930n2wm div:nth-child(1){transform:rotate(0);animation-delay:-.9166666666666666s;background:#909090}.ldio-ymt930n2wm div:nth-child(2){transform:rotate(30deg);animation-delay:-.8333333333333334s;background:#909090}.ldio-ymt930n2wm div:nth-child(3){transform:rotate(60deg);animation-delay:-.75s;background:#909090}.ldio-ymt930n2wm div:nth-child(4){transform:rotate(90deg);animation-delay:-.6666666666666666s;background:#909090}.ldio-ymt930n2wm div:nth-child(5){transform:rotate(120deg);animation-delay:-.5833333333333334s;background:#909090}.ldio-ymt930n2wm div:nth-child(6){transform:rotate(150deg);animation-delay:-.5s;background:#909090}.ldio-ymt930n2wm div:nth-child(7){transform:rotate(180deg);animation-delay:-.4166666666666667s;background:#909090}.ldio-ymt930n2wm div:nth-child(8){transform:rotate(210deg);animation-delay:-.3333333333333333s;background:#909090}.ldio-ymt930n2wm div:nth-child(9){transform:rotate(240deg);animation-delay:-.25s;background:#909090}.ldio-ymt930n2wm div:nth-child(10){transform:rotate(270deg);animation-delay:-.16666666666666666s;background:#909090}.ldio-ymt930n2wm div:nth-child(11){transform:rotate(300deg);animation-delay:-83.33333333333333ms;background:#909090}.ldio-ymt930n2wm div:nth-child(12){transform:rotate(330deg);animation-delay:0s;background:#909090}.loadingio-spinner-spinner-iwf7ti55vuh{width:70px;height:70px;display:inline-block;overflow:hidden;background:rgba(255,255,255,0)}.ldio-ymt930n2wm{width:100%;height:100%;position:relative;transform:translateZ(0) scale(.7);backface-visibility:hidden;transform-origin:0 0}.ldio-ymt930n2wm div{box-sizing:content-box}
	</style>
	<script>
		window.onload = function() {
			setTimeout(function() {
				document.body.classList.add('loaded')
			}, 500)
		}
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'body' ) ?>>
<!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQPHD7Z5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
End Google Tag Manager (noscript) -->
	<div class="preloader">
		<div class="preloader__container">
			<div class="preloader__title title-1"><?php echo esc_html( pll__( 'Laadimine' ) ) ?></div>
			<div class="preloader__animation">
				<div class="loadingio-spinner-spinner-iwf7ti55vuh">
					<div class="ldio-ymt930n2wm">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="chat">
		<div class="chat__pulse"></div>
		<button class="chat__button"></button>
		<a href="https://wa.me/message/PMSEZVDVUBD3A1" target="_blank" class="chat__link chat__link_wa"></a>
		<a href="https://t.me/suurehitus" target="_blank" class="chat__link chat__link_tg"></a>
		<a href="https://instagram.com/suurehitus_ou?igshid=MzRlODBiNWFlZA==" target="_blank" class="chat__link chat__link_ig"></a>
		<a href="https://www.facebook.com/profile.php?id=100067231812601" target="_blank" class="chat__link chat__link_fm"></a>
	</div>

	<header class="header">
		<div class="header__container container">
			<div class="header__wrapper">
				<a href="<?= site_url(); ?>" class="header__logo logo"><?php bloginfo( 'name' ); ?></a>
				<nav class="header__menu">
					<ul class="header__menu-list">
						<li>
							<a href="<?= site_url(); ?>" class="header__menu-link" style="display: block; !important"><?php echo esc_html( pll__( 'Tagasi avalehele' ) ) ?></a>
						</li>
					</ul>
				</nav>
				<div class="header__group">
				<a href="tel:<?php echo esc_html( pll__( '+37258339290' ) ) ?>" class="header__phone"><?php echo esc_html( pll__( '+37258339290' ) ) ?></a>
					<?php
						if( has_nav_menu( 'languages_menu' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'languages_menu',
								'container' => false,
								'menu_class'=> 'header__languages',
							) );
						}
					?>
				</div>
				<div class="header__area">
					<div class="header__burger">
						<span class="header__burger-line header__burger-line_1"></span>
						<span class="header__burger-line header__burger-line_2"></span>
						<span class="header__burger-line header__burger-line_3"></span>
						<span class="header__burger-line header__burger-line_4"></span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="gsap-wrapper">
		<div class="gsap-content">
			<div class="wrapper">
				<main class="main">