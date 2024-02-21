<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hobbies
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row background-musica'); ?>style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">
	

<div class="container-fluid"> 

	<div class="row"> 

		<div class="col-12 col-md-3"> 
		<div class="row">
		<?php 
$image = get_field('img-liszto');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>	

<div class="row btn-play">
<div class="col-12 col-md-4 ">
<?php 
$image = get_field('boton_play');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
<div class="col-12 col-md-4 btn-like"> 

<?php 
$image = get_field('boton_like');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
<div class="col-12 col-md-4 btn-mi">
<?php 
$image = get_field('mas_info');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>

</div>
</div>


<div class="col-12 col-md-9 nombre-cancion">
<p><?php echo get_the_excerpt();?></p>
	<h1><?php echo get_the_title();?></h1>
	<div class="row autor">

<div class="col-12 col-md-1 phoenix">
<?php 
$image = get_field('img_phoenix');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
<div class="col-12 col-md-11">
	 <p>Phoenix ● 2009 ● 4:01</p>
	 </div>
	</div>
	
	</div>
	</div>

	<div class="row cancion"> 
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/7hwcojGiRqYm100tSmpZE3?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
	</div>

	</div> 
	

	
</article><!-- #post-<?php the_ID(); ?> -->
