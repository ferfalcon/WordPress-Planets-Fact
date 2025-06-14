<?php get_header(); ?>

<main id="primary" class="site-main planet-page">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <h1><?php the_title(); ?></h1>

  <nav class="page-navigation">
    <ul>
      <li>
        <button>Overview</button>
      </li>
      <li>
        <button>Structure</button>
      </li>
      <li>
        <button>Surface</button>
      </li>
    </ul>
  </nav>

  <section class="planet-section">
    <div class="planet-content">
      <div class="planet-text">
        <?php echo wp_kses_post(get_field('overview_text')); ?>
        <?php if ($url = get_field('overview_wikipedia_source')) : ?>
          <p>
            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">Source: Wikipedia</a>
          </p>
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
    <div class="planet-content">
      <div class="planet-text">
        <?php echo wp_kses_post(get_field('structure_text')); ?>
        <?php if ($url = get_field('structure_wikipedia_source')) : ?>
          <p>
            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">Source: Wikipedia</a>
          </p>
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
    <div class="planet-content">
      <div class="planet-text">
        <?php echo wp_kses_post(get_field('geology_text')); ?>

        <?php if ($url = get_field('geology_wikipedia_source')) : ?>
          <p>
            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">Source: Wikipedia</a>
          </p>
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
    <h2 style="display: none;">Physical Data</h2>
    <dl>
      <div role="group">
        <dt class="desc-term">Rotation Time</dt>
        <dd class="desc-details"><?php echo esc_html(get_field('rotation_time')); ?></dd>
      </div>
      <div role="group">
        <dt class="desc-term">Revolution Time</dt>
        <dd class="desc-details"><?php echo esc_html(get_field('revolution_time')); ?></dd>
      </div>
      <div role="group">
        <dt class="desc-term">Radius</dt>
        <dd class="desc-details"><?php echo esc_html(get_field('radius')); ?></dd>
      </div>
      <div role="group">
        <dt class="desc-term">Average Temp.</dt>
        <dd class="desc-details"><?php echo esc_html(get_field('temperature')); ?></dd>
      </div>
    </dl>
  </section>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>