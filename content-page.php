<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
	<?php _pre_post_meta(); ?>
    
	<div class="entry-content" itemprop="text">
        <div class="section">
        <p class="entry-meta site-meta-t">
            <?php the_title( '<h2 class="genpost-entry-title" itemprop="headline">', '</h2>' ); ?>
         </p> 
        </div>
        <div class="divider"></div>
        <div class="section">
            <?php the_content(); ?>
        </div>
        <div class="divider"></div>
        <div class="section">
            <p>
                <?php edit_post_link('Edit this entry','','.'); ?>
            </p>
        </div>
        
	</div>
</article>