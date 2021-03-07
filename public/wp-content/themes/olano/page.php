<?php get_header(); ?>

<main role="main">
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if(!is_front_page()) : ?>
    <h1 class="font-size-48 margin-b-48 text-center"><?php the_title(); ?></h1>
    <?php endif; ?>
    <?php the_content(); ?>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>
  <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer(); ?>