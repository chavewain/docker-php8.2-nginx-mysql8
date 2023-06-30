<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/images/logo-negro.png">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<nav id="sidebar" class="">
			
			<div class="img bg-wrap text-center py-4 mt-4">
				<div class="user-logo">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="">
					
				</div>
				<div class="menu_back mt-3">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/btn-close.svg" alt="">
				</div>
			</div>
			<?php  dynamic_sidebar( 'sidebar-1' ); ?>
			

		</nav>
	
		<header class="bg-secondary-container">
			
			<div id="header_primary" class="bg-white">
				<div class="container">
					<div class="row py-3 justify-content-center">
						<div class="col-2 d-flex flex-column align-items-center">
							<div>
								<button id="mobile_menu" class="mt-4"><i class="bi bi-list "></i></button>
							</div>
						</div>
						<div class="col-8">
							<div class="d-flex  align-items-center flex-column">
								<img class="logo-dr" src="<?= get_template_directory_uri(); ?>/assets/images/logo-black.svg" alt="">
								<div class="hide_mobile_scroll1 d-flex mt-3 align-items-center justify-content-between gap-3">
									<img class="logo-mercado" src="<?= get_template_directory_uri(); ?>/assets/images/logo-mercado-black.svg" alt="">
									<a class="bg-danger text-white px-3" style="border-radius: 30px;" href="">Subscribe</a>
								</div>
							</div>
						</div>
						<div class="col-2 d-flex flex-column align-items-center">
							<div>
								<button class="mt-4">
									<i class="bi bi-person"></i>
								</button>
							</div>
						</div>
						<div id="search-box" class="col-12">
							<div class="mt-3">
								<div id="search-container" style="position: relative;">
									<i style="position: absolute; left: 12px; top: 3px;" class="bi bi-search"></i>
									<input type="text" class="py-1 w-100" style="padding-left: 40px;" placeholder="Buscar">

								</div>
							</div>
						</div>
						<div class="hide_mobile_scroll col-12">
							<div id="my_nav" class="mt-2">
								<div id="header-widget">
									<?php  dynamic_sidebar( 'sidebar-4' ); ?>
								</div>
							</div>
						</div>
					</div>




				</div>


			</div>

			<div class="container">
				<div class="hero row">
					<div class="col-12">
						<div class="d-flex justify-content-center">
							<img class="pt-4" style="width: 100px; height: auto;" src="<?= get_template_directory_uri() ?>/assets/images/logo-circular-white.svg" alt="">
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex justify-content-center">
							<p class="text-center m-0 pt-4">Los mejores planes para difrutar este verano y el resto del
								año.
								desde MERCADO compartimos ideas para todos los gustos. Te costará decidirte, pero
								tranquilo,
								tienes muchos días por delante.</p>
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex justify-content-center">
							<i class="bi bi-arrow-down-circle text-white pt-5"></i>
						</div>
					</div>
				</div>

			</div>

			
    	</header>

		

		
	
