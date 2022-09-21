<?php
// Template Name: LandingPage
get_header();
?>

<!-- Seções | Componentes -->
<?php include(TEMPLATEPATH . "/inc/hero.php"); ?>
<?php include(TEMPLATEPATH . "/inc/benefits.php"); ?>
<?php include(TEMPLATEPATH . "/inc/cta.php"); ?>
<?php include(TEMPLATEPATH . "/inc/whatis.php"); ?>
<?php include(TEMPLATEPATH . "/inc/scratchs.php"); ?>
<?php include(TEMPLATEPATH . "/inc/faq.php"); ?>
<?php include(TEMPLATEPATH . "/inc/testimonials.php"); ?>
<!-- 	< ?php include(TEMPLATEPATH . "/inc/why.php"); ?>
		< ?php include(TEMPLATEPATH . "/inc/methodology.php"); ?> -->

<!-- // fim seções -->

<?php while ( have_posts() ) :
	the_post();
?>

<main id="content" <?php post_class( 'site-main' ); ?> role="main">
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
	<?php endif; ?>
	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>
</main>

<?php endwhile; ?>

<?php get_footer(); ?>
