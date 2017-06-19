<?php get_header(); ?>

<?php
if( have_posts() ):
  while( have_posts() ): the_post();
?>
  <div style="width:600px; margin:15px auto; border:1px solid red;" class="article">
    <div style="padding:15px; border-bottom:1px solid red;" class="title">
        <a href="<?php the_permalink(); ?>"><?php  the_title();  ?> <strong>(use : the_title();)</strong></a>
    </div>
    <div style="padding:15px;" class="isi">
        <?php echo get_the_excerpt(); ?> </br>
        <a href="<?php the_permalink(); ?>">Read More</a></br>
        <p class="info_meta">
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
          <?php
          echo " | "; the_date('F j, Y'); ?> at <?php the_time('g:i a');
          echo " | Kategori : "; the_category(", ");
          ?>
        </p>
        <strong>(use : the_content();)</strong>
    </div>
  </div>
<?php
  endwhile;
else:
  echo "tidak ada post";
endif;
?>

<?php get_footer(); ?>
