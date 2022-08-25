<?php

/**
 * 
 * Template Name: Contato
 * 
 */

get_header(); ?>

<main class="pg-contato">
  <div class="div-acinzentada fontWeight-400 font18 d-flex justify-content-center align-items-center">
    <p class=""><a href="<?php echo home_url(); ?>">Home</a> &gt; <a href="<?php echo home_url('Noticias'); ?>"><?php the_title(); ?></a></p>
  </div>

  <div class="div-contato container pt-5">
    <h1 class="font55 fontWeight-300 text-center mb-4 pb-1"><?php the_title(); ?></h1>

    <div class="row d-flex justify-content-between">
      <div class="col-6">

        <h2 class="font24 fontWeight-400">Deixe sua mensagem</h2>

        <?php the_content(); ?>




      </div>

      <div class="col-5 colunaContatos">

        <div class="mb-5 pb-2">
          <h2 class="font24 mb-3 fontWeight-400">Secretariado e Conformidade</h2>

          <!-- E-MAIL DO SECRETARIADO -->
          <?php if (get_post_meta($post->ID, 'email_secretariado', true)) { ?>
            <p><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.4645 7.81423L20.0086 1.31401C19.3599 0.512299 18.3686 0 17.2575 0H3.5352C2.45072 0 1.48268 0.489013 0.833984 1.25746L10.4645 7.81423Z" fill="#1E465A" />
                <path d="M10.4655 9.82688L0.0898187 2.76114C0.0332662 3.01064 0 3.27011 0 3.53624V11.753C0 13.7057 1.58347 15.2892 3.5362 15.2892H17.2585C19.2112 15.2892 20.7947 13.7057 20.7947 11.753V3.53624C20.7947 3.29672 20.7714 3.06386 20.7248 2.83765L10.4655 9.82688Z" fill="#1E465A" />
              </svg>
              <?php echo $email_secretariado = get_post_meta($post->ID, 'email_secretariado', true); ?>
            </p>
          <?php } ?>

        </div>

        <div class="mb-5 pb-2">
          <h2 class="font24 mb-3 fontWeight-400">Comunicação</h2>

          <!-- ICONES DAS REDES SOCIAIS -->
          <div class="icones-RS d-flex justify-content-between mb-3">
            <?php if (get_o2option('o2_youtube')) { ?>
              <a href="<?php echo_o2option('o2_youtube'); ?>" target="_blank">
                <svg width="29.25" height="20.48" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.921 2.22778C19.6866 1.35676 18.9993 0.670041 18.1285 0.435308C16.5367 0 10.1701 0 10.1701 0C10.1701 0 3.80305 0 2.21159 0.419024C1.35707 0.65336 0.653506 1.35716 0.419118 2.22818C0 3.81928 0 7.11904 0 7.11904C0 7.11904 0 10.4355 0.41872 12.0103C0.653506 12.8813 1.33998 13.568 2.21159 13.8028C3.82013 14.2381 10.1701 14.2381 10.1701 14.2381C10.1701 14.2381 16.5367 14.2381 18.1285 13.8191C18.9997 13.5847 19.6866 12.8976 19.9214 12.0266C20.3401 10.4359 20.3401 7.13572 20.3401 7.13572C20.3401 7.13572 20.3568 3.81928 19.921 2.22778Z" fill="#288CCB" />
                  <path d="M8.14282 10.1675L13.4372 7.11876L8.14282 4.07001V10.1675Z" fill="white" />
                </svg>
              </a>
            <?php } ?>

            <?php if (get_o2option('o2_linkedin')) { ?>
              <a href="<?php echo_o2option('o2_linkedin'); ?>" target="_blank">
                <svg width="19.36" height="19.36" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.4176 13.8644V13.8637H14.4211V8.92669C14.4211 6.51163 13.9012 4.65082 11.0774 4.65082C9.71998 4.65082 8.80921 5.39577 8.43725 6.10182H8.39799V4.87623H5.7207V13.8637H8.50842V9.41363C8.50842 8.24204 8.73068 7.109 10.1817 7.109C11.6116 7.109 11.6327 8.44607 11.6327 9.48901V13.8644H14.4176Z" fill="#288CCB" />
                  <path d="M3.97262 4.87592H1.1814V13.8634H3.97262V4.87592Z" fill="#288CCB" />
                  <path d="M2.57545 0.401855C1.68326 0.401855 0.958984 1.12613 0.958984 2.01832C0.958984 2.91052 1.68326 3.64987 2.57545 3.64987C3.46765 3.64987 4.19192 2.91052 4.19192 2.01832C4.19157 1.12613 3.4673 0.401855 2.57545 0.401855Z" fill="#288CCB" />
                </svg>
              </a>
            <?php } ?>

            <?php if (get_o2option('o2_facebook')) { ?>
              <a href="<?php echo_o2option('o2_facebook'); ?>" target="_blank">
                <svg width="12" height="22" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 5.15625H5V3.28125C5 2.76387 5.44812 2.34375 6 2.34375H7V0H5C3.34312 0 2 1.25918 2 2.8125V5.15625H0V7.5H2V15H5V7.5H7L8 5.15625Z" fill="#288CCB" />
                </svg>
              </a>
            <?php } ?>

            <?php if (get_o2option('o2_instagram')) { ?>
              <a href="<?php echo_o2option('o2_instagram'); ?>" target="_blank">
                <svg width="23.01" height="23.73" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 0.638184H5C2.23906 0.638184 0 2.94741 0 5.79486V11.9829C0 14.8303 2.23906 17.1396 5 17.1396H11C13.7609 17.1396 16 14.8303 16 11.9829V5.79486C16 2.94741 13.7609 0.638184 11 0.638184ZM14.5 11.9829C14.5 13.9734 12.93 15.5926 11 15.5926H5C3.07 15.5926 1.5 13.9734 1.5 11.9829V5.79486C1.5 3.80438 3.07 2.18519 5 2.18519H11C12.93 2.18519 14.5 3.80438 14.5 5.79486V11.9829Z" fill="#288CCB" />
                  <path d="M8.00024 4.76349C5.79118 4.76349 4.00024 6.61055 4.00024 8.88883C4.00024 11.1671 5.79118 13.0142 8.00024 13.0142C10.2093 13.0142 12.0002 11.1671 12.0002 8.88883C12.0002 6.61055 10.2093 4.76349 8.00024 4.76349ZM8.00024 11.4672C6.62212 11.4672 5.50024 10.3101 5.50024 8.88883C5.50024 7.46656 6.62212 6.31049 8.00024 6.31049C9.37837 6.31049 10.5002 7.46656 10.5002 8.88883C10.5002 10.3101 9.37837 11.4672 8.00024 11.4672Z" fill="#288CCB" />
                  <path d="M12.4 4.7638C12.621 4.7638 12.8001 4.5791 12.8001 4.35126C12.8001 4.12342 12.621 3.93872 12.4 3.93872C12.1791 3.93872 12 4.12342 12 4.35126C12 4.5791 12.1791 4.7638 12.4 4.7638Z" fill="#288CCB" />
                </svg>
              </a>
            <?php } ?>

            <?php if (get_o2option('o2_twitter')) { ?>
              <a href="<?php echo_o2option('o2_twitter'); ?>" target="_blank">
                <svg width="26" height="20" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 1.65745C17.3306 1.93846 16.6173 2.1249 15.8737 2.21543C16.6387 1.77827 17.2227 1.09106 17.4973 0.262837C16.7839 0.670048 15.9964 0.957452 15.1572 1.11798C14.4797 0.427404 13.5147 0 12.4614 0C10.4184 0 8.77341 1.58745 8.77341 3.53332C8.77341 3.81332 8.79802 4.08255 8.85885 4.33899C5.7914 4.19562 3.07658 2.78822 1.25299 0.644135C0.934472 1.17284 0.747788 1.77827 0.747788 2.42981C0.747788 3.65313 1.40593 4.73779 2.3868 5.36543C1.79406 5.35466 1.21221 5.18976 0.719663 4.93029C0.719663 4.94106 0.719663 4.95519 0.719663 4.96899C0.719663 6.68567 1.99867 8.11159 3.67636 8.44005C3.37612 8.5188 3.04846 8.55649 2.70884 8.55649C2.47259 8.55649 2.23422 8.5437 2.01027 8.49625C2.48841 9.89524 3.84511 10.9237 5.45847 10.957C4.20301 11.8973 2.60864 12.4637 0.883142 12.4637C0.580441 12.4637 0.290396 12.4509 0 12.4152C1.63445 13.4238 3.57159 14 5.66062 14C12.4512 14 16.1638 8.61539 16.1638 3.94793C16.1638 3.79178 16.1581 3.64101 16.1504 3.49125C16.8827 2.99385 17.4983 2.3726 18 1.65745Z" fill="#288CCB" />
                </svg>
              </a>
            <?php } ?>

            <?php if (get_o2option('o2_spotify')) { ?>
              <a href="<?php echo_o2option('o2_spotify'); ?>" target="_blank">
                <svg width="26" height="26" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 0C4.02923 0 0 4.02923 0 9C0 13.9708 4.02923 18 9 18C13.9708 18 18 13.9708 18 9C18 4.02923 13.9704 0 9 0ZM12.9169 13.0612C12.8024 13.2569 12.5965 13.3664 12.3848 13.3664C12.2792 13.3664 12.1727 13.3394 12.0751 13.2822C10.4576 12.3369 8.58921 12.1849 7.30674 12.2241C5.8858 12.2674 4.84366 12.5477 4.83314 12.5507C4.50568 12.6403 4.16686 12.4476 4.07721 12.1197C3.98756 11.7922 4.17949 11.4538 4.50694 11.3637C4.55409 11.3507 5.67535 11.0464 7.23477 10.9946C8.15316 10.9643 9.03746 11.0283 9.86283 11.1849C10.9079 11.3831 11.8612 11.7312 12.6963 12.219C12.9892 12.3907 13.0882 12.7679 12.9169 13.0612ZM14.0608 10.6848C13.9253 10.9168 13.6812 11.046 13.4308 11.046C13.3058 11.046 13.1791 11.014 13.0637 10.9462C11.1482 9.82664 8.93476 9.64692 7.41533 9.69279C5.73217 9.74414 4.49768 10.0762 4.48548 10.0796C4.09741 10.1852 3.6963 9.95712 3.58981 9.56947C3.48333 9.18141 3.71103 8.78071 4.09868 8.67381C4.15423 8.65865 5.48258 8.29753 7.32989 8.23692C8.4179 8.20114 9.46551 8.2769 10.4428 8.4621C11.6807 8.69696 12.8099 9.10901 13.799 9.68732C14.1467 9.89061 14.2641 10.3372 14.0608 10.6848ZM14.7642 8.52439C14.611 8.52439 14.4556 8.48482 14.3138 8.40191C9.75929 5.74017 3.85161 7.32273 3.79226 7.33873C3.31623 7.47005 2.82379 7.19015 2.69289 6.71412C2.56157 6.23809 2.84146 5.74564 3.3175 5.61474C3.38568 5.5958 5.01497 5.15344 7.28106 5.07852C8.61572 5.03475 9.90071 5.12734 11.0994 5.35505C12.618 5.64294 14.0032 6.14886 15.2166 6.85764C15.643 7.10681 15.7865 7.6544 15.5373 8.08077C15.3707 8.36571 15.0714 8.52439 14.7642 8.52439Z" fill="#288CCB" />
                </svg>
              </a>
            <?php } ?>

            <?php if (get_o2option('o2_telegram')) { ?>
              <a href="<?php echo_o2option('o2_telegram'); ?>" target="_blank">
                <svg width="31.33" height="26" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.599655 7.88587C2.00242 8.32495 3.4017 8.77521 4.80397 9.2153C4.90923 9.24833 4.99403 9.23156 5.08532 9.17312C6.49857 8.27311 7.90882 7.36802 9.32256 6.46954C10.5732 5.67473 11.8243 4.88093 13.0714 4.08104C13.6661 3.6999 14.2637 3.32282 14.8573 2.94015C14.9835 2.85884 15.1142 2.79125 15.2534 2.73078C15.4295 2.65455 15.647 2.67792 15.7069 2.81005C15.7627 2.93354 15.6864 3.03417 15.6016 3.10989C15.4844 3.21407 15.3736 3.32536 15.2569 3.42954C14.7995 3.83863 14.352 4.25992 13.897 4.67207C13.3443 5.17264 12.7956 5.67778 12.2453 6.18038C11.8383 6.55238 11.4292 6.92183 11.0241 7.29637C10.4624 7.81523 9.89425 8.32596 9.33204 8.84432C8.7424 9.38809 8.14478 9.9227 7.55962 10.4721C7.44589 10.5788 7.44788 10.7256 7.44239 10.8603C7.40997 11.676 7.20694 14.3236 7.17451 14.8349C7.16553 14.9731 7.20245 15.0168 7.34213 14.9792C7.52121 14.9314 7.67985 14.8547 7.81304 14.7226C8.44957 14.0904 9.10756 13.4816 9.73611 12.8407C10.0893 12.4809 10.1053 12.4809 10.5048 12.7808C11.8019 13.754 13.1024 14.7216 14.4014 15.6922C14.5535 15.806 14.7196 15.8894 14.8987 15.9478C15.3232 16.0855 15.6605 15.9493 15.878 15.5545C15.9992 15.3349 16.0426 15.0895 16.0925 14.8491C16.4696 13.0394 16.8482 11.2303 17.2289 9.42112C17.7941 6.73228 18.3513 4.04191 18.921 1.35459C18.9723 1.11269 19.0482 0.812861 18.9584 0.576552C18.7838 0.117146 18.1722 -0.213686 17.2633 0.164916C15.2499 0.956679 13.2336 1.74031 11.2182 2.52547C8.71496 3.50119 6.21273 4.48048 3.708 5.45214C2.75469 5.8216 1.80288 6.1941 0.851575 6.56915C0.671489 6.64029 0.499885 6.72872 0.336261 6.83442C0.208556 6.91675 0.0459301 7.08598 0.0164979 7.22776C-0.0159274 7.38479 -0.0678079 7.64296 0.599655 7.88587Z" fill="#288CCB" />
                </svg>
              </a>
            <?php } ?>

          </div>

          <!-- E-MAIL DA COMUNICAÇÃO -->
          <?php if (get_post_meta($post->ID, 'email_comunicacao', true)) { ?>
            <p><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.4645 7.81423L20.0086 1.31401C19.3599 0.512299 18.3686 0 17.2575 0H3.5352C2.45072 0 1.48268 0.489013 0.833984 1.25746L10.4645 7.81423Z" fill="#1E465A" />
                <path d="M10.4655 9.82688L0.0898187 2.76114C0.0332662 3.01064 0 3.27011 0 3.53624V11.753C0 13.7057 1.58347 15.2892 3.5362 15.2892H17.2585C19.2112 15.2892 20.7947 13.7057 20.7947 11.753V3.53624C20.7947 3.29672 20.7714 3.06386 20.7248 2.83765L10.4655 9.82688Z" fill="#1E465A" />
              </svg>
              <?php echo $email_comunicacao = get_post_meta($post->ID, 'email_comunicacao', true); ?>
            </p>
          <?php } ?>

        </div>

        <div class="mb-5 pb-2">
          <h2 class="font24 mb-3 fontWeight-400">Assessoria de Imprensa</h2>

          <!-- NOMDE DE CONTATO DA ASSESSORIA -->
          <?php if (get_post_meta($post->ID, 'nome_contato_assessoria', true)) { ?>
            <p class="nomeDoContato">
              <?php echo $nome_contato_assessoria = get_post_meta($post->ID, 'nome_contato_assessoria', true); ?>
            </p>
          <?php } ?>

          <!-- TELEFONES DA ASSESSORIA -->
          <?php if (get_post_meta($post->ID, 'telefone1_assessoria', true) || get_post_meta($post->ID, 'telefone2_assessoria', true)) { ?>
            <div class="d-flex gap-2 mb-2">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.9232 3.07252C13.8237 -1.027 7.17364 -1.02276 3.07411 3.07677C-1.02541 7.1763 -1.02541 13.8264 3.07836 17.9259C7.18213 22.0254 13.8279 22.0254 17.9275 17.9216C19.8966 15.9525 21.0042 13.2789 21 10.495C21 7.71102 19.8924 5.04166 17.9232 3.07252ZM15.9032 14.6242L15.3727 15.1547C14.6852 15.8507 13.6837 16.1392 12.7288 15.9101C11.7697 15.6512 10.8573 15.2438 10.0255 14.7006C9.25311 14.2083 8.54015 13.6311 7.89509 12.9818C7.30095 12.3919 6.76623 11.7469 6.30366 11.0509C5.7944 10.304 5.39124 9.48918 5.1069 8.62768C4.78013 7.61765 5.05173 6.51002 5.80713 5.76735L6.43097 5.14351C6.60497 4.96951 6.88506 4.96951 7.05906 5.14351L9.02394 7.10839C9.19794 7.28239 9.19794 7.56248 9.02394 7.73648L7.86962 8.8908C7.53861 9.21757 7.49617 9.73956 7.77202 10.1173C8.18791 10.6902 8.65049 11.2291 9.1555 11.7299C9.71568 12.2943 10.3268 12.8036 10.9761 13.2577C11.3538 13.5208 11.8631 13.4741 12.1856 13.1516L13.3017 12.0185C13.4757 11.8445 13.7558 11.8445 13.9298 12.0185L15.8989 13.9919C16.0772 14.1701 16.0772 14.4502 15.9032 14.6242C15.9032 14.6284 15.9032 14.6284 15.9032 14.6242Z" fill="#1E465A" />
              </svg>
              <p>
                <!-- TELEFONE 1 DA ASSESSORIA -->
                <?php echo $telefone1_assessoria = get_post_meta($post->ID, 'telefone1_assessoria', true); ?> <br />
                <!-- TELEFONE 2 DA ASSESSORIA -->
                <?php echo $telefone2_assessoria = get_post_meta($post->ID, 'telefone2_assessoria', true); ?>
              </p>
            </div>
          <?php } ?>

          <!-- E-MAIL DA ASSESSORIA -->
          <?php if (get_post_meta($post->ID, 'email_assessoria', true)) { ?>
            <p><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.4645 7.81423L20.0086 1.31401C19.3599 0.512299 18.3686 0 17.2575 0H3.5352C2.45072 0 1.48268 0.489013 0.833984 1.25746L10.4645 7.81423Z" fill="#1E465A" />
                <path d="M10.4655 9.82688L0.0898187 2.76114C0.0332662 3.01064 0 3.27011 0 3.53624V11.753C0 13.7057 1.58347 15.2892 3.5362 15.2892H17.2585C19.2112 15.2892 20.7947 13.7057 20.7947 11.753V3.53624C20.7947 3.29672 20.7714 3.06386 20.7248 2.83765L10.4655 9.82688Z" fill="#1E465A" />
              </svg>
              <?php echo $email_assessoria = get_post_meta($post->ID, 'email_assessoria', true); ?>
            </p>
          <?php } ?>

        </div>

      </div>
    </div>

  </div>


  <div class="div-iframe row mb-5">


    <div class="col-4">
      <h1 class="text-white fontWeight-300 font55 mb-5 pb-2">Onde estamos</h1>



      <?php if (get_post_meta($post->ID, 'cidade_estado1', true)) { ?>
        <button class="btnCidade btnAmarelo ativo"><?php echo $cidade_estado1 = get_post_meta($post->ID, 'cidade_estado1', true); ?>
          <div class="mais d-none">
            <span class="traco1"></span>
            <span class="traco2"></span>
          </div>
        </button>
        <div class="inf-cidade" class="mb-5">

          <?php if (get_post_meta($post->ID, 'endereco1', true)) { ?>
            <p><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 0C5.17176 0 0 1.71493 0 7.83112C0 14.5414 8 20 8 20C8 20 16 14.5376 16 7.83112C16 1.71493 10.8282 0 8 0ZM8 10.0915C6.67176 10.0915 5.59542 9.03792 5.59542 7.73772C5.59542 6.43751 6.67176 5.3839 8 5.3839C9.32824 5.3839 10.4046 6.43751 10.4046 7.73772C10.4046 9.03792 9.32824 10.0915 8 10.0915Z" fill="white" />
              </svg>
              <?php echo $endereco1 = get_post_meta($post->ID, 'endereco1', true); ?>
            </p>
          <?php } ?>

          <?php if (get_post_meta($post->ID, 'telefone1', true)) { ?>
            <p><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.9232 3.07252C13.8237 -1.027 7.17364 -1.02276 3.07411 3.07677C-1.02541 7.1763 -1.02541 13.8264 3.07836 17.9259C7.18213 22.0254 13.8279 22.0254 17.9275 17.9216C19.8966 15.9525 21.0042 13.2789 21 10.495C21 7.71102 19.8924 5.04166 17.9232 3.07252ZM15.9032 14.6242L15.3727 15.1547C14.6852 15.8507 13.6837 16.1392 12.7288 15.9101C11.7697 15.6512 10.8573 15.2438 10.0255 14.7006C9.25311 14.2083 8.54015 13.6311 7.89509 12.9818C7.30095 12.3919 6.76623 11.7469 6.30366 11.0509C5.7944 10.304 5.39124 9.48918 5.1069 8.62768C4.78013 7.61765 5.05173 6.51002 5.80713 5.76735L6.43097 5.14351C6.60497 4.96951 6.88506 4.96951 7.05906 5.14351L9.02394 7.10839C9.19794 7.28239 9.19794 7.56248 9.02394 7.73648L7.86962 8.8908C7.53861 9.21757 7.49617 9.73956 7.77202 10.1173C8.18791 10.6902 8.65049 11.2291 9.1555 11.7299C9.71568 12.2943 10.3268 12.8036 10.9761 13.2577C11.3538 13.5208 11.8631 13.4741 12.1856 13.1516L13.3017 12.0185C13.4757 11.8445 13.7558 11.8445 13.9298 12.0185L15.8989 13.9919C16.0772 14.1701 16.0772 14.4502 15.9032 14.6242C15.9032 14.6284 15.9032 14.6284 15.9032 14.6242Z" fill="white" />
              </svg>
              <?php echo $telefone1 = get_post_meta($post->ID, 'telefone1', true); ?>
            </p>
          <?php } ?>

          <?php if (get_post_meta($post->ID, 'email1', true)) { ?>
            <p><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.4645 7.81423L20.0086 1.31401C19.3599 0.512299 18.3686 0 17.2575 0H3.5352C2.45072 0 1.48268 0.489013 0.833984 1.25746L10.4645 7.81423Z" fill="white" />
                <path d="M10.4655 9.82688L0.0898187 2.76114C0.0332662 3.01064 0 3.27011 0 3.53624V11.753C0 13.7057 1.58347 15.2892 3.5362 15.2892H17.2585C19.2112 15.2892 20.7947 13.7057 20.7947 11.753V3.53624C20.7947 3.29672 20.7714 3.06386 20.7248 2.83765L10.4655 9.82688Z" fill="white" />
              </svg>
              <?php echo $email1 = get_post_meta($post->ID, 'email1', true); ?>
            </p>
          <?php } ?>

        </div>
      <?php } ?>


      <?php if (get_post_meta($post->ID, 'cidade_estado2', true)) { ?>
        <button class="btnCidade btnAmarelo mt-3"><?php echo $cidade_estado2 = get_post_meta($post->ID, 'cidade_estado2', true); ?>
          <div class="mais">
            <span class="traco1"></span>
            <span class="traco2"></span>
          </div>
        </button>
        <div class="inf-cidade d-none" class="mb-5">

          <?php if (get_post_meta($post->ID, 'endereco2', true)) { ?>
            <p><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 0C5.17176 0 0 1.71493 0 7.83112C0 14.5414 8 20 8 20C8 20 16 14.5376 16 7.83112C16 1.71493 10.8282 0 8 0ZM8 10.0915C6.67176 10.0915 5.59542 9.03792 5.59542 7.73772C5.59542 6.43751 6.67176 5.3839 8 5.3839C9.32824 5.3839 10.4046 6.43751 10.4046 7.73772C10.4046 9.03792 9.32824 10.0915 8 10.0915Z" fill="white" />
              </svg>
              <?php echo $endereco2 = get_post_meta($post->ID, 'endereco2', true); ?>
            </p>
          <?php } ?>

          <?php if (get_post_meta($post->ID, 'telefone2', true)) { ?>
            <p><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.9232 3.07252C13.8237 -1.027 7.17364 -1.02276 3.07411 3.07677C-1.02541 7.1763 -1.02541 13.8264 3.07836 17.9259C7.18213 22.0254 13.8279 22.0254 17.9275 17.9216C19.8966 15.9525 21.0042 13.2789 21 10.495C21 7.71102 19.8924 5.04166 17.9232 3.07252ZM15.9032 14.6242L15.3727 15.1547C14.6852 15.8507 13.6837 16.1392 12.7288 15.9101C11.7697 15.6512 10.8573 15.2438 10.0255 14.7006C9.25311 14.2083 8.54015 13.6311 7.89509 12.9818C7.30095 12.3919 6.76623 11.7469 6.30366 11.0509C5.7944 10.304 5.39124 9.48918 5.1069 8.62768C4.78013 7.61765 5.05173 6.51002 5.80713 5.76735L6.43097 5.14351C6.60497 4.96951 6.88506 4.96951 7.05906 5.14351L9.02394 7.10839C9.19794 7.28239 9.19794 7.56248 9.02394 7.73648L7.86962 8.8908C7.53861 9.21757 7.49617 9.73956 7.77202 10.1173C8.18791 10.6902 8.65049 11.2291 9.1555 11.7299C9.71568 12.2943 10.3268 12.8036 10.9761 13.2577C11.3538 13.5208 11.8631 13.4741 12.1856 13.1516L13.3017 12.0185C13.4757 11.8445 13.7558 11.8445 13.9298 12.0185L15.8989 13.9919C16.0772 14.1701 16.0772 14.4502 15.9032 14.6242C15.9032 14.6284 15.9032 14.6284 15.9032 14.6242Z" fill="white" />
              </svg>
              <?php echo $telefone2 = get_post_meta($post->ID, 'telefone2', true); ?>
            </p>
          <?php } ?>

          <?php if (get_post_meta($post->ID, 'email2', true)) { ?>
            <p><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.4645 7.81423L20.0086 1.31401C19.3599 0.512299 18.3686 0 17.2575 0H3.5352C2.45072 0 1.48268 0.489013 0.833984 1.25746L10.4645 7.81423Z" fill="white" />
                <path d="M10.4655 9.82688L0.0898187 2.76114C0.0332662 3.01064 0 3.27011 0 3.53624V11.753C0 13.7057 1.58347 15.2892 3.5362 15.2892H17.2585C19.2112 15.2892 20.7947 13.7057 20.7947 11.753V3.53624C20.7947 3.29672 20.7714 3.06386 20.7248 2.83765L10.4655 9.82688Z" fill="white" />
              </svg>
              <?php echo $email2 = get_post_meta($post->ID, 'email2', true); ?>
            </p>
          <?php } ?>
        </div>
      <?php } ?>




    </div>

    <div class="col-8 d-flex justify-content-end align-items-end p-0">

      <?php if (get_post_meta($post->ID, 'cidade_estado1', true)) { ?>
        <iframe class="iframe" src="<?php echo $iframe_mapa1 = get_post_meta($post->ID, 'iframe_mapa1', true); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <?php } ?>

      <?php if (get_post_meta($post->ID, 'cidade_estado2', true)) { ?>
        <iframe class="iframe d-none" src="<?php echo $iframe_mapa2 = get_post_meta($post->ID, 'iframe_mapa2', true); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <?php } ?>
    </div>


  </div>
</main>

<?php get_footer(); ?>