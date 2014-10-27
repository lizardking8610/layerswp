<?php
/**
 * The template for displaying a single post
 *
 * @package Hatch
 * @since Hatch 1.0
 */

get_header(); ?>

<section id="post-<?php the_ID(); ?>" <?php post_class( 'container content-main clearfix' ); ?>>
	<?php if( have_posts() ) : ?>
		<div class="row">
			<?php while( have_posts() ) : the_post(); ?>
				<article class="column span-7">
					<?php get_template_part( 'content-single' ); ?>
				</article>
			<?php endwhile; // while has_post(); ?>
            <div class="column span-4 pull-right sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endif; // if has_post() ?>
</section>

<?php get_footer(); ?>