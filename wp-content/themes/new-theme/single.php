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
        <?php the_content(); echo "<strong>(use : the_content();)</strong>";  ?>
    </div>
  </div>
<?php
  endwhile;
else:
  echo "tidak ada post";
endif;
?>

<?php get_footer(); ?>
