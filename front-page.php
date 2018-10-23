<?php get_header(); ?>
<div id="content" class="clearfix">
    <div id="main" class="clearfix" role="main">
        <div class="rt_hero">
            <div class="rt_hero-image">
                <?php
                    $attachment_id = get_field('home_hero_image');
                    $size = "hero";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="rt_hero-content">
                <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                    <div class="rt_hero-content-copy">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

	<div id="sidebar-home" class="widget-area clearfix" role="complementary">
        <aside id="projects" class="widget">
			<div class="widget-title">Recent Projects</div>
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query(array
                    (
                        'post_type' => array( 'portfolio' ),
                        'posts_per_page' => 3
                    )
                 );
                if ( $the_query->have_posts() ) {
                    ?><div class="rt_fp_project-wrap"><?php
                    while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
                        <div class="item">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('projects'); ?>
                                </a>
                            <?php } ?>
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    <?php } ?>
                </div>
            <?php }  wp_reset_postdata(); ?>
            <a class="button" href="<?php bloginfo('url'); ?>/recent-projects">See all projects <i class="fas fa-arrow-circle-right"></i></a>
		</aside>
    </div>
</div>
<?php get_footer(); ?>
