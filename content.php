
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'attorney' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php attorney_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    
   
	<?php if ( has_post_thumbnail()) : ?>
    
    <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(640, 480), array( 'style' => 'position:absolute', 'onload' => 'thumb_img_onload(this)' ) ); ?></a></div>

    <?php endif; ?>
    
		
    
    
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
    	
		<?php if ( has_post_format( 'gallery' ) ) : ?>
			<?php
                $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
                if ( $images ) :
                    $total_images = count( $images );
                    $image = array_shift( $images );
                    $image_img_tag = wp_get_attachment_image( $image->ID, array(640, 480), false, array( 'style' => 'position:absolute', 'onload' => 'thumb_img_onload(this)') );
            ?>
            <div class="imgthumb">
                <a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
            </div><!-- .gallery-thumb -->
            <?php endif; ?>
            
            
        <?php endif; ?>
        
	<div class="entry-summary post_content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
    
	<?php else : ?>
	<div class="entry-content post_content">
		<?php the_content( __( 'Continue reading', 'attorney' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'attorney' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	
</article><!-- #post-<?php the_ID(); ?> -->
