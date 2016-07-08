<!DOCTYPE html>
<html lang="ro-RO">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('title'); ?></title>
	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
	<style>
		div {
			width: 300px;
			margin: 50px auto;
			text-align: center;
		}
	</style>
</head>
<body>
<div class="message hello">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<p><?php the_title(); ?></p>
		<?php $post = get_post(); ?>
		<h1><?php echo $post->post_content; ?></h1>
	<?php endwhile; endif; ?>

</div>
<div>
	<script type="text/javascript">
		//<![CDATA[
		var sc_project=10498948;
		var sc_invisible=0;
		var sc_security="0ecf9343";
		var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www.");
		document.write("<sc"+"ript type='text/javascript' src='" +scJsHost+"statcounter.com/counter/counter_xhtml.js'></"+"script>");
		//]]>
	</script>
	<noscript><div class="statcounter"><a title="web counter" href="http://statcounter.com/" class="statcounter"><img class="statcounter" src="http://c.statcounter.com/10498948/0/0ecf9343/0/" alt="web counter" /></a></div></noscript>
</div>
</body>
