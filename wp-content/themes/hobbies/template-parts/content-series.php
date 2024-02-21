<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hobbies
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row background-series'); ?>style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">>
	

	<div class="container" >
	<div class="row" >
	<div class="col-12 col-md-4" >
	<?php 
$image = get_field('logo_netflix');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

	<h1 class="d-none"><?php echo get_the_title();?></h1>
	<p><?php echo get_the_excerpt();?></p>
	<button type="button" class="btn btn-outline-light"><?php the_field('boton_play');?></button>
	<button type="button" class="btn btn-outline-light"><?php the_field('boton_mas_info');?></button>

</div>
</div>
</div>



	
</article><!-- #post-<?php the_ID(); ?> -->
