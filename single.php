<?php get_header(); ?>

    <div id="content" class="clearfix">
        
        <div id="main" class="col620 clearfix" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php attorney_content_nav( 'nav-below' ); ?>

			<?php endwhile; // end of the loop. ?>

        </div> <!-- end #main -->

        <?php get_sidebar('post'); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>