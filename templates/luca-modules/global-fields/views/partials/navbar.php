<div class="navBar navBar-light">

  <div class="navBar_topBar">
    <div class="navBar_container">

      <?php if ($data['menus']['client_area']): ?>
        <div class="navBar_clientArea navBar_section-clientArea">
          <div class="dropButton">
            <div class="dropdown">
              <button class="dropButton_button dropdown-toggle" type="button" data-toggle="dropdown">
                <?= __('Client Area', 'bizink'); ?>
                <div class="dropButton_chevron">
                  <div class="u-scalingSvg">
                    <svg class="u-scalingSvg_shape">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink"
                           xlink:href="#shape-chevron-down"></use>
                    </svg>
                  </div>
                </div><!-- /.dropButton_chevron -->
              </button>
              <?= $data['menus']['client_area']; ?>
            </div><!-- /.dropdown -->
          </div><!-- /.dropButton -->
        </div><!-- /.topBar_button-->
      <?php endif; ?>

      <div class="navBar_socialContainer navBar_socialContainer-desktop">
        <?php do_action($this->hook('header/navbar/social')); ?>
      </div><!-- /.navBar_socialContainer -->

      <div class="navBar_infoContainer">
        <a href="tel:<?= get_field('contact_phone', 'option'); ?>"><?= get_field('contact_phone', 'option'); ?></a>
      </div>


    </div>
  </div>

  <div class="navBar_container">

    <div class="navBar_header navBar_section-header">

      <a href="<?= esc_url(home_url('/')); ?>"
         class="navBar_brand<?php if (get_field('field__logo_white__luca_logo', 'option')): ?> white<?php endif; ?>">

        <img class="navBar_logo" src="<?= $data['logo']['url']; ?>" alt="<?= $data['logo']['alt']; ?>">

        <?php if (get_field('field__logo_white__luca_logo', 'option')): ?>
          <img class="navBar_logo navBar_logo-white"
               src="<?= get_field('field__logo_white__luca_logo', 'option')['url']; ?>"
               alt="<?= $data['logo']['alt']; ?>">
        <?php endif; ?>
      </a>

      <div class="navBar_menuToggle">
        <a href="#mainNavBar" class="burger burger-animated" data-toggle="collapse" aria-expanded="false"
           aria-controls="mainNavBar">
          <span class="sr-only">Toggle navigation</span>
          <span class="burger_bar"></span>
          <span class="burger_bar"></span>
          <span class="burger_bar"></span>
        </a>
      </div>
    </div><!-- /.navBar_header -->

    <?php if ($data['menus']['header']): ?>

      <div id="mainNavBar" class="navBar_menu collapse">

        <div class="navBar_topBar-mobile">
          <div class="navBar_container">

            <?php /* if ($data['menus']['client_area']): ?>
                            <div class="navBar_clientArea navBar_section-clientArea">
                                <div class="dropButton">
                                    <div class="dropdown">
                                        <button class="dropButton_button dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                            <?= __('Client Area', 'bizink'); ?>
                                            <div class="dropButton_chevron">
                                                <div class="u-scalingSvg">
                                                    <svg class="u-scalingSvg_shape">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#shape-chevron-down"></use>
                                                    </svg>
                                                </div>
                                            </div><!-- /.dropButton_chevron -->
                                        </button>
                                        <?= $data['menus']['client_area']; ?>
                                    </div><!-- /.dropdown -->
                                </div><!-- /.dropButton -->
                            </div><!-- /.topBar_button-->
                        <?php endif; */ ?>

            <div class="navBar_socialContainer">
              <?php do_action($this->hook('header/navbar/social')); ?>
            </div><!-- /.navBar_socialContainer -->

            <?php /*
                        <div class="navBar_infoContainer">
                            <?= get_field('contact_phone', 'option'); ?>
                        </div>
                        */ ?>

          </div>
        </div>

        <div class="navBar_menuContainer navBar_section-mainMenu">
          <div class="mainMenu">
            <?= $data['menus']['header']; ?>
          </div>
        </div>


      </div><!-- /.navBar_menu -->

    <?php endif; ?>
  </div><!-- /.container -->

</div><!-- /.navBar -->
