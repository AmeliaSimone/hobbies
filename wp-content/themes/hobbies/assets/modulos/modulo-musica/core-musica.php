<?php  /*  Registro de mi CPT */


function musica_register() {

    $labels = array(
        'name' => _x('musica', 'post type general name'),
        'singular_name' => _x('musica', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'musica item'),
        'add_new_item' => __('Agregar nuevo post de musica'),
        'edit_item' => __('Editar post de musica'),
        'new_item' => __('Nuevo post de musica'),
        'view_item' => __('Ver el post de musica'),
        'search_items' => __('Buscar musica'),
        'not_found' =>  __('No se encontro musica'),
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
        'taxonomies'  => array( 'categoria-musica ' ),
        'rewrite' => array('slug' => 'musica', 'with_front' => FALSE)
      ); 

    register_post_type( 'musica' , $args );
}

add_action('init', 'musica_register');


/*categorias personalizadas para musica*/
function categoria_musica() {

	register_taxonomy(
		'categoria-musica',
		'musica',
		array(
			'label' => __( 'Categoria musica' ),
			'rewrite' => array( 'slug' => 'categoria-musica' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_musica' );