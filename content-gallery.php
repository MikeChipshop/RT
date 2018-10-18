
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
      <?php if ( is_single() ) : ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'attorney' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <?php else : ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'attorney' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <?php endif; ?>

		<div class="entry-meta">
			<?php attorney_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
    
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

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary post_content">
    	<?php if ( has_post_thumbnail()) : ?>                
          <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(640, 480) ); ?></a></div>               
        <?php endif; ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content post_content">
		<?php if ( post_password_required() ) : ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'attorney' ) ); ?>
			<?php else : ?>
			<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'attorney' ),
			'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'attorney' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
			number_format_i18n( $total_images )
		); ?></em></p>
			<?php the_excerpt(); ?>
		<?php endif; ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'attorney' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	
</article><!-- #post-<?php the_ID(); ?> -->
