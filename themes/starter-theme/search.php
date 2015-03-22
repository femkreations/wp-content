<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Starter_Theme
 */

get_header(); ?>

<div class="wrapper"> 
    <div class="container containerWithAside">
    	<div id="primary" role="main"> 

        <?php if ( have_posts() ) : ?>

            <header class="archive-header">
            
                <?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
                ?>
                <h1 class="entry-title"><?php _e('Search Results') ?></h1>

                <h2><?php echo $total_results; ?> results found for &#8220;<?php echo get_search_query(); ?>&#8221;</h2>

            </header>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    get_template_part( 'content');
                ?>

            <?php endwhile; ?>

            <?php get_template_part( 'inc/pagination' ); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

        </div><!-- / #primary -->

        <?php get_sidebar(); ?>

    </div><!-- / #container -->   
</div><!-- / #wrapper --> 

<?php get_footer(); ?>