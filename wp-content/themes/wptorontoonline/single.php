<?php get_header(); ?>
  <?php if (has_post_thumbnail()) : ?>
    <div class="featured">
      <?php the_post_thumbnail('featured'); ?>
      <h2><?php the_title(); ?></h2>
    </div>

  <?php else : ?>
    <h2 class="noimage"><?php the_title(); ?></h2>
  <?php endif; ?>

<div id="primary" class="primary post-<?php the_ID(); ?>">
  <?php while (have_posts()) : the_post(); ?>
    <article>
      <div class="written-info">
        <div class="column">
          <?php the_tags(__('Tags for this post: ', 'toronotoonline'), ', ', '<br>'); ?>
        </div>

        <div class="column">
          <?php _e('Category: ', 'torontoonline') . the_category(', '); ?>
        </div>

        <div class="column"><?php _e('Written by: ', 'torontoonline')
          . "<span>" . the_author() . "</span>" ?>
        </div>
      </div> <!-- .writen-info -->
      <?php the_content(); ?>
      <?php comments_template(); ?>
    </article>
    <?php edit_post_link(); ?> <!-- link returns to the dashboard to editing this post -->
  <?php endwhile; ?>
</div> <!-- #primary .primary post-<?php the_ID(); ?> -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
