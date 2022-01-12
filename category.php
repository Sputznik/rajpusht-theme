<?php get_header();?>
<?php $category = get_queried_object();?>
<div class="container" style="margin-top: 80px;">
  <div class="row">
    <div class='col-sm-12'>
      <h1 class="text-center" style="text-transform: capitalize;">
        <?php _e( $category->name );?>
      </h1>

          <div class="page-description"><?php _e($category->category_description); ?></div>

      <br>
      <?php if (have_posts()) : ?>
      <ul class='orbit-three-grid' style='margin-bottom:50px; padding-left: 0;'>
        <?php while (have_posts()) : the_post(); ?>
        <li class="orbit-article-db orbit-list-db">
          <?php get_template_part('partial/post', 'common');?>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>
