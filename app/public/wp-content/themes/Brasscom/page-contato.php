<?php

/**
 * 
 * Template Name: Contato
 * 
 */

get_header(); ?>

<main class="pg-contato">
  <div class="div-contato container pt-5">
    <h1 class="font55 fontWeight-300 text-center"><?php the_title(); ?></h1>



  </div>


  <div class="div-iframe row mb-5">


    <div class="col-4 border-red">
      <h1 class="text-white fontWeight-300 font55">Onde estamos</h1>

      <button class="btnAzul-cidade">São Paulo - SP</button>
      <div id="btn1" class="mb-5">
        <div class="inf-cidade">

          <p><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 0C5.17176 0 0 1.71493 0 7.83112C0 14.5414 8 20 8 20C8 20 16 14.5376 16 7.83112C16 1.71493 10.8282 0 8 0ZM8 10.0915C6.67176 10.0915 5.59542 9.03792 5.59542 7.73772C5.59542 6.43751 6.67176 5.3839 8 5.3839C9.32824 5.3839 10.4046 6.43751 10.4046 7.73772C10.4046 9.03792 9.32824 10.0915 8 10.0915Z" fill="white" />
            </svg>
            Rua Funchal, 263, cj. 151 Vl. Olímpia | CEP 04551-060 | São Paulo-SP
          </p>

          <p><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.9232 3.07252C13.8237 -1.027 7.17364 -1.02276 3.07411 3.07677C-1.02541 7.1763 -1.02541 13.8264 3.07836 17.9259C7.18213 22.0254 13.8279 22.0254 17.9275 17.9216C19.8966 15.9525 21.0042 13.2789 21 10.495C21 7.71102 19.8924 5.04166 17.9232 3.07252ZM15.9032 14.6242L15.3727 15.1547C14.6852 15.8507 13.6837 16.1392 12.7288 15.9101C11.7697 15.6512 10.8573 15.2438 10.0255 14.7006C9.25311 14.2083 8.54015 13.6311 7.89509 12.9818C7.30095 12.3919 6.76623 11.7469 6.30366 11.0509C5.7944 10.304 5.39124 9.48918 5.1069 8.62768C4.78013 7.61765 5.05173 6.51002 5.80713 5.76735L6.43097 5.14351C6.60497 4.96951 6.88506 4.96951 7.05906 5.14351L9.02394 7.10839C9.19794 7.28239 9.19794 7.56248 9.02394 7.73648L7.86962 8.8908C7.53861 9.21757 7.49617 9.73956 7.77202 10.1173C8.18791 10.6902 8.65049 11.2291 9.1555 11.7299C9.71568 12.2943 10.3268 12.8036 10.9761 13.2577C11.3538 13.5208 11.8631 13.4741 12.1856 13.1516L13.3017 12.0185C13.4757 11.8445 13.7558 11.8445 13.9298 12.0185L15.8989 13.9919C16.0772 14.1701 16.0772 14.4502 15.9032 14.6242C15.9032 14.6284 15.9032 14.6284 15.9032 14.6242Z" fill="white" />
            </svg>
            +55 11 3524 7900
          </p>

          <p><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.4645 7.81423L20.0086 1.31401C19.3599 0.512299 18.3686 0 17.2575 0H3.5352C2.45072 0 1.48268 0.489013 0.833984 1.25746L10.4645 7.81423Z" fill="white" />
              <path d="M10.4655 9.82688L0.0898187 2.76114C0.0332662 3.01064 0 3.27011 0 3.53624V11.753C0 13.7057 1.58347 15.2892 3.5362 15.2892H17.2585C19.2112 15.2892 20.7947 13.7057 20.7947 11.753V3.53624C20.7947 3.29672 20.7714 3.06386 20.7248 2.83765L10.4655 9.82688Z" fill="white" />
            </svg>
            comunicacao@brasscom.org.br
          </p>

        </div>
      </div>

      <button class="btnAmarelo-cidade">Brasília - DF
        <div class="mais">
          <span class="traco1"></span>
          <span class="traco2"></span>
        </div>
      </button>


    </div>

    <div class="col-8 d-flex justify-content-end align-items-end border-red p-0">

      <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3037271715093!2d-46.69089498502163!3d-23.59343778466695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57479f491ebf%3A0xd869bd16d3a3e23a!2sR.%20Funchal%2C%20263%20-%20conj%20151%20-%20Vila%20Ol%C3%ADmpia%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004551-060!5e0!3m2!1spt-PT!2sbr!4v1661282254384!5m2!1spt-PT!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>


  </div>
</main>

<?php get_footer(); ?>