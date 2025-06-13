<?php get_header(); ?>

<main id="primary" class="site-main planet-page">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
      <h1><?php the_title(); ?></h1>

      <section class="planet-section">
        <h2>Overview</h2>
        <div class="planet-content">
          <div class="planet-text">
            <?php echo wp_kses_post(get_field('overview_text')); ?>
            <?php if ($url = get_field('overview_wikipedia_url')) : ?>
              <p><a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">Source: Wikipedia</a></p>
            <?php endif; ?>
          </div>
          <div class="planet-image">
            <?php
            $image = get_field('overview_image');
            if ($image) {
              echo wp_get_attachment_image($image, 'large');
            }
            ?>
          </div>
        </div>
      </section>

      <section class="planet-section">
        <h2>Structure</h2>
        <div class="planet-content">
          <div class="planet-text">
            <?php echo wp_kses_post(get_field('structure_text')); ?>
            <?php if ($url = get_field('structure_wikipedia_url')) : ?>
              <p><a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">Source: Wikipedia</a></p>
            <?php endif; ?>
          </div>
          <div class="planet-image">
            <?php
            $image = get_field('structure_image');
            if ($image) {
              echo wp_get_attachment_image($image, 'large');
            }
            ?>
          </div>
        </div>
      </section>

      <section class="planet-section">
        <h2>Geology</h2>
        <div class="planet-content">
          <div class="planet-text">
            <?php echo wp_kses_post(get_field('geology_text')); ?>
            <?php if ($url = get_field('geology_wikipedia_url')) : ?>
              <p><a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">Source: Wikipedia</a></p>
            <?php endif; ?>
          </div>
          <div class="planet-image">
            <?php
            $image = get_field('geology_image');
            if ($image) {
              echo wp_get_attachment_image($image, 'large');
            }
            ?>
          </div>
        </div>
      </section>

      <section class="planet-metrics">
        <h2>Physical Data</h2>
        <ul>
          <li><strong>Rotation Time:</strong> <?php echo esc_html(get_field('rotation_time')); ?></li>
          <li><strong>Revolution Time:</strong> <?php echo esc_html(get_field('revolution_time')); ?></li>
          <li><strong>Radius:</strong> <?php echo esc_html(get_field('radius')); ?></li>
          <li><strong>Temperature:</strong> <?php echo esc_html(get_field('temperature')); ?></li>
        </ul>
      </section>

  <?php
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>