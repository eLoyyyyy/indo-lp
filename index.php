<?php get_header(); ?>

<div class="container main">
    <div class="row clearfix">
        <section class="main-content col-lg-8 col-md-12 col-sm-12">
            <div class="row flex-fallback">
            <?php 
            if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <article class="thumbnail" itemscope itemtype="http://schema.org/BlogPosting">
                        <?php _pre_post_meta(); ?>
                        <?php _featured_image(); ?>

                        <div class="caption">
                            <h2 class="h4"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                            <p><small><?php echo time_ago(); ?></small> <a href="<?php the_permalink(); ?>" class="btn btn-default pull-right" role="button">Read More</a></p>
                        </div>
                    </article>
                </div>

                <?php endwhile; 


            else : ?>

                <?php get_template_part('content', 'none'); ?>

            <?php endif; ?>
            </div>
            <?php
            global $wp_query;
            pagination($wp_query->max_num_pages, 2);
            ?>
        </section> <!-- main content -->
        <aside class="col col-lg-4 col-md-12 col-sm-12">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>