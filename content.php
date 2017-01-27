<?php 

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif; 

?>



        

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <article itemprop="mainEntity" itemscope itemtype="http://schema.org/Article">
        <?php _pre_post_meta(); ?>
        <?php //tierone_featured_image();
        ?>
        <div class="row">
            <div class="col col-lg-12 m12 s12 text-center">   
                <?php _featured_image(); ?>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="section">
                    <?php the_title( '<h2 class="genpost-entry-title" itemprop="headline">', '</h2>' ); ?>
                </div>
                <div class="divider"></div>
                <div class="section row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12"> 
                        <div class="blog-date">
                            <span class="month"><?php the_time( 'F' ); ?></span>
                            <span class="day"><?php the_time( 'd' ); ?></span>
                            <span class="year" itemprop="copyrightYear"><?php the_time( 'Y' ); ?></span>
                        </div>
                        <p class="entry-meta site-meta-t">
                            by <?php the_author(); ?>
                         </p> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <?php _social_media(); ?>
                    </div>
                </div>
                <div class="section">
                    <div itemprop="articleBody" class="flow-text"><?php the_content();?></div>
                </div>
                <div class="section">
                    <p>

                    <?php if ( comments_open() && pings_open() ) {
                    // Both Comments and Pings are open ?>
                    You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" >trackback</a> from your own site.

                    <?php } elseif ( !comments_open() && pings_open() ) {
                    // Only Pings are Open ?>
                    Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " >trackback</a> from your own site.

                    <?php } elseif ( comments_open() && !pings_open() ) {
                    // Comments are open, Pings are not ?>
                    You can skip to the end and leave a response. Pinging is currently not allowed.

                    <?php } elseif ( !comments_open() && !pings_open() ) {
                    // Neither Comments, nor Pings are open ?>
                    Both comments and pings are currently closed.

                    <?php } edit_post_link('Edit this entry','','.'); ?>

                    </p>
                    <?php _social_media(); ?>
                    <section class="section">
                        <?php if ( has_tag() ) : ?>
                            <h2 class="h4">Read more articles about</h2> 
                            <ul class="list-inline tags">
                             <?php /*the_tags('<ul class="list-inline black-border"><li>','</li><li>','</li></ul>');*/
                                tierone_tags(); 
                            ?>   
                            </ul>
                            
                        <?php endif; ?>
                    </section>
                    
                    <?php
                        get_template_part( 'content', 'related' ); //related post
                    ?>
                    
                    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
                    
                        
                    <div itemprop="interactionStatistic" itemscope itemtype="http://schema.org/InteractionCounter">
                        <meta itemprop="interactionType" content="http://schema.org/CommentAction"/>
                        <meta itemprop="userInteractionCount" content="<?php echo get_comments_number(); ?>" />
                    </div>
                    
                    
                    <?php
                        comments_template();              
                    ?>

                    <?php tieronetwo_next_prev_link();?> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </article>
</div>

        
        