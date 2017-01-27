<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif;

get_header(); ?>
<div class="container main">
    <div class="row">
        <?php if ( have_posts() ) : ?>
        <section class="col-lg-12 col-md-12 col-sm-12">
            <?php custom_breadcrumbs(); ?>
        </section>
        <section class="main-content col-lg-8 col-md-8 col-sm-12" itemscope itemtype="http://schema.org/Blog">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

            <?php endwhile; // end of the loop. ?>
        </section> <!-- main content -->
        <?php else : ?>
        <section class="main-content col l8 offset-l2 m12 s12" itemscope itemtype="http://schema.org/Blog">
            <?php get_template_part( 'content', 'none' ); ?>
        </section> <!-- main content -->
        <?php endif; ?>
        <aside class="col-lg-4 col-md-4 col-sm-12" itemscope itemtype="http://schema.org/WPSideBar">
            <?php get_sidebar(); ?>
        </aside>
    </div><!-- .bootstrap cols -->
</div>
    
<?php get_footer(); ?>
