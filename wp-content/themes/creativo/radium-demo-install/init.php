<?php
/**
 * Radium Theme Importer
 * Version 1
 *
 * This file is just an example you can copy it to your theme and modify it to fit your own needs.
 * Watch the paths though.
 */
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Don't duplicate me!
if ( !class_exists( 'Radium_Theme_Demo_Data_Importer' ) )
{
  require_once( dirname( __FILE__ ) . '/radium-importer.php' );


  class Radium_Theme_Demo_Data_Importer extends Radium_Theme_Importer
  {
    private static $instance;

    public $download_content_attachments    = true;
    public $contents_file_name        = 'content.xml';
    public $theme_options_file_name     = 'theme-settings.txt';
    public $theme_option_name         = 'theme_mods_creativo';
    public $widgets_file_name         = 'widgets.json';
    public $revsliders_file_name        = 'revolution_slider.zip';
    public $revsliders_file_name2       = 'revolution_slider2.zip';
    public $layersliders_file_name      = 'layer_sliders.zip';

    // Base demo files folder to download from
    public $demo_zips_url_base = 'http://rockythemes.com/dev';

    public $widget_import_results;


    public function __construct()
    {
      self::$instance = $this;


      add_filter( 'add_post_metadata',      array( $this, 'check_previous_meta' ), 10, 5 );

      add_action( 'radium_after_content_import',  array( $this, 'setup_default_pages' ) );
      //self::setup_default_pages();

      add_action( 'admin_menu',           array( $this, 'add_admin_menu') );
      add_action( 'wp_ajax_radium_demo_import',   array( $this, 'demo_import_ajax') );
      add_action( 'wp_ajax_radium_demo_menu',   array( $this, 'setup_menus_locations') );
    }


    /**
     * Add Panel Page
     */

    public function demo_import_ajax()
    {
      if( !isset($_REQUEST['module']) || empty($_REQUEST['module']) ){
        echo 'Please choose the template elements to be imported';
        die('');
      }

      set_time_limit(0);

      $template   = trim($_REQUEST['template']);
      $module   = $_REQUEST['module'];


      // First, download the ZIP (if it doesn't exist) and unzip the folder to the /demo-files directory
      $this->download_and_unzip($template);


      // Then do the import (previous code from here)
      $this->demo_files_path  = dirname(__FILE__) . '/demo-files/'. $template . '/'; //can
      $this->init();

      /*
      if( 'contents' == $module ){
        self::ajax_response( array(
          'html'  => 'Importing 2',
          'next'  => 'contents'
        ));
      }
      self::ajax_ok( $module . ' imported' );
      */

      switch( $module ){
        case 'revsliders' :
          $res = $this->import_revsliders( $this->revsliders_file );
          $res = $this->import_revsliders( $this->revsliders_file2 );
        break;

        case 'layersliders' :
          $res = $this->import_layersliders( $this->layersliders_file );
        break;

        case 'options' :
          $res = $this->import_theme_options( $this->theme_options_file, $this->theme_option_name );
        break;

        case 'widgets' :
          $res = $this->import_widgets( $this->widgets_file );
        break;

        case '__contents' :
          $res = $this->import_contents( $this->contents_file );
        break;

        case 'contents' :
          $res = $this->import_contents_alternate( $this->contents_file, 20 );
        break;
      }
      #$res = 'OK '. $module;


      if( 'contents' == $module )
      {
        if( false === $res ){
          $res = 'Contents Imported';
          if( get_option('_cri_processed_posts') ){
            $res =  count( get_option('_cri_processed_posts')) .' media files imported, importing rest of the Contents';
          }

          self::ajax_response( array(
            'status'  => 'ok',
            'html'    => $res,
            'next'    => 'contents'
          ));
        }
        else{
          self::ajax_ok( 'Contents Imported' );
        }
      }
      else{
        self::ajax_ok( $res );
      }
    }

    /**
     * Load contents of a URL
     * Dan Rowden Feb 2017
     */
    private function url_get_contents($url) {
      if (!function_exists('curl_init')){ 
          die('CURL is not installed!');
      }
      $ch = curl_init();
      curl_setopt( $ch, CURLOPT_URL, 'http://rockythemes.com/dev/demos.php' );
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
      $output = curl_exec( $ch );
      curl_close( $ch );
      return $output;
    }

    /**
     * Function to download a demo ZIP and unzip to local folder
     * Dan Rowden Feb 2017
     */
    private function download_and_unzip($template)
    {
      $file_name = $template . '.zip';
      $external_zip = $this->demo_zips_url_base . '/demo-zips/' . str_replace(' ', '%20', $file_name);
      $local_zip = __DIR__ . '/demo-files/' . $file_name;
      $extract_to = __DIR__ . '/demo-files/';

      // Only download if folder doesn't exist
      // Use content.xml as a check 
      if( !file_exists( $extract_to . $template . '/content.xml' ) ) {

        // Here is the file we are downloading, replace spaces with %20
        $zip_resource = fopen($local_zip, "w");
        // Get The Zip File From Server
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $external_zip );
        curl_setopt( $ch, CURLOPT_FAILONERROR, true );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_BINARYTRANSFER, true );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 30 );
        curl_setopt( $ch, CURLOPT_FILE, $zip_resource );

        $page = curl_exec( $ch );
        if( !$page ) {
          die( "Error : ".curl_error( $ch ) );
        }
        curl_close( $ch );
        
        if( filesize($local_zip) > 0)  {

          // Unzip
          $zip = new ZipArchive;
          if ( $zip->open( $local_zip ) != "true" ){
            die("Unable to open the Zip File");
          } 
          /* Extract Zip File */
          $zip->extractTo( $extract_to );
          $zip->close();
        } else {
            die("Couldn't download the ZIP file.");
        }

      }
    }


    /**
     * Add Panel Page
     */

    public function add_admin_menu()
    {
      $page = add_submenu_page('themes.php', "Import Templates", "Import Templates", 'switch_themes', 'radium_demo_installer', array($this, 'demo_installer'));
      add_action( 'admin_print_styles-'. $page, array($this, 'admin_scripts') );
    }

    public function admin_scripts()
    {
      wp_enqueue_style('demo-importer',   get_template_directory_uri() . '/radium-demo-install/demo-importer.css');

      wp_register_script( 'demo-importer', get_template_directory_uri() . '/radium-demo-install/demo-importer.js', array('jquery') );
      $translation_array = array(
        'preconfirmation'   => __('Are you sure to import dummy content? We highly encourage you to do this action in a WordPress fresh installation!'),
        'importing'     => __('Please be patient while we are importing templates. This process may take a couple of minutes.'),
        'importedAlert'   => __('Please note that some of the images & videos that you will see in page sections, sliders might be hotlinked to our server (not imported), As you are allowed to use these images on your development phase (for better visual guide) of your site and MUST be replaced with your own images/videos before its ready for production.'),
        'importFailded'   => __('We could not complete the import. Please try again.')

      );
      wp_localize_script( 'demo-importer', 'rdijs', $translation_array );
      wp_enqueue_script( 'demo-importer' );

      wp_enqueue_script('demo-importer',  get_template_directory_uri() . '/radium-demo-install/demo-importer.js', array('jquery') );
    }


    public function demo_installer()
    {
      ?><div class="wrap">
      <h2>Import Demo Data</h2><?php

      //$this->general_notes();
      //$this->requirement_notes();

      #$file = dirname( __FILE__ ) . '/demo-files/demo1/content.xml';
      #self::p( $this->wpAttachmentsImportGetStats() );
      #self::p( $this->wpImportRun($file, 2) );


      ?><div id="import_notes"></div><?php

      // Get the external file's contents and simply display here
      echo $this->url_get_contents($this->demo_zips_url_base . '/demos.php');

      ?></div><?php
    }

    public function general_notes()
    {
      ?><div class="updated settings-error">
        <h3>Please read the notice below before proceeding further:</h3>
        <ul style="padding-left: 20px;list-style-position: inside;list-style-type: square;}">
          <li><strong>Important:</strong> If you import the same file twice, menu items will be duplicated.</li>
          <li><strong>Important:</strong> To import Revolution Slider, Layer Slider & WooCommerce contents, all of those three plugins must be active.</li>
          <li>No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified .</li>
          <li>No WordPress settings will be modified .</li>
          <li>Posts, pages, some images, some widgets and menus will get imported .</li>
          <li>Some Images & Videos will be downloaded from our server, these images are copyrighted and are for demo use only .</li>
          <li>Please click import only once and wait, it can take a couple of minutes</li>
        </ul>
       </div><?php
    }


    public function requirement_notes()
    {
      $max_execution_time  = ini_get("max_execution_time");
      $max_input_time   = ini_get("max_input_time");
      $upload_max_filesize = ini_get("upload_max_filesize");

      if ($max_execution_time < 60 || $max_input_time < 60 || self::size_to_bytes(WP_MEMORY_LIMIT) < 100663296 || self::size_to_bytes($upload_max_filesize) < 10485760) {

        echo '<div class="error settings-error">';
        echo '<h3>Please resolve these issues before installing any template.</h3>';
        echo '<ol>';
        if ($max_execution_time < 60) {
          echo '<li><strong>Maximum Execution Time (max_execution_time) : </strong>' . $max_execution_time . ' seconds. <span style="color:red"> Recommended max_execution_time should be at least 60 Seconds.</span></li>';
        }
        if ($max_input_time < 60){
          echo '<li><strong>Maximum Input Time (max_input_time) : </strong>' . $max_input_time . ' seconds. <span style="color:red"> Recommended max_input_time should be at least 60 Seconds.</span></li>';
        }
        if (self::size_to_bytes(WP_MEMORY_LIMIT) < 100663296 ){
          echo '<li><strong>Increase WordPress Memory Limit (WP_MEMORY_LIMIT) : </strong>' . WP_MEMORY_LIMIT . '<br /><span style="color:red"> Recommended memory limit should be at least 96MB. Please refer to : <a target="_blank" href="http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP">Increasing memory allocated to PHP</a> for more information</span></li>';
        }
        if (self::size_to_bytes($upload_max_filesize) < 10485760) {
          echo '<li><strong>Maximum Upload File Size (upload_max_filesize) : </strong>' . $upload_max_filesize . ' <span style="color:red"> Recommended Maximum Upload Filesize should be at least 10MB.</li>';
        }
        echo '</ol>';
        echo '</div>';
      }
    }


    public function size_to_bytes($size)
    {
      $let = substr($size, -1);
      $ret = substr($size, 0, -1);
      switch (strtoupper($let)) {
        case 'P':
          $ret *= 1024;
        case 'T':
          $ret *= 1024;
        case 'G':
          $ret *= 1024;
        case 'M':
          $ret *= 1024;
        case 'K':
          $ret *= 1024;
      }
      return $ret;
    }


      /**
         * Avoids adding duplicate meta causing arrays in arrays from WP_importer
         *
         * @param null    $continue
         * @param unknown $post_id
         * @param unknown $meta_key
         * @param unknown $meta_value
         * @param unknown $unique
         *
         * @since 0.0.2
         *
         * @return
        **/

        public function check_previous_meta( $continue, $post_id, $meta_key, $meta_value, $unique )
    {
      $old_value = get_metadata( 'post', $post_id, $meta_key );
      if ( count( $old_value ) == 1 ) {
        if ( $old_value[0] === $meta_value ) {
          return false;
        } elseif ( $old_value[0] !== $meta_value ) {
          update_post_meta( $post_id, $meta_key, $meta_value );
          return false;
        }
      }
      }


    public function setup_default_pages()
    {
      $homepage = get_page_by_title('Home Full Screen');
      if( empty($homepage->ID) ){
        $homepage = get_page_by_title('Home');
        if (empty($homepage->ID)) {
          $homepage = get_page_by_title('Homepage');
        }
      }

      if( !empty($homepage->ID) ){
        update_option('page_on_front', $homepage->ID);
        update_option('show_on_front', 'page');
      }

      $shop_page = get_page_by_title('Shop');
      if(!empty($shop_page->ID)) {
         update_option('woocommerce_shop_page_id', $shop_page->ID);
      }


      if( $hello = get_page_by_title( 'Hello world!', 'OBJECT', 'post' ) ){
        wp_delete_post($hello->ID);
      }
    }

    public function setup_menus_locations()
    {
      $locations = get_theme_mod('nav_menu_locations');
      $menus     = wp_get_nav_menus();

      if( $menus )
      {
        foreach ($menus as $menu) {
          if( $menu->name == 'Home menu' || $menu->name == 'Home Menu' ||  $menu->name == 'Home' ||  $menu->name == 'Main Navigation' ||$menu->name == 'Main Menu' ){
            $locations['primary-menu'] = $menu->term_id;
          }
          if( $menu->name == 'One Page Menu'){
            $locations['one-page-menu'] = $menu->term_id;
          }
          if( $menu->name == 'Top Menu'){
            $locations['top-menu'] = $menu->term_id;
          }
          if( $menu->name == 'Side Navigation'){
            $locations['side-menu'] = $menu->term_id;
          }
        }
      }
      set_theme_mod('nav_menu_locations', $locations);

      return $locations;
    }

    public static function ajax_error( $html ){
      self::ajax_response(array('status'=>'error','html'=>$html));
    }
    public static function ajax_ok( $html ){
      self::ajax_response(array('status'=>'ok','html'=>$html));
    }
    public static function ajax_response( $a ){
      @error_reporting(0);
      header('Content-type: application/json');
      echo json_encode($a);
      die('');
    }
    public static function p($a){
      echo '<pre>'; print_r($a); echo '</pre>';
    }
  }

  new Radium_Theme_Demo_Data_Importer;
}
?>