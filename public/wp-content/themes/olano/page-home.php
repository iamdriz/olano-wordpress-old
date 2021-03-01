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
<div class="section section--full-height background-primary">

<?php
      if (have_posts()) :
        /* Start the Loop */
        while (have_posts()) : the_post();
      ?>
        <?php the_content(); ?>
      <?php
        endwhile;
        /* End the Loop */
      else :
        // Nothing
      endif;
      ?>

</div>

  <div class="section background-secondary">
    <div class="container">
      <h1 class="font-size-48 text-center margin-b-48">Video</h1>
      <div class="wp-block-columns">
        <div class="wp-block-column">
          <video width="1920" height="1080" controls></video>
        </div>
      </div>
    </div>
  </div>

  <div class="section background-green">
    <div class="container">
      <h1 class="font-size-48 text-center margin-b-48">This is a header</h1>
      <div class="wp-block-columns are-vertically-aligned-center">
        <div class="wp-block-column is-vertically-aligned-center">
          <img src="https://picsum.photos/1920/1080?random=1" width="1920" height="1080">
        </div>
        <div class="wp-block-column is-vertically-aligned-center">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, dignissimos! Veritatis sint laborum aliquam praesentium amet officia quos, sapiente, libero aspernatur illo corrupti qui iusto vitae iste expedita officiis iure?</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quae inventore suscipit esse, ipsa sit aliquid necessitatibus aliquam fugit sequi delectus, minima impedit asperiores, enim nihil error magnam harum tempora?</p>
        </div>
    </div>
    </div>
  </div>

  <div class="section background-orange">
    <div class="container">
    <h1 class="font-size-48 text-center margin-b-48">stuff</h1>
      <div class="wp-block-columns">
        <div class="wp-block-column">
          <div class="card">
          <div class="text-center">
              <i class="fas fa-cog fa-fw"></i>
            </div>
            <h2 class="text-center">Item 1</h2>
            <p class="font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequuntur officia tempore accusantium. Distinctio vel sed tempora dolor consequuntur, impedit repellendus quo autem, ducimus maxime molestiae. Vitae distinctio at rem?</p>
          </div>
        </div>
        <div class="wp-block-column">
          <div class="card">
          <div class="text-center">
              <i class="fas fa-cog fa-fw"></i>
            </div>
            <h2 class="text-center">Item 2</h2>
            <p class="font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error totam qui debitis numquam repellat fugit accusantium odit at autem dolores placeat ducimus, culpa distinctio libero nesciunt alias. Adipisci, nihil obcaecati.</p>
          </div>
        </div>
        <div class="wp-block-column">
          <div class="card">
            <div class="text-center">
              <i class="fas fa-cog fa-fw"></i>
            </div>
            <h2 class="text-center">Item 3</h2>
            <p class="font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae laboriosam corrupti aperiam ut voluptatibus fugiat aut qui asperiores omnis cumque a rerum inventore deleniti itaque, ad consequuntur dignissimos. Sapiente.</p>
          </div>
        </div>
        <!--<div class="wp-block-column">
          <div class="card">
          <div class="text-center">
              <i class="fas fa-cog fa-fw"></i>
            </div>
            <h2 class="text-center">Item 4</h2>
            <p class="font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam voluptatem perferendis modi amet incidunt, veritatis eligendi illum commodi tempore dolor rerum deserunt soluta porro reiciendis accusantium beatae? Atque, officia.</p>
          </div>
        </div>-->
      </div>
    </div>
  </div>

  <?php get_template_part( 'template-parts/contact' ); ?>
</main><!-- #main -->

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>