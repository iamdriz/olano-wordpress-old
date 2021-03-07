<footer class="footer">
    <div class="container">
    <?php wp_nav_menu( array( 
        'theme_location' => 'footer-menu', 
        'container' => 'nav',
        'container_class' => '',
        'fallback_cb' => false ) ); ?>
        <p class="font-size-14 text-center">Copyright &copy; <?php echo date('Y') ?> <?php echo bloginfo('sitetitle'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>