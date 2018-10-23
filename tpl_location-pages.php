<?php
/**
 * Template Name: Location Page
 * Description: Template for Location Pages
 */
get_header(); ?>

    <div id="content" class="clearfix">

        <div id="main" class="col620 clearfix" role="main">

				<?php while ( have_posts() ) : the_post(); ?>


                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content post_content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'attorney' ), 'after' => '</div>' ) ); ?>
                        </div><!-- .entry-content -->
                        <?php edit_post_link( __( 'Edit', 'attorney' ), '<span class="edit-link">', '</span>' ); ?>
                    </article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

        </div> <!-- end #main -->

        <?php get_sidebar(); // sidebar 1 ?>

    </div> <!-- end #content -->

<?php get_footer(); ?>
