<?php
get_header();
?>

<section>
	<div style="margin:120px;">
		<h1>Home</h1>
		<p>template: home.php</p>
	</div>
</section>

<div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
	</article>

<?php endwhile; ?>

	<div class="nav-blog grid-16">
		<?php next_posts_link( '← Posts Antigos' ); ?>
		<?php previous_posts_link( 'Posts Novos →' ); ?>
	</div>

<?php else: endif; ?>

</div>



<?php get_footer(); ?>