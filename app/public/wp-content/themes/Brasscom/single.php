<?php get_header();

// dd($post);
$id_autor = $post->post_author;
$nome_autor = get_the_author_meta('nickname', $id_autor);
$nome_autor;

?>

<main class="single-noticias">
  <div class="div-acinzentada fontWeight-400 font18 d-flex flex-wrap justify-content-center align-items-center">
    <p class="m-0"><a href="<?php echo home_url(); ?>">Home</a> &gt; <a>Comunicação</a> &gt; <a href="<?php echo home_url('Noticias'); ?>">Notícias</a> &gt; <a><?php echo the_title(); ?></a></p>
    <!-- NÃO SEI COMO POSSO TRAZER O "COMUNICAÇÃO" COMO LINK COM PHP -->
  </div>

  <div class="container-fluid div-post-noticias p-0">

    <div class="bg-img d-flex justify-content-center align-items-center position-relative">

      <?php if (has_post_thumbnail()) : ?>
        <div class="img-noticia position-absolute w-100 h-100"><?php the_post_thumbnail('', array('class' => 'img-fluid w-100 h-100')); ?></div>
      <?php endif; ?>

      <div class="title-date d-flex flex-column justify-content-center align-items-start">
        <h1 class="text-white font50 fontWeight-500"><?php the_title(); ?></h1>
        <p class="mt-4 d-flex justify-content-center align-items-center fontWeight-400 font14 text-white"><?php echo get_the_date('d.m.Y') ?></p>
      </div>

    </div>

    <div class="container">
      <p class="autor fontWeight-400 font15 text-start mb-4 mt-4">Por <?php echo $nome_autor; ?>*</p>
    </div>

    <hr class="mb-5" />


    <div class="div-clara">
      <div class="container">

        <section class="conteudo">

          <div id="conteudo" class="row">

            <div class="area-noticia col-12 col-md-9">

              <div class="fontWeight-400 mb-5">

                <?php the_content(); ?>

              </div>

            </div>


            <div class="col-12 col-md-3 mt-5 mt-md-0">

              <!-- AQUI VOU TRABALHAR COM OS POSTS RECENTES QUE APARECEM NO VEJA MAIS-->
              <h2 class="vejaTambem fontWeight-500 font22 text-center text-md-start">VEJA TAMBÉM</h2>
              <hr />


              <?php
              query_posts(array(
                'showposts' => 3,
                'post__not_in' => array(get_the_ID())
              ));

              if (have_posts()) {
                while (have_posts()) {
                  the_post();
              ?>

                  <a class="link-vejatambem" href="<?php the_permalink(); ?>" target="_blank">
                    <p class="p-data-titulo fontWeight-400 mb-0"><span class="font14 me-4"><?php echo get_the_date('d.m.Y') ?></span><span class="font13"><?php the_title(); ?></span></p>
                    <div class="resumo fontWeight-400 font17"><?php the_excerpt(); ?></div>
                  </a>

                  <hr />

              <?php
                }
              }
              wp_reset_query();
              ?>




              <!-- <a class="link-vejamais fontWeight-500" href="<?php the_permalink(); ?>" target="_blank">
                <h6 class="fontWeight-700"><?php echo get_the_date('d | M | Y') ?></h6>
                <p class="fontWeight-500 mb-4"><?php the_title(); ?></p>
              </a> -->






            </div>

        </section>









      </div>

    </div>


  </div>


</main>
<?php get_footer(); ?>