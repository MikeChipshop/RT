<?php
/**
 * Template Name: In Location
 * Description: A full width template for "in location" pages
 */
get_header(); ?>

    <div id="content" class="clearfix full-width-content">
        
        <div id="main" class="clearfix" role="main">
           <div id="map"></div>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile;
				wp_reset_postdata();
				?>
                <div class="locations-grid">
                    <?php
                        $this_location = get_field('name_of_location');
                        $args = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'meta_key' => 'area_location',
                            'meta_value' => $this_location
                        );
                        $the_query = new WP_Query($args);
                            if ( $the_query->have_posts() ) {
                                ?>
                                <div class="entry-content post_content">
                                    <h3>Projects in <?php the_field('name_of_location'); ?></h3>
                                    <p>RT Alkin have completed leadworking projects in the <?php the_field('name_of_location'); ?> area for other clients, please see previous projects below.</p>
                                </div>
                                <?php
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    echo '<div class="pretty-grid-item">';
                                    echo '<div class="topper">';
                                    echo '<h3 class="title">' . get_the_title() . '</h3>';
                                    echo '<h4 class="location-title">' . get_field('project_location') . '</h4>';
                                    echo '</div>';
                                    echo '<div class="pretty-grid-img">';
                                    echo '<a href="'.get_the_permalink().'">';
                                    the_post_thumbnail('medium');
                                    echo '</a>';
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
			<?php dynamic_sidebar('sidebar-in-location'); ?>
		</div>
        
	</div>

<script> debugger;
        <?php
        $type = get_field('location_type');
        if ($type == 'Town'){
            $type = 12;
        }else{
        $type = 10;
        }
        ?>
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            var mapOptions = {
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false,
                zoom: <?php echo $type ?>,
                center: new google.maps.LatLng(<?php the_field('latitude_and_longitude'); ?>),
                styles: [	{"featureType":"all",		"stylers":[			{"saturation":0},			{"hue":"#e7ecf0"}		]	},	{"featureType":"road",		"stylers":[			{"saturation":-70}		]	},	{"featureType":"transit",		"stylers":[			{"visibility":"on"}		]	},	{"featureType":"poi",		"stylers":[			{"visibility":"off"}		]	},	{"featureType":"water",		"stylers":[			{"visibility":"simplified"},			{"saturation":-60}		]	}]
            };

            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
        }
</script>
	

<?php get_footer(); ?>