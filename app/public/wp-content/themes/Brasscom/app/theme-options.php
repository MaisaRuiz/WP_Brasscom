<?php
// CONFIGURAÇÔES INICIAIS
add_action('init', 'o2_admin_init');
add_action('admin_menu', 'o2_settings_page_init');

// TAB PADRÃO
global $tab_default;
$tab_default = 'geral';

//   LABEL, TAB, TYPE, STYLE

// SET OPTIONS
function o2_set_th_options() {
  $th_options = [
    // 
    'o2_mapa' => array('Mapa'),
    'o2_endereco' => array('Endereço de Contado'),
    'o2_email' => array('Email'),
    'o2_telefone' => array('Telefone'),
    // SOCIAIS
    'o2_youtube' => array('Youtube', 'social'),
    'o2_linkedin' => array('Linkedin', 'social'),
    'o2_facebook' => array('Facebook', 'social'),
    'o2_instagram' => array('Instagram', 'social'),
    'o2_twitter' => array('Twitter', 'social'),
    'o2_spotify' => array('Spotify', 'social'),
    'o2_telegram' => array('Telegram', 'social'),
    'o2_whatsapp' => array('Whatsapp', 'social'),
    // RODAPÉ
    'o2_copyright' => array('Copyright', 'footer')
  ];
  return $th_options;
}

// SET DESCRIPTION
function o2_set_description($key) {
  $o2_description = [];
  return isset($o2_description[$key]) ? $o2_description[$key] : false;
}

// FUNCITONS INICIAIS
function o2_admin_init() {
  $settings = get_option('o2_theme_settings');
  if (empty($settings)) {
    $settings = [];
    foreach (o2_set_th_options() as $key => $value) {
      $settings += [$key => false];
    }
    add_option('o2_theme_settings', $settings, '', 'yes');
  }
}

// CRIANDO PAGE 
function o2_settings_page_init() {
  $settings_page = add_theme_page('Opções do Tema', 'Opções do Tema', 'edit_theme_options', 'theme-settings', 'o2_settings_page');
  add_action("load-{$settings_page}", 'o2_load_settings_page');
}

// LOAD
function o2_load_settings_page() {
  if ($_POST['o2-settings-submit'] == 'Y') {
    check_admin_referer('o2-settings-page');
    o2_save_theme_settings();
    $url_parameters = isset($_GET['tab']) ? 'updated=true&tab=' . $_GET['tab'] : 'updated=true';
    wp_redirect(admin_url('themes.php?page=theme-settings&' . $url_parameters));
    exit;
  }
}

// SAVE
function o2_save_theme_settings() {
  global $pagenow, $tab_default;
  $settings = get_option('o2_theme_settings');

  if ($pagenow == 'themes.php' && $_GET['page'] == 'theme-settings') {
    if (isset($_GET['tab']))
      $tab = $_GET['tab'];
    else
      $tab = $tab_default;

    foreach (o2_set_th_options() as $key => $value) {
      if ((isset($value[1]) && $value[1] != '' ? $value[1] : 'geral') == $tab)
        $settings[$key] = $_POST[$key];
    }
  }
  $updated = update_option('o2_theme_settings', $settings);
}

// TABS
function o2_admin_tabs($current = 'footer') {
  $tabs = array(
    'geral' => 'Geral',
    'social' => 'Sociais',
    'formulario' => 'Formulários',
    'footer' => 'Rodapé'
  );
  echo '<div id="icon icon-themes" class="icon32"><br></div>';
  echo '<h2 class="nav-tab-wrapper">';
  foreach ($tabs as $tab => $name) {
    $class = ($tab == $current) ? ' nav-tab-active' : '';
    echo "<a class='nav-tab$class' href='?page=theme-settings&tab=$tab'>$name</a>";
  }
  echo '</h2>';
}

// CARREGAMENTO HTML
function o2_settings_page() {
  global $pagenow, $tab_default;
  $settings = get_option("o2_theme_settings");
?>
  <div class="wrap">
    <h2>Opções do Tema</h2>
    <?php
    if ('true' == esc_attr($_GET['updated']))
      echo '<div class="updated" ><p>' . 'Opções do tema salvas com sucesso.' . '</p></div>';

    if (isset($_GET['tab']))
      o2_admin_tabs($_GET['tab']);
    else
      o2_admin_tabs($tab_default);
    ?>
    <div id="poststuff">
      <?php
      if ($pagenow == 'themes.php' && $_GET['page'] == 'theme-settings') {
        if (isset($_GET['tab'])) {
          $tab = $_GET['tab'];
        } else {
          $tab = $tab_default;
        }

      ?>
        <form method="post" action="<?php admin_url('themes.php?page=theme-settings'); ?>">
          <?php
          wp_nonce_field("o2-settings-page");

          $cont = 0;

          foreach (o2_set_th_options() as $key => $value) {
            if ((isset($value[1]) && $value[1] != '' ? $value[1] : 'geral') == $tab) {
          ?>
              <div class="container-campos">
                <label for="<?= $key ?>" class="label"><?= isset($value[0]) && $value[0] != '' ? $value[0] : $key ?>: </label>
                <div class="campo">
                  <?php if (!isset($value[2]) || $value[2] == 'input' || $value[2] == '') { ?>
                    <input type="text" name="<?= $key ?>" id="<?= $key ?>" value="<?= isset($settings[$key]) ? esc_html(stripslashes($settings[$key])) : '' ?>" style="<?= isset($value[3]) ? $value[3] : '' ?>">
                  <?php } else { ?>
                    <textarea name="<?= $key ?>" id="<?= $key ?>" cols="30" rows="3" style="<?= isset($value[3]) ? $value[3] : '' ?>"><?= isset($settings[$key]) ?  esc_html(stripslashes($settings[$key])) : '' ?></textarea>
                  <?php } ?>
                </div>
                <?= o2_set_description($key) ? '<p class="descricao">' . o2_set_description($key) . '</p>' : '' ?>
              </div>
          <?php
              $cont++;
            }
          }
          if ($cont == 0)
            echo "<h4 class='nada-encontrado'>Nada encontrado!</h4>"; ?>
          <p class="submit" style="clear: both;">
            <input type="submit" name="Submit" class="button-primary" value="Salvar" />
            <input type="hidden" name="o2-settings-submit" value="Y" />
          </p>
        </form>
      <?php } ?>
    </div>
  </div>
<?php
}

// STYLE DEFAULT
function style_default() {
?>
  <style>
    /* CONTAINER CAMPOS */
    .container-campos {
      margin-bottom: 10px;
    }

    /* LABEL */
    .label {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 5px;
    }

    /* CAMPOS -> INPUT e TEXTAREA */
    .campo input {
      width: 100%;
    }

    .campo textarea {
      resize: none;
      width: 100%;
    }

    /* DESCRIÇÃO */
    .descricao {
      font-size: 12px;
      margin: 0;
    }

    .descricao::before {
      content: 'OBS: ';
      font-weight: bold;
    }

    /* UPDATE */
    .update {
      color: green;
    }

    /* NADA ENCONTRADO */
    .nada-encontrado {
      font-size: 15px;
      color: red;
    }
  </style>
<?php
}
add_action('admin_head', 'style_default');

// FUNCÔES AUXILIARES
function echo_o2option($option, $nl2br = false) {
  get_o2option($option, true, true, $nl2br);
}

function get_o2option($option, $echo = false, $strip = true, $nl2br = false) {
  $options = get_option('o2_theme_settings');

  if (function_exists('qtranxf_getLanguage') && $options[$option . '_' . qtranxf_getLanguage()]) {
    $option = $option . '_' . qtranxf_getLanguage();
  }

  if (is_array($options[$option])) {
    return $options[$option];
  } else {
    $return = $strip ? stripslashes($options[$option]) : $options[$option];
    $return = $nl2br ? nl2br($return) : $return;

    if ($echo) {
      echo $return;
    } else {
      return $return;
    }
  }
}

function set_o2option($option, $value) {
  $options = get_option('o2_theme_settings');
  $options[$option] = $value;

  update_option("o2_theme_settings", $options);
}
