<?php get_header();

$s = get_search_query();
$order = filter_input(INPUT_GET, 'order', FILTER_DEFAULT);

//Pesquisa nos meus posts
$argsPosts = array(
  's' => $s,
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => (!$order ? 'DESC' : $order)
);

$vCursos = get_posts($argsPosts);
var_dump($vCursos);

//Essa função cria um formulario padrão de busca:
//get_search_form();

// se quiser criar um formulario personalizado de busca criar uma arquivo com nome:
// searchform.php
?>


SEARCH


<?php get_footer(); ?>