<?php
add_theme_support('post-thumbnails');
function add_buttom_menu_empilhadeira()
{
    $nameSingular = 'Imóvel';
    $namePlural = 'Imóveis';
    $description = 'Sua loja de empilhadeiras';
    $label = array(
        'name' => $namePlural,
        'name_singular' => $nameSingular,
		'view_item' => 'Ver ' . $nameSingular,
        'add_new_item' => 'Adicionar novo '. $nameSingular,
        'edit_item' => 'Editar o '.$nameSingular, 
    );
    $support = array(
        'title',
        'editor', 
        'thumbnail'
    );
    $args = array(
        'labels' => $label,
        'desciption' => $description,
        'public' => true,
        'menu_icon' => 'dashicons-pressthis',
        'supports' => $support
    );
register_post_type('imovel',$args);
}
add_action('init','add_buttom_menu_empilhadeira');