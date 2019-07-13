<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="page-wrapper">
 *
 * @package uncode
 */

global $is_redirect, $redirect_page;

if ($redirect_page) {
	$post_id = $redirect_page;
} else {
	if (isset(get_queried_object()->ID) && !is_home()) {
		$post_id = get_queried_object()->ID;
	} else {
		$post_id = null;
	}
}

if (wp_is_mobile()) $html_class = 'touch';
else $html_class = 'no-touch';

if (is_admin_bar_showing()) $html_class .= ' admin-mode';

?><!DOCTYPE html>
<html class="<?php echo esc_attr($html_class); ?>" <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<?php if (wp_is_mobile()): ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class($background_color_css); echo $body_attr; ?>>
	<?php echo uncode_remove_wpautop( $background_div ) ; ?>
	<?php do_action( 'before' );

	$body_border = ot_get_option('_uncode_body_border');
	if ($body_border !== '' && $body_border !== 0) {
		$general_style = ot_get_option('_uncode_general_style');
		$body_border_color = ot_get_option('_uncode_body_border_color');
		if ($body_border_color === '') $body_border_color = ' style-' . $general_style . '-bg';
		else $body_border_color = ' style-' . $body_border_color . '-bg';
		$body_border_frame ='<div class="body-borders" data-border="'.$body_border.'"><div class="top-border body-border-shadow"></div><div class="right-border body-border-shadow"></div><div class="bottom-border body-border-shadow"></div><div class="left-border body-border-shadow"></div><div class="top-border'.$body_border_color.'"></div><div class="right-border'.$body_border_color.'"></div><div class="bottom-border'.$body_border_color.'"></div><div class="left-border'.$body_border_color.'"></div></div>';
		echo $body_border_frame;
	}

	?>
	<div class="box-wrapper<?php echo esc_html($back_class); ?>"<?php echo wp_kses_post($background_style); ?>>
		<div class="box-container<?php echo esc_attr($boxed_width); ?>">
		<script type="text/javascript">UNCODE.initBox();</script>
		<?php
			if ($is_redirect !== true) {
				if ($menutype === 'vmenu-offcanvas' || $menutype === 'menu-overlay' || $menutype === 'menu-overlay-center') {
					$mainmenu = new unmenu('offcanvas_head', $menutype);
					echo uncode_remove_wpautop( $mainmenu->html );
				}
				if ( !($menutype === 'vmenu' && $vmenu_position === 'right') || (wp_is_mobile() && ($menutype === 'vmenu' && $vmenu_position === 'right') ) ) {
					$mainmenu = new unmenu($menutype, $menutype);
					echo uncode_remove_wpautop( $mainmenu->html );
				}
			}
			?>
			<script type="text/javascript">UNCODE.fixMenuHeight();</script>
			<div class="main-wrapper">
				<div class="main-container">
					<div class="page-wrapper<?php if ($onepage) echo ' main-onepage'; ?>">
						<div class="sections-container">
							
							
					<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>		
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
