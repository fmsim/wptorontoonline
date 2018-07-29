<?php get_header(); ?>

<div id="primary" class="primary post-<?php the_ID(); ?>">
  <?php while (have_posts()) : the_post(); ?>
    <article>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium-blog'); ?>
      </a>
      <div class="content-post">
        <h2><?php the_title(); ?></h2>
        <?php the_category(); ?>
        <?php the_excerpt(); ?>
      </div> <!-- .content-post -->
    </article>
  <?php endwhile; ?>
</div> <!-- #primary .primary post-<?php the_ID(); ?> -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
