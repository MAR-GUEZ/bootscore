<?php

/**
 * Template part for displaying the top-nav searchform collapse widget
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<!-- Top Nav Search Mobile Collapse -->
<?php if (is_active_sidebar('top-nav-search')) : ?>
  <div class="collapse bg-body-tertiary position-absolute start-0 end-0 d-lg-none" id="collapse-search">
    <div class="<?= apply_filters('bootscore/class/container', 'container', 'top-nav-search-collapse'); ?> pb-2">
      <?php dynamic_sidebar('top-nav-search'); ?>
    </div>
  </div>
<?php endif; ?>
