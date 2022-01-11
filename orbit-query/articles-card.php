<div id="<?php _e( $atts['id'] );?>" class="orbit-three-grid" data-target="article.orbit-list-db" data-url="<?php _e( $atts['url'] );?>">
	<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
        <?php $post_type = get_post_type();?>
        <article class='orbit-list-db<?php _e($post_type);?>'>
            <?php get_template_part( 'partial/card' );?>
        </article>
	<?php endwhile;?>
</div>
