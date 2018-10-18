<?php
/**
 * Template Name: Pretty Grid Services
 * Description: A full width content area with a post grid - for the Services page
 */
get_header(); ?>

    <div id="content" class="clearfix full-width-content">
        
        <div id="main" class="clearfix" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile;
				wp_reset_postdata();
				?>

				<div id="grid">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$the_query = new WP_Query(array(
							'posts_per_page' => -1,
                            'post_type' => 'services'
							)
						);
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo '<div class="pretty-grid-item">';
									echo '<div class="topper">';
										echo '<h3 class="title">' . get_the_title() . '</h3>';
										echo '<h4 class="location-title">' . get_field('project_location') . '</h4>';
									echo '</div>';
									echo '<div class="pretty-grid-img">';
									if ( has_post_thumbnail() ) {
                                        echo '<a href="'.get_the_permalink().'">';
										the_post_thumbnail('medium');
                                        echo '</a>';
									}
									echo '</div>';
									echo '<a class="button" href="'.get_the_permalink().'">Read more</a>';
								echo '</div>';
							}
						}
						wp_reset_postdata();
						?>
				</div>

		</div>

		<div id="sidebar" role="sidebar">
			<?php dynamic_sidebar('sidebar-pretty-grid'); ?>
		</div>
        
	</div>
	

<?php get_footer(); ?>