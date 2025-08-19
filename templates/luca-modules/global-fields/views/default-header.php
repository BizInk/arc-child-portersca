<header
  class="mainHeader  mainHeader-imageBg"
  style="background-image: url('<?= Luca\Theme\get_header_image_url() ?>');"
>

  <div class="mainHeader_nav mainHeader_nav-light mainHeader_section-nav">
    <?php do_action($this->hook('header/navbar/content')); ?>
  </div><!-- /.mainHeader_nav -->

  <?php if (get_field('header_show_hero')): ?>
    <div class="mainHeader_hero mainHeader_section-hero">
      <div class="mainHeader_heroInner">

        <div class="mainHeader_container">

          <div class="featured" <?php if (get_field('header_hero_text_color')): ?>style="color: <?= get_field('header_hero_text_color'); ?>"<?php endif; ?>>

            <?php if (get_field('header_hero_title')): ?>
              <h1 class="featured_title<?php if (get_field('header_hero_text_shadow')): ?> u-textShadow<?php endif; ?>">
                <?= get_field('header_hero_title'); ?>
              </h1>
            <?php endif; ?>

            <?php if (get_field('header_hero_content')): ?>
              <div class="featured_body<?php if (get_field('header_hero_text_shadow')): ?> u-textShadow<?php endif; ?>">
                <p>
                  <?= get_field('header_hero_content'); ?>
                </p>
              </div>
            <?php endif; ?>

            <?php if (get_field('header_hero_btn_text') && get_field('header_hero_btn_url')): ?>
              <div class="featured_button">
                <a href="<?= get_field('header_hero_btn_url'); ?>" class="button"><?= get_field('header_hero_btn_text'); ?></a>
              </div>
            <?php endif; ?>

          </div><!-- /.featured -->

        </div>

      </div><!-- /.mainHeader_heroInner -->

    </div><!-- /.mainHeader_hero -->
  <?php endif; ?>

  <?php if (!is_front_page() && !is_singular('landing-page')): ?>
    <div class="mainHeader_pageHeader">
      <div class="container">
        <div class="pageHeader">
          <h1 class="pageHeader_title"><?= \Roots\Sage\Titles\title(); ?></h1>

          <h2 class="pageHeader_subtitle"><?= the_field('header_minihero_subtitle', 'option'); ?></h2>

          <?php if (get_field('header_minihero_link_url', 'option')): ?>
          <div class="pageHeader_button">
            <a href="<?= the_field('header_minihero_link_url', 'option'); ?>" class="button"><?= the_field('header_minihero_link_label', 'option'); ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

</header><!-- /.mainHeader -->
