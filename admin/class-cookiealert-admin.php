<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://prefectreturn.com
 * @since      1.0.0
 *
 * @package    Cookiealert
 * @subpackage Cookiealert/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cookiealert
 * @subpackage Cookiealert/admin
 * @author     Roni Das <kernelroni@gmail.com>
 */
class Cookiealert_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cookiealert_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cookiealert_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cookiealert-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cookiealert_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cookiealert_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cookiealert-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	
	public function cookieAlertMenu(){
		
		add_menu_page( 'CookieAlert', 'CookieAlert', 'manage_options', 'CookieAlert', array(&$this,"admin_view"), 'dashicons-tickets', 6  );
	}
	
	
	public function admin_view(){

		$post = $_POST['cookiealert'];
		$info = 0;
	
		if($_POST){
			
			$info = serialize($post);
			update_option('cookiealert', $info);
		}
		
		$info = get_option('cookiealert', false);
		
		if($info){
		$data = unserialize($info);		
		extract($data);
		}
		
		
		
	
		
		
		//echo "admin page for splash screen settings";
		require_once plugin_dir_path( __FILE__ ) . 'partials/cookiealert-admin-display.php';
		
		
	}		
	
	
	

}
