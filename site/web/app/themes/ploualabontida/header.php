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
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '331875783901169',
            xfbml      : true,
            version    : 'v2.9'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>