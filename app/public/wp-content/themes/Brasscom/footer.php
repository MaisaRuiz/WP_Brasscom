<footer>
  <div class="footer-white">
    <div class="row">
      <div class="separa-footer d-flex">
        <a href="<?php echo home_url() ?>" target="_self" class="me-3 d-none d-sm-block"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo_blue.png" alt="Logo Brasscom"></a>
        <hr />
      </div>
    </div>


    <div class="row flex-column flex-sm-row mt-sm-5 pb-4 font13">
      <!-- Accordion aqui -->
      <div class="col-4 col-lg widget">
        <?php dynamic_sidebar('accordionfooter1'); ?>
      </div>
      <div class="col-4 col-lg widget">
        <?php dynamic_sidebar('accordionfooter2'); ?>
      </div>
      <div class="col-4 col-lg widget">
        <?php dynamic_sidebar('accordionfooter3'); ?>
      </div>
      <div class="col-4 col-lg widget">
        <?php dynamic_sidebar('accordionfooter4'); ?>
      </div>
      <div class="col-4 col-lg widget">
        <?php dynamic_sidebar('accordionfooter5'); ?>
      </div>
      <div class="col-4 col-lg widget">
        <?php dynamic_sidebar('accordionfooter6'); ?>
      </div>
    </div>


    <div class="row flex-column-reverse flex-md-row-reverse flex-lg-row d-flex justify-content-between align-items-center">
      <div class="copyright font13 mb-0 col-12 col-md-5">
        <?php echo_o2option('o2_copyright', true); ?>
        <a class="ms-1" href="https://www.oxigenweb.com.br/" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/oxigenweb.png" alt="Logo Oxigenweb">
        </a>
      </div>

      <div class="botoes-footer flex-column flex-sm-row d-flex gap-4 gap-md-2 gap-lg-4 p-0 col-12 col-md-7">
        <a class="btn-blue btn-257 m-auto m-sm-0" href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/login.png" alt="Ícone Login">Área do associado</a>
        <a class="btn-blue btn-257 m-auto m-sm-0" href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/denuncia.png" alt="Ícone Login">Canal de denúncias</a>
      </div>
    </div>
  </div>


  <div class="footer-blue fontWeight-400 d-flex justify-content-center align-items-center">
    <p class="text-center h-100 m-0 ps-4 pe-4 font13">

      <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.5" y="0.799805" width="23" height="17.4" rx="2.5" stroke="white" />
        <path d="M3.2002 5.09961L12.0002 9.89961L20.8002 5.09961" stroke="white" />
      </svg>

      <?php if (get_o2option('o2_email')) { ?>
        <a href="<?php echo_o2option('o2_email'); ?>" target="_blank">presidencia@brasscom.org.br</a> |
      <?php } ?>

      <a href="<?php echo home_url('Contato') ?>" class="" target="_blank">Contato</a> |

      <a href="" class="" target="_blank">Política de privacidade</a>

    </p>
  </div>

</footer>


<!-- PUXA OS SCRIPTS DO ARQUIVO FUNCTIONS QUE SÃO DO FOOTER -->
<?php wp_footer(); ?>


<!-- ESCONDE A CLASSE QUE DEIXA O BACKGROUND ESCURO AO CLICAR NO MENU DO OFFCANVAS -->
<!-- <script>
  jQuery(document).ready(function() {
    jQuery('#menu').on('click', function() {
      jQuery('.offcanvas-backdrop').addClass('d-none');
    });
  });
</script> -->



<!-- CONFG. ACCORDION HEADER -->
<script>
  jQuery(document).ready(function() {
    jQuery(function() {
      jQuery('.menu-item-has-children').on('click', function() {
        if (window.innerWidth <= 1169) {
          jQuery(this).find('.sub-menu').stop().slideToggle();
          jQuery(this).toggleClass('ativo');

        }
      });
    });
  });
</script>



<!-- CONFG. ACCORDION FOOTER -->
<script>
  jQuery(document).ready(function() {
    jQuery(function() {
      jQuery('.widget .widget-title').on('click', function() {
        if (window.innerWidth <= 575) {
          jQuery(this).parent().find('.menu').stop().slideToggle();
          jQuery(this).toggleClass('active');
        }
      });
    });
  });
</script>



<!-- TROCA DO SVG OPEN (=) PARA CLOSE (x) NO MENU E VICE-VERSA -->
<!-- <script>
  jQuery(document).ready(function() {
    jQuery("#accordionFlushExample").click(function() {
      jQuery(".btn-closeOpen").toggleClass("d-none");
    });
  });
</script> -->


<!-- HAMBURGUER MENU -->
<script>
  jQuery(document).ready(function() {

    //DESSE JEITO AO CLICAR FORA DO OFFCANVASBODY O MENU NÃO SAIA DO X
    // jQuery('#menu').on('click', function() {
    //   jQuery('.burguer').toggleClass('active');
    // });


    //DESSE JEITO O X E HAMBURGUER MUDAM INDEPENDENTE DE ONDE EU CLIQUE
    jQuery('#offcanvasWithBothOptions')[0].addEventListener('show.bs.offcanvas', function() {
      jQuery('.burguer').addClass('active');
    });
    jQuery('#offcanvasWithBothOptions')[0].addEventListener('hide.bs.offcanvas', function() {
      jQuery('.burguer').removeClass('active');
    });


  });
</script>


<!-- BOTÕES/CIDADE DA PAGE-CONTATO -->
<script>
  jQuery(document).ready(function() {
    jQuery(function() {
      jQuery('.btnCidade').on('click', function() {

        jQuery('.inf-cidade').toggleClass('d-none');
        jQuery('.btnCidade').toggleClass('ativo');
        jQuery('.mais').toggleClass('d-none');
        jQuery('.iframe').toggleClass('d-none');

      });
    });
  });
</script>


</body>

</html>