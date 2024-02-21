<?php  /*  Registro de mi CPT */


function series_register() {

    $labels = array(
        'name' => _x('series', 'post type general name'),
        'singular_name' => _x('series', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'series item'),
        'add_new_item' => __('Agregar nueva series'),
        'edit_item' => __('Editar series'),
        'new_item' => __('Nueva series'),
        'view_item' => __('Ver la series'),
        'search_items' => __('Buscar series'),
        'not_found' =>  __('No se encontro series'),
        'not_found_in_trash' => __('No se encontro en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-media-document',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'taxonomies'  => array( 'categoria-series ' ),
        'rewrite' => array('slug' => 'series', 'with_front' => FALSE)
      ); 

    register_post_type( 'series' , $args );
}

add_action('init', 'series_register');


/*categorias personalizadas para series*/
function categoria_series() {

	register_taxonomy(
		'categoria-series',
		'series',
		array(
			'label' => __( 'Categoria series' ),
			'rewrite' => array( 'slug' => 'categoria-series' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_series' );