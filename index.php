<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
get_header(); ?>

<?php 
$IE6 = $IE7 = $IE8 = "";
$IE6 = (ereg('MSIE 6',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE7 = (ereg('MSIE 7',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE8 = (ereg('MSIE 8',$_SERVER['HTTP_USER_AGENT'])) ? true : false; ?>




<div class="row marketing">
	<div class="col-sm-4">
	          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
				<h2>Buy music</h2>
				<h4>Choose from our collection of hundreds of original compilations.</h4>
				<button type="button" class="btn btn-primary" href="<?php echo home_url(); ?>/country-cds/">Browse our CDs &raquo;</button>
	</div><!--/.col-sm-4-->
	<div class="col-sm-4">
	          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
				<h2>Subscribe</h2>
				<h4>We'll send you our 3 new release compilations each month.</h4>
				<button type="button" class="btn btn-primary" href="<?php echo home_url(); ?>/the-archive-affiliate-scheme/">Find out more &raquo;</button>
	</div><!--/.col-sm-4-->
	<div class="col-sm-4">
	          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
				<h2>Archive news</h2>
				<h4>Read this month's bulletin from our founder.</h4>
				<?php
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query( array( 'post_type' => 'Newsletter', showposts => 1 ) );
				while (have_posts()) : the_post(); ?>
				<button type="button" class="btn btn-primary" href="<?php echo get_permalink(); ?>">Read more &raquo;</button>
				<?php endwhile; ?>
	</div><!--/.col-sm-4-->
</div>
<hr>
<div class="row post-list-box">
	<div class="col-sm-4">
		<h3>Latest CDs</h3>
		<?php query_posts( array(showposts=>8) ); ?>
		<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( array(120,90) );?></a>
		<?php the_tags('','',''); ?><br><b><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></b>
		<div style="clear:both;"></div>
		<hr>
		<?php endwhile; ?>
		<?php rewind_posts(); ?>
	</div><!--/.col-sm-4-->
	<div class="col-sm-4">
		<h3>Latest CDs</h3>
		<?php query_posts( array(showposts=>8) ); ?>
		<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( array(120,90) );?></a>
		<p><?php the_tags('','',''); ?><br><b><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></b></p>
		<div style="clear:both;"></div>
		<hr>
		<?php endwhile; ?>
		<?php rewind_posts(); ?>
	</div><!--/.col-sm-4-->
	<div class="col-sm-4">
		<h3>Latest CDs</h3>
		<?php query_posts( array(showposts=>8) ); ?>	
		<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( array(120,90) );?></a>
		<p><?php the_tags('','',''); ?><br><b><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></b></p>
		<div style="clear:both;"></div>
		<hr>
		<?php endwhile; ?>
		<?php rewind_posts(); ?>
	</div><!--/.col-sm-4-->
</div><!--row-->

</div><!-- container -->


<?php get_footer(); ?>