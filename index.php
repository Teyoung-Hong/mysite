<!-- header begin -->
<?php 
/**
*The main template file

*@package WordPress
*@subpackage wp-test
*@since 1.0.0
*/


get_header(); 
?>
<!-- header end -->
<main>
<!-- bottom begin -->
<div class="wrap_bottom">
<div class="wrap_bottom--both">
<div class="wrap_bottom--left">
  <div class="wrap_archives wrap">
    <div class="archives_inner">
      <div class="archives_row">
        <?php
          if ( have_posts() ) :
            $counter = 0;
             while ( have_posts() ) : the_post();
            $counter++;
        ?>
        <a href="<?php the_permalink(); ?>">
          <section class="archives" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <div class="archives__filter">
              <h2 class="archives__title"><?php the_title(); ?></h2>
            </div>
          </section>
        </a>
        <?php if($counter%3==0){
          echo ('</div><div class="archives_row">');  
        } ?>
        <?php
            endwhile;
          endif;
        ?>
      </div><!-- archives_row end -->
    </div><!-- archives_inner end -->
  </div><!-- wrap_archives end -->
</div><!-- bottom left end -->
<!-- bottom right sidebar  -->
<div class="wrap_bottom--right">
  <?php dynamic_sidebar('right-sidebar'); ?>
</div><!-- bottom right end -->
</div><!-- wrap_bottom-both -->
</div><!-- wrap_bottom end -->
</main>

<!-- footer begin -->
<?php get_footer(); ?>
<!-- footer end -->
