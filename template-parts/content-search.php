<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msbdbp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php msbdbp_post_thumbnail(); ?>

    <header class="content-header">
        <?php
            the_title( sprintf( '<h2 class="content-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );


            if ( 'post' === get_post_type() ) :
        ?>
                <div class="entry-meta">
                    <?php
                    msbdbp_posted_on();
                    msbdbp_posted_by();
                    ?>
                </div><!-- .entry-meta -->
        <?php endif; ?>
    </header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->