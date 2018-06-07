<?php
/**
 * The header for our theme.
 *                                
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="build/css/style.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<header id="masthead" class="site-header reverse-header" role="banner">
				<div class="container">
					<div class="site-branding">
						<div class="logo">
							<a href="http://localhost/inhabitent" rel="home">
							<img src="./images/logos/inhabitent-logo-tent-white.svg" alt="Inhabitent Logo">
								<h1 class="site-title">Inhabitent</h1>
							</a>
						</div>
					</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
					<div class="menu-main-navigation-container">
						<ul id="primary-menu" class="menu">
							<li id="menu-item-143" class="menu-item menu-item-type-post_type_archive menu-item-object-product menu-item-143">
								<a href="http://localhost/inhabitent/products/">Shop</a></li>
							<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18">
								<a href="http://localhost/inhabitent/journal/">Journal</a></li>
							<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-21">
								<a href="http://localhost/inhabitent/about/">About</a></li>
							<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
								<a href="http://localhost/inhabitent/findus/">Find Us</a></li>
						</ul>
					</div>
			<div class="header-search">
				<form role="search" method="get" class="search-form" action="http://tent.academy.red/">
					<fieldset>
						<a href="#" class="search-toggle" aria-hidden="true">
							<i class="fa fa-search"></i>
						</a>
						<label>
							<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
						</label>
						<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
						</fieldset>
				</form>
			</div>
			</nav><!-- #site-navigation -->
			</div>
	</header>
