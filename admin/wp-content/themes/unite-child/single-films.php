<?php
/**
 * Template Name: Full-width(no sidebar).
 *
 * This is the template that displays Film Details
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); ?></a>
				<hr>
				<?php get_template_part( 'content', 'page' ); ?>

				<hr>
				<h4><?php $terms = get_terms("country"); $count = count($terms); if ( $count > 0 ){ foreach ( $terms as $term ) { echo $term->name; } } ?> Sector</h4>
				<hr>
				<h2>Ticket Price:</h2>
				<?php $key="ticket"; echo get_post_meta($post->ID, $key, true); ?>

				<hr>
				<h2>Release Date:</h2>
				<?php $key="release_date"; echo get_post_meta($post->ID, $key, true); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
