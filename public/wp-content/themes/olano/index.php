<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_header(); ?>

<main role="main">
<section class="section background-primary">
  <div class="container">
<?php
      if (have_posts()) :
        /* Start the Loop */
        while (have_posts()) : the_post();
      ?>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div>
            <?php the_content(); ?>
          </div>
      <?php
        endwhile;
        /* End the Loop */
      else :
        // Nothing
      endif;
      ?>
</div>
    </section>
<?php get_template_part( 'template-parts/contact' ); ?>
</main><!-- #main -->

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>