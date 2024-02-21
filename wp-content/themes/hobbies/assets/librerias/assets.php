<?php //codigo para llamar a mis CSS.
function mis_estilos()
{
    
    wp_register_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', 'all');

    wp_enqueue_style('css-local', get_template_directory_uri() . '/assets/librerias/css/hobbies.css', 'all');
    


    
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('css-local');
    


}


add_action('wp_enqueue_scripts', 'mis_estilos');

//codigo para llamar a mis script.

function mis_script(){
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer


        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), '1', true);
        //wp_register_script('local-js', get_bloginfo('template_directory') . 'remplazar este texto por la ruta local CSS', array('jquery'), '1', true);

        /*encolamos los JS*/
        wp_enqueue_script('bootstrap-js', array('jquery'), true);
        //wp_enqueue_script('local-js');
    }
}
add_action("wp_enqueue_scripts", "mis_script", 1);

	
add_post_type_support( 'page', 'excerpt' );

function menu_celular(){
    $locations= array(
        'menu-celular'=>__('menu-celular','menu-celular'),
    );
    register_nav_menus($locations);
}
add_action('init','menu_celular');

add_filter('use_widgets_block_editor','__return_false');


/*zona de widgets
function widget_mi_sitio()
{
register_sidebar(array('name' => 'Nombre de mi zona de widget', 'id' => 'ID de mi widget', 'before_widget' => '<div id="%1$S" class="clase contenedore de mi widget">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-ide mi widget">', 'after_title' => '</h5>'));

}

add_action('widgets_init', 'widget_mi_sitio');
/*zona de widgets*/
/** FUNCIONES */

/*Llamado a modulos */
include get_template_directory() .'/assets/modulos/modulo-musica/core-musica.php';
include get_template_directory() .'/assets/modulos/modulo-series/core-series.php';
include get_template_directory() .'/assets/modulos/modulo-whatsapp/core-wsp.php';