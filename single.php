<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="container">
<div class="row">

<?php get_sidebar(); ?>
<!--
<h3>Popular artists available on CD</h3><?php wp_tag_cloud( array ( 'taxonomy' => artist ) ); ?>
<h3>Popular subgenres</h3><?php wp_tag_cloud( array ( 'taxonomy' => category ) ); ?>
-->

<div class="span9">
<div class="sub-hero-unit">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
$imagepath = strip_tags( get_the_term_list($post->ID, 'imagepath', '', ', ', '')); 
if($imagepath!=''){
echo "<img style='float:left;margin:10px;margin-top:0;width:250px;' src='" . $imagepath . "'/>"; }
?>
<?php the_post_thumbnail(); ?>
<h1><?php the_title(); ?></h1>
<?php $introduction = get_post_meta($post->ID, 'introduction', true); 
if($introduction!=""){
echo "<br /><h3>Brief description:</h3><br /><p style='font-style:italic;'>" . $introduction . "</p><br />";
}
?>
<?php 
if($content = $post->post_content ) {
echo "<h3>Track listing:</h3>";
the_content();
}
?>
<a class="btn btn-success" href="<?php echo home_url(); ?>/cd-sales/">How to buy</a>

<?php 
    if ( get_post_meta($post->ID, 'audio1mp3', true) ) {
        echo '<h3>Listen to sample tracks:</h3>'; 
    }


    if ( get_post_meta($post->ID, 'audio1title', true) ) {
        echo '<h4>1. '.get_post_meta($post->ID, 'audio1title', true).':</h4>'; 
    }


    if ( get_post_meta($post->ID, 'audio1mp3', true) ) {
        echo '<audio controls="controls">
                <source src="' . get_post_meta($post->ID, 'audio1mp3', true) . '" />
                </audio>'; 
    }

    if ( get_post_meta($post->ID, 'audio2title', true) ) {
        echo "<h4 style='margin-top:50px;'>2. ".get_post_meta($post->ID, 'audio2title', true).":</h4>"; 
    }

    if ( get_post_meta($post->ID, 'audio2mp3', true) ) {
        echo '<audio controls="controls">
                <source src="' . get_post_meta($post->ID, 'audio2mp3', true) . '" />
                </audio>'; 
    }
?>

</div><!--sub-hero-unit -->

</div><!-- row-fluid -->
</div><!-- container-fluid -->
<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>