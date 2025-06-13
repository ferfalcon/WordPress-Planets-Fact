<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e('Skip to content', 'planets'); ?>
      </a>

      <header id="masthead" class="site-header">
        <?php
          the_custom_logo();
          if (is_front_page() && is_home()) :
        ?>

          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php bloginfo('name'); ?>
          </a>

        <?php
          endif;
          $planets_description = get_bloginfo('description', 'display');
          if ($planets_description || is_customize_preview()) :
        ?>

          <p class="site-description">
            <?php 
              // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
              echo $planets_description; 
            ?>
          </p>
        <?php endif; ?>

        <nav id="site-navigation" class="main-navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e('Primary Menu', 'planets'); ?>
          </button>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
          ?>
        </nav>
      </header>