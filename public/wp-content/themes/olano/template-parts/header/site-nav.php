<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>

<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
	<nav id="" class="" role="navigation" aria-label="<?php esc_attr_e('Header Menu', 'olano'); ?>">
		<?php /*
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'olano' ); ?>
					<?php //echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'olano' ); ?>
					<?php //echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		*/ ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'header-menu',
				'menu_class'      => 'header-menu',
				'container_class' => 'header-menu-container',
				'items_wrap'      => '<ul id="header-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
		<div id="dark-mode-toggler" aria-label="Dark Mode">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8891 10.8891C9.8938 11.8844 8.51879 12.5 7 12.5C3.96243 12.5 1.5 10.0376 1.5 7C1.5 5.48121 2.11562 4.1062 3.11093 3.11089L7.00012 7.00008L10.8891 10.8891ZM11.9498 11.9497C10.683 13.2165 8.93301 14 7 14C3.13401 14 0 10.866 0 7C0 3.13401 3.13401 0 7 0C8.84295 0 10.5196 0.712203 11.7696 1.87639C11.8306 1.9332 11.8907 1.99118 11.9499 2.05033C12.0205 2.12092 12.0894 2.19287 12.1566 2.2661C13.2369 3.44219 13.92 4.98886 13.9934 6.69357C13.9979 6.79546 14.0001 6.89766 14.0001 7.00008C14.0001 8.65159 13.4165 10.2429 12.3635 11.4984C12.2328 11.6542 12.0948 11.8049 11.9499 11.9498L11.9498 11.9497Z"></path>
            </svg>
        </div>
	</nav><!-- #site-navigation -->
<?php endif; ?>