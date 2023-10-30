<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>
	
	<!--HOME PAGE SLIDER-->
<?php home_slider_template(); ?>
	<!--END of HOME PAGE SLIDER-->
	
	<!-- BEGIN of main content -->
<?php if (have_rows('content')): ?>
    <?php while (have_rows('content')): the_row(); ?>
        <?php get_template_part('parts/flex/flexible', get_row_layout()); // Flexible content row ?>
    <?php endwhile; ?>
<?php endif; ?>
	<!-- END of main content -->


<?php get_footer(); ?>



