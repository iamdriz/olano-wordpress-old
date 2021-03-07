<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--<header class="header">
<div class="container">
    <a class="logo" href="<?php echo bloginfo('siteurl'); ?>"><?php echo bloginfo('sitetitle'); ?></a>
    <?php wp_nav_menu( array( 
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => '',
        'fallback_cb' => false ) ); 
    ?>
</div>
</header>-->

<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'header-menu' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">
    <div class="container">
        <?php get_template_part( 'template-parts/header/site-branding' ); ?>
        <?php get_template_part( 'template-parts/header/site-nav' ); ?>
    </div>
</header><!-- #masthead -->