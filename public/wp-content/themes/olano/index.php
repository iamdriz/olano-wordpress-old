<?php get_header(); ?>

<main role="main">
  <section class="section background-primary">
    <div class="container">
      <?php get_template_part('template-parts/loop'); ?>
    </div>
  </section>
  <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer(); ?>