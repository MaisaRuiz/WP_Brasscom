<?php



//Mostra o var_dump mais organizado
function dd($q, $vdump = false) {
  echo '<pre>';
  if ($vdump) {
    var_dump($q);
  } else {
    print_r($q);
  }
  echo '</pre>';
}



//faz voltar o editor de blocos para o modo clássico
add_filter('use_widgets_block_editor', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');



//pasta que está localizado o cpt do custom_post
require_once get_template_directory() . '/app/theme-options.php';
require_once get_template_directory() . '/app/ctp-contato.php';



//REGISTROS AQUI

// registros dos menus para usar no sidebar
register_nav_menu('quem-somos', 'Quem somos');
register_nav_menu('tributacao-e-emprego', 'Tributação e Emprego');
register_nav_menu('educacao', 'Educação');
register_nav_menu('era-digital', 'Era Digital');
register_nav_menu('inteligencia', 'Inteligência');
register_nav_menu('comunicacao', 'Comunicação');



//registros dos sidebar/widgtes
register_sidebar(array(
  'name' => 'Accordion Footer1',
  'id' => 'accordionfooter1',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h3 class="widget-title fontWeight-400">',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Accordion Footer2',
  'id' => 'accordionfooter2',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h3 class="widget-title fontWeight-400">',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Accordion Footer3',
  'id' => 'accordionfooter3',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h3 class="widget-title fontWeight-400">',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Accordion Footer4',
  'id' => 'accordionfooter4',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h3 class="widget-title fontWeight-400">',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Accordion Footer5',
  'id' => 'accordionfooter5',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h3 class="widget-title fontWeight-400">',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => 'Accordion Footer6',
  'id' => 'accordionfooter6',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h3 class="widget-title fontWeight-400">',
  'after_title' => '</h3>'
));



//Habilitando o Widgets para utilizar no accordion do footer
function ob_widgets() {
  register_sidebar(array(
    'name' => __('Sidebar footer', 'Brasscom'),
    'id' => 'ob_sidebar',
    'description' => __('Sidebar para o tema', 'Brasscom')
  ));
}
add_action('widgets_init', 'ob_widgets');



// Essa parte é linkada no header com wp_head(); - é toda a parte de link que não tem lá
function ob_theme_styles() {
  // Css BOOTSTRAP
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css');
  // Swiper's CSS
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  // Css do projeto -->
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');


  // JavaScript JQUERY
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/scripts/jquery.js');
  // Swiper JS
  wp_enqueue_script('swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
  //JavaScript BOOTSTRAP 
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js');
}
add_action("wp_enqueue_scripts", "ob_theme_styles");



//Customiza algumas coisas no menu principal
function ob_after_setup() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  register_nav_menu("primary", __('Primary Menu', 'Brasscom'));
}
add_action("after_setup_theme", "ob_after_setup");

register_nav_menu("menu_principal", 'Menu principal');



// parametro para adicionar classe li no menu
function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



//Define o que irá aparecer no final do resumo (corte de texto) para dizer que tem mais informações
function wpdocs_excerpt_more($more) {
  if (is_admin()) {
    return $more;
  }
  return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');



//Define a quantidade de palavras que irá ter no resumo (corte de texto)
function wpdocs_custom_excerpt_length($length) {
  if (is_admin()) {
    return $length;
  }
  return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length');



//Adiciona o campo de resumo para PÁGINAS, mas nesse site nem vai usar.
// add_post_type_support('page', 'excerpt');
