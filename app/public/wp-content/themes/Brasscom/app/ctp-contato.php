<?php

function detalhe_contato() {
  global $post;

  $iframe_mapa1 = get_post_meta($post->ID, 'iframe_mapa1', true);
  $iframe_mapa2 = get_post_meta($post->ID, 'iframe_mapa2', true);

  $cidade_estado1 = get_post_meta($post->ID, 'cidade_estado1', true);
  $cidade_estado2 = get_post_meta($post->ID, 'cidade_estado2', true);

  $endereco1 = get_post_meta($post->ID, 'endereco1', true);
  $endereco2 = get_post_meta($post->ID, 'endereco2', true);

  $telefone1 = get_post_meta($post->ID, 'telefone1', true);
  $telefone2 = get_post_meta($post->ID, 'telefone2', true);

  $email1 = get_post_meta($post->ID, 'email1', true);
  $email2 = get_post_meta($post->ID, 'email2', true);

  $nome_contato_assessoria = get_post_meta($post->ID, 'nome_contato_assessoria', true);
  $email_assessoria = get_post_meta($post->ID, 'email_assessoria', true);
  $telefone1_assessoria = get_post_meta($post->ID, 'telefone1_assessoria', true);
  $telefone2_assessoria = get_post_meta($post->ID, 'telefone2_assessoria', true);

  $nome_contato_comunicacao = get_post_meta($post->ID, 'nome_contato_comunicacao', true);
  $email_comunicacao = get_post_meta($post->ID, 'email_comunicacao', true);
  $telefone1_comunicacao = get_post_meta($post->ID, 'telefone1_comunicacao', true);
  $telefone2_comunicacao = get_post_meta($post->ID, 'telefone2_comunicacao', true);

  $nome_contato_secretariado = get_post_meta($post->ID, 'nome_contato_secretariado', true);
  $email_secretariado = get_post_meta($post->ID, 'email_secretariado', true);
  $telefone1_secretariado = get_post_meta($post->ID, 'telefone1_secretariado', true);
  $telefone2_secretariado = get_post_meta($post->ID, 'telefone2_secretariado', true);

?>




  <!-- CAMPO - SECRETARIADO E CONFORMIDADE -->
  <table class="form-table">

    <tr style="background: #E5E5E5;">
      <td style="text-align: center; background: #E5E5E5; padding-top: 8px; padding-bottom: 8px;" colspan="2"><b>SECRETARIADO E CONFORMIDADE</b></td>
    </tr>

    <tr>
      <td>

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Nome do contato:</label>
        <input name="nome_contato_secretariado" id="nome_contato_secretariado" type="text" value="<?php echo $nome_contato_secretariado ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> E-mail:</label>
        <input name="email_secretariado" id="email_secretariado" type="text" value="<?php echo $email_secretariado ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone 1:</label>
        <input name="telefone1_secretariado" id="telefone1_secretariado" type="text" value="<?php echo $telefone1_secretariado ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone 2:</label>
        <input name="telefone2_secretariado" id="telefone2_secretariado" type="text" value="<?php echo $telefone2_secretariado ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

      </td>
    </tr>

  </table>


  <!-- CAMPO - COMUNICAÇÃO -->
  <table class="form-table">

    <tr style="background: #E5E5E5;">
      <td style="text-align: center; background: #E5E5E5; padding-top: 8px; padding-bottom: 8px;" colspan="2"><b>COMUNICAÇÃO</b></td>
    </tr>

    <tr>
      <td>

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Nome do contato:</label>
        <input name="nome_contato_comunicacao" id="nome_contato_comunicacao" type="text" value="<?php echo $nome_contato_comunicacao ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> E-mail:</label>
        <input name="email_comunicacao" id="email_comunicacao" type="text" value="<?php echo $email_comunicacao ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone 1:</label>
        <input name="telefone1_comunicacao" id="telefone1_comunicacao" type="text" value="<?php echo $telefone1_comunicacao ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone 2:</label>
        <input name="telefone2_comunicacao" id="telefone2_comunicacao" type="text" value="<?php echo $telefone2_comunicacao ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

      </td>
    </tr>

  </table>


  <!-- CAMPO - ASSESSORIA DE IMPRENSA -->
  <table class="form-table">

    <tr style="background: #E5E5E5;">
      <td style="text-align: center; background: #E5E5E5; padding-top: 8px; padding-bottom: 8px;" colspan="2"><b>ASSESSORIA DE IMPRENSA</b></td>
    </tr>

    <tr>
      <td>

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Nome do contato:</label>
        <input name="nome_contato_assessoria" id="nome_contato_assessoria" type="text" value="<?php echo $nome_contato_assessoria ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> E-mail:</label>
        <input name="email_assessoria" id="email_assessoria" type="text" value="<?php echo $email_assessoria ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone 1:</label>
        <input name="telefone1_assessoria" id="telefone1_assessoria" type="text" value="<?php echo $telefone1_assessoria ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone 2:</label>
        <input name="telefone2_assessoria" id="telefone2_assessoria" type="text" value="<?php echo $telefone2_assessoria ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

      </td>
    </tr>

  </table>



  <!-- CAMPO - ENDEREÇOS DA EMPRESA E MAPAS -->
  <table class="form-table">

    <tr style="background: #E5E5E5;">
      <td style="text-align: center; background: #E5E5E5; padding-top: 8px; padding-bottom: 8px;" colspan="2"><b>ENDEREÇOS DA EMPRESA:</b></td>
    </tr>

    <tr style="border-bottom: 2px solid grey">
      <td>
        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Informe a cidade e o estado:</label>
        <input name="cidade_estado1" id="cidade_estado1" placeholder="Ex: São Paulo - SP" type="text" value="<?php echo $cidade_estado1 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Informe o endereço completo:</label>
        <textarea name="endereco1" id="endereco1" placeholder="Ex: Rua , Número, Complemento, Bairro | CEP xxxxx-xxx | Cidade-UF" id="endereco1" cols="30" rows="5" style="width: 100%; margin-top: 10px;"><?php echo $endereco1 ?></textarea>

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Mapa da localização:</label>
        <input name="iframe_mapa1" placeholder="Cole aqui somente a URL do iframe" type="text" value="<?php echo $iframe_mapa1 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone:</label>
        <input name="telefone1" id="telefone1" placeholder="Ex: +55 DDD XXXX XXXX" type="text" value="<?php echo $telefone1 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> E-mail:</label>
        <input name="email1" id="email1" placeholder="Ex: email@hotmail.com" type="text" value="<?php echo $email1 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">


      </td>
    </tr>


    <tr style="border-bottom: 2px solid grey">
      <td>
        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Informe a cidade e o estado:</label>
        <input name="cidade_estado2" id="cidade_estado2" placeholder="Ex: São Paulo - SP" type="text" value="<?php echo $cidade_estado2 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Informe o endereço completo:</label>
        <textarea name="endereco2" id="endereco2" placeholder="Ex: Rua , Número, Complemento, Bairro | CEP xxxxx-xxx | Cidade-UF" id="endereco2" cols="30" rows="5" style="width: 100%; margin-top: 10px;"><?php echo $endereco2 ?></textarea>

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Mapa da localização:</label>
        <input name="iframe_mapa2" placeholder="Cole aqui somente a URL do iframe" type="text" value="<?php echo $iframe_mapa2 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> Telefone:</label>
        <input name="telefone2" id="telefone2" placeholder="Ex: +55 DDD XXXX XXXX" type="text" value="<?php echo $telefone2 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

        <label style="font-size: 18px; font-weight: 500; padding-left: 5px;"> E-mail:</label>
        <input name="email2" id="email2" placeholder="Ex: email@hotmail.com" type="text" value="<?php echo $email2 ?>" style="width: 100%; padding-top: 5px; padding-bottom: 5px; margin-bottom: 5px;">

      </td>
    </tr>

  </table>
<?php
}


function metabox_pagina() {
  global $typenow;
  if ($typenow == 'page') {
    global $post;

    if ($post->post_name == 'contato') {
      add_meta_box('detalhe_contato', 'CONTATO', 'detalhe_contato', array('page'), 'normal', 'high');
    }
  }
}
add_action('add_meta_boxes', 'metabox_pagina');


function save_pagina() {
  global $typenow;
  if ($typenow == 'page') {
    global $post;

    if ($post->post_name == 'contato') {
      update_post_meta($post->ID, 'iframe_mapa1', $_POST['iframe_mapa1']);
      update_post_meta($post->ID, 'iframe_mapa2', $_POST['iframe_mapa2']);

      update_post_meta($post->ID, 'cidade_estado1', $_POST['cidade_estado1']);
      update_post_meta($post->ID, 'cidade_estado2', $_POST['cidade_estado2']);

      update_post_meta($post->ID, 'endereco1', $_POST['endereco1']);
      update_post_meta($post->ID, 'endereco2', $_POST['endereco2']);

      update_post_meta($post->ID, 'telefone1', $_POST['telefone1']);
      update_post_meta($post->ID, 'telefone2', $_POST['telefone2']);

      update_post_meta($post->ID, 'email1', $_POST['email1']);
      update_post_meta($post->ID, 'email2', $_POST['email2']);

      update_post_meta($post->ID, 'nome_contato_assessoria', $_POST['nome_contato_assessoria']);
      update_post_meta($post->ID, 'email_assessoria', $_POST['email_assessoria']);
      update_post_meta($post->ID, 'telefone1_assessoria', $_POST['telefone1_assessoria']);
      update_post_meta($post->ID, 'telefone2_assessoria', $_POST['telefone2_assessoria']);

      update_post_meta($post->ID, 'nome_contato_comunicacao', $_POST['nome_contato_comunicacao']);
      update_post_meta($post->ID, 'email_comunicacao', $_POST['email_comunicacao']);
      update_post_meta($post->ID, 'telefone1_comunicacao', $_POST['telefone1_comunicacao']);
      update_post_meta($post->ID, 'telefone2_comunicacao', $_POST['telefone2_comunicacao']);

      update_post_meta($post->ID, 'nome_contato_secretariado', $_POST['nome_contato_secretariado']);
      update_post_meta($post->ID, 'email_secretariado', $_POST['email_secretariado']);
      update_post_meta($post->ID, 'telefone1_secretariado', $_POST['telefone1_secretariado']);
      update_post_meta($post->ID, 'telefone2_secretariado', $_POST['telefone2_secretariado']);
    }
  }
}
add_action('save_post', 'save_pagina', 100);
