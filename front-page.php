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

    <section class="rt_home-learn rt_home-section">
        <div class="rt_home-learn-inner">
            <h1><?php the_field('learn_section_title'); ?></h1>
            <ul>
                <li>
                    <a href="<?php the_field('learn_more_box_one_link'); ?>" title="<?php the_field('learn_more_box_one_title'); ?>">
                        <?php
                            $attachment_id = get_field('learn_more_box_one_image');
                            $size = "learn";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php the_field('learn_more_box_one_title'); ?>">
                        <h2><?php the_field('learn_more_box_one_title'); ?></h2>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('learn_more_box_two_link'); ?>" title="<?php the_field('learn_more_box_two_title'); ?>">
                        <?php
                            $attachment_id = get_field('learn_more_box_two_image');
                            $size = "learn";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php the_field('learn_more_box_two_title'); ?>">
                        <h2><?php the_field('learn_more_box_two_title'); ?></h2>
                    </a>
                </li>
            </ul>
        </div>
    </section>

	<section id="sidebar-home" class="rt_home-section rt_home-projects">
			<h1>Recent Projects</h1>
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
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) { ?>
                                        <?php the_post_thumbnail('projects'); ?>
                                <?php } ?>
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php }  wp_reset_postdata(); ?>
            <a class="button" href="<?php bloginfo('url'); ?>/recent-projects">See all projects <i class="fas fa-arrow-circle-right"></i></a>
        </section>
</div>
<?php get_footer(); ?>
