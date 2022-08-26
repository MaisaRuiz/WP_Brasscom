<?php get_header();

$s = get_search_query();
$order = filter_input(INPUT_GET, 'order', FILTER_DEFAULT);

//Pesquisa nos meus posts
$argsPosts = array(
  's' => $s,
  'post_type' => 'post',
  'orderby' => 'date',
  'posts_per_page' => -1,
  'order' => (!$order ? 'DESC' : $order)
);

$vCursos = get_posts($argsPosts);
// var_dump($vCursos);

//Para mostrar a quantidade de posts localizados na busca
$quant_busca = count($vCursos);

if ($quant_busca > "1") {
  $resul = 'Foram encontrados ' . $quant_busca . ' resultados';
} elseif ($quant_busca == "1") {
  $resul = 'Foi encontrado ' . $quant_busca . ' resultado';
} else {
  $resul = 'Não foi encontrado nenhum resultado.';
}




//Essa função cria um formulario padrão de busca:
//<? php echo get_search_form(); ? >

// se quiser criar um formulario personalizado de busca criar uma arquivo com nome:
// searchform.php
?>

<main>
  <div class="div-acinzentada fontWeight-400 font18 d-flex justify-content-center align-items-center">
    <p class=""><a href="<?php echo home_url(); ?>">Home</a> &gt; <a>Resultados da busca</a></p>
  </div>

  <div class="pg-search">

    <h1 class="font36 fontWeight-300">Resultados da busca para a palavra "<?php echo $s ?>"</h1>
    <span class="quant_busca font20 fontWeight-400"><?php echo $resul; ?></span>

    <hr />

    <div class="container">


      <h2 class="mt-5 mb-4">Notícias(<?php echo $quant_busca; ?>)</h2>

      <div class="row d-flex div-buscas-encontradas">


        <?php

        if (is_page('search')) {
          query_posts(array(
            // 'showposts' => 4,
            'paged' => $paged
          ));
        }



        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>

            <div class="card col-12 col-sm-6 col-xl-3">

              <?php if (has_post_thumbnail()) : ?>
                <div class="w-100">
                  <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php the_post_thumbnail('', array('class' => 'img-fluid w-100 card-img-top')); ?>
                  </a>
                </div>
              <?php endif; ?>

              <div class="card-body fontWeight-300">
                <p class="font18"><?php the_excerpt(); ?></p> <!-- COMO FAZER APARECER UM RESUMO DO CONTEÚDO -->
                <a class="font24 link-saibamais" href="<?php the_permalink(); ?>" target="_blank">Saiba mais</a>
              </div>
            </div>

        <?php

          endwhile;
        endif;
        ?>

        <!-- <hr class="mt-5 mb-5" /> -->

      </div>


      <?php
      if (is_page('search')) {
        wp_reset_query();
      }
      ?>

    </div>


  </div>
</main>

<?php get_footer(); ?>