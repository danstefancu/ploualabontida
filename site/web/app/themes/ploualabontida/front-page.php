<?php

get_header();


$last_article_query = new WP_Query(
	array(
		'posts_per_page' => 1,
		'post_type' => 'post'
	)
);


?>
<div class="message">

	<?php if ( $last_article_query->have_posts() ) : while ( $last_article_query->have_posts() ) : $last_article_query->the_post(); ?>
		<p><?php the_title(); ?></p>
		<?php $post = get_post(); ?>
		<h1><?php echo $post->post_content; ?></h1>
	<?php endwhile; endif; wp_reset_postdata(); ?>

</div>
<div>
	<a href="https://rainorshine.ro/">&#x2614; or &#x2600;???</a> | <a href="<?php echo get_post_type_archive_link( 'post' ); ?>">Prognoze vechi</a>
</div>

<?php

get_footer();

?>
