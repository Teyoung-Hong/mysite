<?php get_header(); ?>

<main>
  <div class="wrap__main">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="post__title"><?php the_title(); ?></h1>
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
      <div class="post__body"><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
  </div> <!-- wrap__main -->
</main>

<?php get_footer(); ?>
