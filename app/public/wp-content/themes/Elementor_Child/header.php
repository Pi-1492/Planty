
<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<div class="Header_Container">
<a href="/accueil" title="Accueil">  <img alt="logo du site planty" src="/wp-content/themes/Elementor_Child/Logo.png"/></a>
<?php
$menu_args = [
	'theme_location' => 'menu-1',
];
$header_nav_menu = wp_nav_menu( $menu_args );
?>
</div>