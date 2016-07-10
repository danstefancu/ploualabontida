<!DOCTYPE html>
<html lang="ro-RO">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('title'); ?> <?php if ( is_single() ) the_time('j-F-Y'); ?></title>
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