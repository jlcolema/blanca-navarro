<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
					<?php do_action( 'avada_after_main_content' ); ?>

				</div>  <!-- fusion-row -->
			</main>  <!-- #main -->
			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

			<?php /* BEGIN Global Contact */ ?>

			<div class="global-contact">

				<div id="" class="global-contact__toggle">

					<span class="global-contact__label toggle-contact-menu">Close</span>

				</div>

				<?php echo do_shortcode( '[contact-form-7 id="10" title="Main Contact"]' ); ?>

			</div>

			<?php /* END Global Contact */ ?>

			<?php
			/**
			 * Only include the footer.
			 */
			?>
			<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
				<?php $footer_parallax_class = ( 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

				<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">
					<?php get_template_part( 'templates/footer-content' ); ?>
				</div> <!-- fusion-footer -->

				<?php
				/**
				 * Add sliding bar.
				 */
				if ( Avada()->settings->get( 'slidingbar_widgets' ) ) {
					get_template_part( 'sliding_bar' );
				}
				?>
			<?php endif; // End is not blank page check. ?>
		</div> <!-- wrapper -->

		<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = 'default';
		if ( $c_page_id && is_numeric( $c_page_id ) ) {
			$fpo_page_bg_layout = get_post_meta( $c_page_id, 'pyre_page_bg_layout', true );
			$page_bg_layout     = ( $fpo_page_bg_layout ) ? $fpo_page_bg_layout : $page_bg_layout;
		}
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
			</div> <!-- #boxed-wrapper -->
		<?php endif; ?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
			<div class="fusion-top-frame"></div>
			<div class="fusion-bottom-frame"></div>
			<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
				<div class="fusion-boxed-shadow"></div>
			<?php endif; ?>
		<?php endif; ?>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>

		<?php wp_footer(); ?>

		<?php /* START Custom Scripts */ ?>

			<script type="text/javascript">

				/* Uneven Lettering
				--------------------------------*/

				/* Plugin: Lettering.js */
				/* Source: https://github.com/davatron5000/Lettering.js */

				(function($){
					function injector(t, splitter, klass, after) {
						var text = t.text()
						, a = text.split(splitter)
						, inject = '';
						if (a.length) {
							$(a).each(function(i, item) {
								inject += '<span class="'+klass+(i+1)+'" aria-hidden="true">'+item+'</span>'+after;
							});
							t.attr('aria-label',text)
							.empty()
							.append(inject)

						}
					}


					var methods = {
						init : function() {

							return this.each(function() {
								injector($(this), '', 'char', '');
							});

						},

						words : function() {

							return this.each(function() {
								injector($(this), ' ', 'word', ' ');
							});

						},

						lines : function() {

							return this.each(function() {
								var r = "eefec303079ad17405c889e092e105b0";
								// Because it's hard to split a <br/> tag consistently across browsers,
								// (*ahem* IE *ahem*), we replace all <br/> instances with an md5 hash
								// (of the word "split").  If you're trying to use this plugin on that
								// md5 hash string, it will fail because you're being ridiculous.
								injector($(this).children("br").replaceWith(r).end(), r, 'line', '');
							});

						}
					};

					$.fn.lettering = function( method ) {
						// Method calling logic
						if ( method && methods[method] ) {
							return methods[ method ].apply( this, [].slice.call( arguments, 1 ));
						} else if ( method === 'letters' || ! method ) {
							return methods.init.apply( this, [].slice.call( arguments, 0 ) ); // always pass an array
						}
						$.error( 'Method ' +  method + ' does not exist on jQuery.lettering' );
						return this;
					};

				})(jQuery);

				/* Which Items to Call */

				jQuery(document).ready(function() {
	    
					jQuery(".uneven-lettering").lettering();
	  
	  			});

				/* Contact Form
				--------------------------------*/

				/* On DOM Ready */

				function removeLocationHash(){

					var noHashURL = window.location.href.replace(/#.*$/, '');
					
					window.history.replaceState('', document.title, noHashURL) 

				}

				/* Custom Functions */

				function toggleNav() {

					if (jQuery('body').hasClass('show-contact-menu')) {

						// Do things on Nav Close

						jQuery('body').removeClass('show-contact-menu');

					} else {

						// Do things on Nav Open

						jQuery('body').addClass('show-contact-menu');

					}

				}

				jQuery(function() {
				
					// Toggle Nav on Click
		
					jQuery('.fusion-last-menu-item a, .toggle-contact-menu').click(function() {
		
						// Calling a function in case you want to expand upon this.

						toggleNav();
				
						removeLocationHash();

					});

				});

			</script>

			<?php if ( is_front_page() ) { ?>

				<script type="text/javascript">

					/* Hide hamburger on home page until "See My Portfolio" is selected */

					jQuery(function() {
			
						// grab the initial top offset of the navigation 

						var sticky_navigation_offset_top = jQuery('#portfolio').offset().top - 76;
					
						// our function that decides weather the navigation bar should have "fixed" css position or not.

						var sticky_navigation = function(){

							var scroll_top = jQuery(window).scrollTop(); // our current vertical position from the top
					
							// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative

							if (scroll_top > sticky_navigation_offset_top) { 

								jQuery('body').addClass('navigation-available');

							// } else {
					
							// 	jQuery('body').removeClass('navigation-available');
					
							}   
					
						};
					
						// run our function on load

						sticky_navigation();
					
						// and run it again every time you scroll

						jQuery(window).scroll(function() {
						
							sticky_navigation();
					
						});
					
					});

				</script>

			<?php } ?>

		<?php /* END Custom Scripts */ ?>

	</body>

</html>
