<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" class="header-footer-group py-4">

				  <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="d-flex flex-column gap-3 flex-column justify-content-between align-items-center">

                            <img class="logo_footer" style="height: auto;" src="<?= get_template_directory_uri(); ?>/assets/images/logo-circular-white.svg" alt="" width="90"
                                style="width: 100%; height: auto;">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/mercado-white.png" alt="" style="width: 100%; height: auto;">
                        </div>
                    </div>
                    <div class="col-4">
						<div id="footer-widget">
							<?php  dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
                    </div>
                    <div class="col-4">
                        <div>
                            <p class="text-white pt-1">SIGUEMOS</p>
                            <div class="d-flex gap-3">
                                <span>

                                    <i class="bi bi-facebook"></i>
                                </span>
                                <span>

                                    <i class="bi bi-instagram"></i>
                                </span>

                            </div>
                            <div class="d-flex gap-3">
                                <span>

                                    <i class="bi bi-youtube"></i>
                                </span>
                                <span>

                                    <i class="bi bi-twitter"></i>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4" style="border-top: solid 1px #414141;">
                    <div class="col-12">
                        <p class="text-center text-white mb-2">THE BEST OF DR ALL RIGHT RESERVED</p>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-3 ">
                            <a class="text-white" href="" style="font-size: 14px;">Privacidad</a>
                            <a class="text-white" href="" style="font-size: 14px;">Terminos de Uso</a>
                            <a class="text-white" href="" style="font-size: 14px;">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>






