<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
if(is_page(75)){ ?>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<?php } else { ?>
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<?php } ?>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<?php wp_enqueue_script("/bootstrap/js/bootstrap.js"); ?>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong><?php echo get_bloginfo ('name'); ?></strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Call us on 020 7010 4815</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>

      <ul class="nav navbar-nav">
        <li><a href="http://www.mj-pm.co.uk/simplekitchens/about-us/">About us</a></li>
        <li><a href="#">Gallery</a></li>
<li><a href="http://www.mj-pm.co.uk/simplekitchens/shop/">Catalogue</a></li>
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        -->
      </ul>

<br><br><br>
<hr style="margin:0 0 10px 0;height:2px;">
<p>A unique collection of <strong>over 540,000 country, bluegrass and hillbilly songs</strong>. Subscribe and receive 3 original CD compilations every month, or buy CDs from our catalogue.</p>
<!--
<ul>
<li>We have over 540,000 country, bluegrass and hillbilly songs.</li>
<li>Every month we release 3 CD compilations of otherwise unavailable music, and send them to our subscribers.</li>
<li>You can buy CDs from our selection of hundreds of releases.</li>
</ul>
-->
    </div><!-- /.navbar-collapse -->
</nav>
