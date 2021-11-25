<?php get_header();?>
<div class="container single-template-3 " id="rp-single-post">
  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); global $post;?>
      <article <?php post_class();?>>
        <header class="entry-header"><h1 class="entry-title"><?php the_title();?></h1></header>
        <div class="entry-summary"><?php _e( do_shortcode( '[orbit_excerpt]' ) );?></div>
        <p>Reported in <?php _e( do_shortcode( '[orbit_cf id="publisher"]' ) ); echo ' on '.get_the_date('M j, Y');?></strong></p>
        <div class="post-thumbnail"><?php _e( do_shortcode( '[orbit_thumbnail size="full"]' ) );?></div>
        <div class="entry-content"><?php the_content(); ?></div>
        <div class="under"></div>
        <div class="tag-headline"><?php echo 'Tagged Under:'?></div>
        <div class="post-tags"><?php the_tags( '', '', '' ); ?></div>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>
