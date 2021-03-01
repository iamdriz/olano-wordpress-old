<footer class="footer">
<div class="container">
<?php
wp_nav_menu( array( 
    'theme_location' => 'footer-menu', 
    'container' => 'nav',
    'container_class' => '',
    'fallback_cb' => false ) ); 
?>
    <p class="font-size-14 text-center">Copyright &copy; <?php echo date('Y'); ?> <?php echo bloginfo('sitetitle'); ?>. All rights reserved.</p>
    <p class="font-size-14 text-center">Registered in England. Company number: 03606174 | VAT Registration no: GB727824120. Registered Office: Reginald Arthur House, Percy Street, Rotherham, S65 1ED</p>
</div>
</footer>