<?php
/*
* This is our first theme.
*/
get_header();
?>

<div class="home-main">
     <div class="row mr-0 ml-0">
     <div class="home-posts col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
      <?php if (have_posts() ) :?>
        <?php while (have_posts () ) : the_post(); ?>
        <article class="home-post">
              <div class="post-header">
              <div class="post-thumbnail row ml-0 mr-8">
                    <?php the_post_thumbnail('thumbnail')?>
               </div>
               <div class="post-discription">
               <div class="post-footer">
            </article>

          <h1><?php the_title()?></h1>
          <?php  the_content(); ?>
      <?php  endwhile; ?>
      <?php endif; ?>
      </div>
      <div class = "home-sidebar col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
          <?php get_sidebar (); ?>
          </div>
      </div>
          

<?php
get_footer();
?>