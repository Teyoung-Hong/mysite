<?php get_header(); ?>

<main class="single__main">
  <div class="main">
  <div class="main__left ">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="post__top">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
        <h1 class="post__title"><?php the_title(); ?></h1>
        <h2 class="category"><?php the_category(); ?></h2>
      </div>
      <div class="post__body"><?php the_content(); ?></div>
      <p class="post__category"><?php the_category(', '); ?></p>
    <?php endwhile; endif; ?>
  </div>
  <div class="main__right"></div>
  </div>
</main>

<?php get_footer(); ?>
