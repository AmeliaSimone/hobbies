
    <div id="custom-loop-series" class="row absolute">

<?php  /* custom loop */
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = 8; // -1 shows all posts
$args= array(
    'post_type' => 'series',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => '$paged',
    'post_per_page' => '$post_per_page',
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
<figure class="col-12 col-md-2 portada-series">
<?php hobbies_post_thumbnail();?>
</figure>
<?php endwhile; else : ?>
<p class="text-center title-sm mb-0">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
</div> 
