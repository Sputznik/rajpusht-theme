<?php
	global $post;
	$reported = get_post_meta( get_the_ID(), 'publisher', true );
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
	$img_class = "orbit-thumbnail-bg";

	if( !has_post_thumbnail() || !is_array( $thumbnail ) || !$thumbnail[0] ){
		$img_class .= " no-thumbnail";
	}
?>

<div class='<?php _e( $img_class );?>' style='background-image: url( "<?php _e( $thumbnail[0] );?> ");position: relative;'>
	<a href='<?php the_permalink();?>' style="position: absolute; top:0;left:0;width:100%;height: 100%;"></a>
</div>
<div class="orbit-content">
	<h1 class='orbit-title'><a href='<?php the_permalink();?>'><?php the_title();?></a></h1>
	<hr>
	<p>By <?php the_author();?> on <?php the_time( 'F jS Y' );?></p>
	<div class='orbit-excerpt'><?php the_excerpt();?></div>
</div>
<?php if( $reported ): ?>
	<p>Reported in <? _e( $reported ); ?></p>
<?php endif;?>
