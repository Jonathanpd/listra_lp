<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<section style="margin:120px;">
		<div>
			<h1><?php the_title(); ?></h1>

			<p style="margin-top:20px;">template: index.php</p>
		</div>
	</section>

	<section>
		<div>
			<?php the_content(); ?>
		</div>
	</section>
</article>

<?php endwhile; else: ?>
	
	<section>
		<div>
			<h1>Página não encontrada.</h1>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>