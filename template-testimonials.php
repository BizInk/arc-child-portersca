<?php
/**
 * Template Name: Testimonials
 */
?>

<?php do_action('luca/theme/page-header'); ?>

<div class="section">
    <div class="container">
        <div class="row">

            <div class="pageContent pageContent-withSidebar">
                <?php do_action('luca/theme/testimonials/content'); ?>
            </div><!-- /.pageContent -->

            <div class="sidebar">
                <div class="sidebarContent">

                    <?php if (get_field('sidebar_menu_menu')): ?>
                        <div class="widget widget-menu">
                            <?php if (get_field('sidebar_menu_title')): ?>
                                <h3>
                                    <?= get_field('sidebar_menu_title') ?>
                                </h3>
                            <?php endif; ?>
                            <?= get_field('sidebar_menu_menu') ?>
                        </div>
                    <?php endif; ?>

                    <?php do_action('luca/theme/page/sidebar'); ?>
                </div><!-- /.sidebarContent -->
            </div><!-- /.sidebar -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.section -->


