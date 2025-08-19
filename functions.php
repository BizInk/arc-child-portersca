<?php

add_action( 'after_setup_theme', 'remove_parent_theme_stuff', 0 );

function remove_parent_theme_stuff() {
    remove_action('luca/theme/testimonials/content', 'Luca\Theme\testimonials_content');
    remove_action('luca/theme/fixed-price-packages/content', 'Luca\Theme\packages_content');
    remove_action('luca/theme/team/content', 'Luca\Theme\team_content');
}

if (!function_exists('child_testimonials_content')) {
    function child_testimonials_content()
    {
        global $wp_query;
        luca()->getModule('page')->renderContent('default', $wp_query, ['wrapper' => 'section', 'container' => false]);
        luca()->getModule('testimonials')->renderBlock('testimonials-page', 'default', ['wrapper' => false, 'container' => false]);
    }
}
add_action('luca/theme/testimonials/content', 'child_testimonials_content');

if (!function_exists('child_packages_content')) {
    function child_packages_content() {
        global $wp_query;
        luca()->getModule('page')->renderContent('default', $wp_query, ['wrapper' => 'section', 'container' => false]);
        luca()->getModule('fixed-price-packages')->renderBlock('packages-page', 'default', ['wrapper' => 'section', 'container' => false]);
    }
}
add_action('luca/theme/fixed-price-packages/content', 'child_packages_content');

if (!function_exists('child_team_content')) {
    function child_team_content() {
        global $wp_query;
        luca()->getModule('page')->renderContent('default', $wp_query, ['wrapper' => 'section', 'container' => false]);
        luca()->getModule('team-members')->renderBlock('team-page', 'default', ['wrapper' => 'section', 'container' => false]);
    }
}
add_action('luca/theme/team/content', 'child_team_content');

// Theme Updater
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
$myUpdateChecker = PucFactory::buildUpdateChecker('https://github.com/BizInk/arc-child-portersca', __FILE__, 'arc-child-portersca');
$myUpdateChecker->setBranch('main');
$myUpdateChecker->setAuthentication('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');