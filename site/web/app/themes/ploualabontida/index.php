<?php

get_header();

?>
<div class="message">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<p><?php the_title(); ?></p>
		<?php $post = get_post(); ?>
		<h1><?php echo $post->post_content; ?></h1>
	<?php endwhile; endif; ?>

</div>
<div>
	<a href="<?php echo home_url(); ?>">Vremea la Bonțida (prima pagină)</a>
</div>

<?php

get_footer();

?>
