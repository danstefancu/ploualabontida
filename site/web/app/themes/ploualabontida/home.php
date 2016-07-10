<?php

get_header();

?>
<div class="message">

	<h1>Un istoric</h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<p><a href="<?php the_permalink(); ?>"><?php the_time('j F Y'); ?></a></p>
	<?php endwhile; endif; ?>

</div>

<div>
	<a href="<?php echo home_url(); ?>">Vremea la Bonțida (prima pagină)</a>
</div>

<?php

get_footer();

?>
