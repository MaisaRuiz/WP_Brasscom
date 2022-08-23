<?php

/**
 * 
 * Template Name: Noticias
 * 
 */

get_header();

// dd($post);

$categories = get_categories();
$total_cat = count($categories);
$i = 0;

?>

<main class="pg-noticias">

  <div class="div-acinzentada fontWeight-400 font18 d-flex justify-content-center align-items-center">
    <p class=""><a href="<?php echo home_url(); ?>">Home</a> &gt; <a href="<?php echo home_url('Noticias'); ?>">Notícias</a></p>
  </div>

  <div class="div-noticias container pt-5">
    <h1 class="font55 fontWeight-300 text-center"><?php the_title(); ?></h1>

    <?php foreach ($categories as $category) {
    ?>

      <section>
        <h2 class="font24 fontWeight-400 mt-5 mb-4">
          <?php
          if ($categories[$i] < $total_cat) {
            $cat_slug = $categories[$i]->slug;
            echo $categories[$i++]->name;
          }
          ?>
        </h2>

        <div class="row justify-content-between align-items-start">



          <?php
          if (is_page('noticias')) {
            query_posts(array(
              // 'showposts' => 4,
              'paged' => $paged
            ));
          }


          if (have_posts()) :
            while (have_posts()) :
              the_post();
              if (in_category($cat_slug)) :
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
              endif;
            endwhile;
          endif;
          ?>

        </div>
      </section>
    <?php } ?>

  </div>

  <?php
  if (is_page('noticias')) {
    wp_reset_query();
  }
  ?>

</main>

<?php get_footer(); ?>