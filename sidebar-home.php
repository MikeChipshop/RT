<?php
/**
 * The Sidebar containing the main widget areas for the homepage.
 */
?>
		<div id="sidebar-home" class="widget-area clearfix" role="complementary">

			<?php if ( ! dynamic_sidebar( 'sidebar-alt' ) ) : ?>

				<aside id="projects" class="widget">
					<div class="widget-title"><?php _e( 'Recent Projects', 'attorney' ); ?></div>
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query(array(
              'post_type' => array( 'portfolio' ),
              'posts_per_page' => 3
              )
            );
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="item">';
                  if ( has_post_thumbnail() ) {
                    echo '<a href="'.get_permalink().'">';
                    the_post_thumbnail('medium');
                    echo '</a>';
                  }
                  echo '<h3 class="title"><a href="'.get_permalink().'">' . get_the_title() . '</a></h3>';
                echo '</div>';
              }
            }
            wp_reset_postdata();
            ?>
          <a class="button" href="/lead-roofing-projects">See all projects</a>
				</aside>

                
                <aside id="archives" class="widget">
					<div class="widget-title"><?php _e( 'Find me on Facebook', 'attorney' ); ?></div>
					<div class="fb-like-box" data-href="https://www.facebook.com/RTAlkinLeadworkandRoofing" data-width="292" data-show-faces="true" data-stream="false" data-show-border="false" data-header="true"></div>

					<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=142195235930148";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Responsive CSS -->

<style>
/*
Make the Facebook Like box responsive (fluid width)
https://developers.facebook.com/docs/reference/plugins/like-box/
*/
 
/* This element holds injected scripts inside iframes that in some cases may stretch layouts. So, we're just hiding it. */
#fb-root {
  display: none;
}
 
/* To fill the container and nothing else */
.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
  width: 100% !important;
}

</style>


				</aside>
  
            <?php endif; // end sidebar widget area ?>

          
		</div><!-- #sidebar .widget-area -->
