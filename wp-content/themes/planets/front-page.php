<?php get_header(); ?>

<main class="planet-list">
  <h1><?php bloginfo('name'); ?></h1>

  <section class="planet-grid">
    <?php
      $planets = new WP_Query([
        'post_type' => 'planet',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
      ]);

      if ($planets->have_posts()) :
        while ($planets->have_posts()) : $planets->the_post();
    ?>

    <article class="planet-card">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        <h2><?php the_title(); ?></h2>
      </a>
    </article>
  
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </section>
</main>

<?php get_footer();
