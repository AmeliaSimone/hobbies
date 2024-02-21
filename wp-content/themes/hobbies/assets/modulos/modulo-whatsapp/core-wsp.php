<?php  /*  Registro de mi CPT */


function wsp_register() {

    $labels = array(
        'name' => _x('wsp', 'post type general name'),
        'singular_name' => _x('wsp', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'wsp item'),
        'add_new_item' => __('Agregar nuevo wsp'),
        'edit_item' => __('Editar wsp'),
        'new_item' => __('Nuevo wsp'),
        'view_item' => __('Ver la wsp'),
        'search_items' => __('Buscar wsp'),
        'not_found' =>  __('No se encontro wsp'),
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
        'menu_icon'  => 'dashicons-whatsapp',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'taxonomies'  => array( 'categoria-wsp ' ),
        'rewrite' => array('slug' => 'wsp', 'with_front' => FALSE)
      ); 

    register_post_type( 'wsp' , $args );
}

add_action('init', 'wsp_register');


/*categorias personalizadas para wsp*/
function categoria_wsp() {

	register_taxonomy(
		'categoria-wsp',
		'wsp',
		array(
			'label' => __( 'Categoria wsp' ),
			'rewrite' => array( 'slug' => 'categoria-wsp' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_wsp' );