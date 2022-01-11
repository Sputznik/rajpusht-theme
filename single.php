<?php get_header();?>
<div class="container single-template-3 " id="rp-single-post">
  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); global $post;?>
      <article <?php post_class();?>>
        <header class="entry-header"><h1 class="entry-title"><?php the_title();?></h1></header>
        <div class="entry-summary"><?php _e( do_shortcode( '[orbit_excerpt]' ) );?></div>
        <p class="author-date">By <?php the_author(); echo ', Published on '.get_the_date('M j, Y');?></strong></p>
        <div class="post-thumbnail"><?php _e( do_shortcode( '[orbit_thumbnail size="full"]' ) );?></div>
        <div class="entry-content"><?php the_content(); ?></div>
        <div class="under"></div>
        <div class="tag-headline"><?php echo 'Tagged Under:'?></div>
        <div class="post-tags"><?php the_tags( '', '', '' ); ?></div>
      </article>
      <?php endwhile; endif; ?>
    </div>

    <!-- RELATED POSTS -->
<?php
  $post_tag = get_the_tags( $post->ID );
  $tags_str = implode( ',', wp_list_pluck( $post_tag, 'slug' ) );
  $shortcode_str = do_shortcode('[orbit_query post_type="post" tag="'. $tags_str .'"  style="card" posts_per_page="3" post__not_in="'. $post->ID .'"]');
  if( $post_tag && strlen( $shortcode_str ) > 0 ):
?>
  <div class="container similar-content">
    <div class="row">
      <div class="col-md-12">
        <h2 class="title text-center">Related Posts</h2>
        <?php echo $shortcode_str;?>
      </div>
    </div>
  </div>
<?php endif; ?>
<!-- RELATED POSTS -->

  </div>
</div>
<?php get_footer();?>
