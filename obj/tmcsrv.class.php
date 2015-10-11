<?php

/**
 * Thermal Max Centralized Server
 *
 * @author Richard Underwood
 * @date September 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Singleton Server class that encapsultates a Smarty
 * object, along with many other functions for global use.
 */

/**	Prerequisites **/

require $_SERVER['DOCUMENT_ROOT'].'/workspace/thermalmax/smarty/libs/Smarty.class.php';

class tmcsrv {
	
	/**
	 * @var 'Class Members'
	 */
	
	const REL_URI = '/workspace/thermalmax/';
	private static $s_instance = null;
	private $m_smarty = null;
	private $m_pages = null;
	private $m_mysql = null;
	private $m_essentials_up = false;
	
	/**
	 * @summary 'Returns the singleton instance of this class,
	 * 			 instantiating the object if null.'
	 *
	 * @return this
	 */
	public static function get_singleton() {

		if (!isset(self::$s_instance)) {
			self::$s_instance = new self();
			self::$s_instance->m_essentials_up = self::$s_instance->start_smarty();
			self::$s_instance->m_pages = array(
				self::REL_URI.'index.php', 
				self::REL_URI.'booking.php', 
				self::REL_URI.'thanks.php',
				self::REL_URI.'wicked.php',
				self::REL_URI.'contact.php',
				self::REL_URI.'about.php');
		}
		return self::$s_instance;
	}
	
	/**
	 * @summary 'Instantiates the Smarty object.'
	 *
	 * @return True upon successful initialization
	 */
	private function start_smarty() {
		if (!isset($this->m_smarty)) {
			$this->m_smarty = new Smarty;
			return true;
		}
		return false;
	}
	
	/**
	 * @constructor
	 * @summary 'Prevents the creation of a new Singleton instance
	 * 			 outside of this scope if a user uses the new operator.'
	 */
	protected function __construct() {}
	
	/**
	 * @destructor
	 * @summary 'Deallocates this objects memory.'
	 *
	 */
	public function __destruct() {
		unset($m_essentials_up);
		unset($m_smarty);
	}

	/**
	 * @override
	 * @summary 'Prevents cloning of the Singleton instance.'
	 *
	 * @return void
	 */
	private function __clone() {}
	
	/**
	 * @override
	 * @summary 'Prevents unserializing the Singleton instance.'
	 *
	 * @return void
	 */
	public function __wakeup() {}
	
	/**
	 * @override
	 * @summary 'Provides a textual reference to the name of this class.'
	 *
	 * @return string
	 */
	public function __toString() {
		return 'tmcsrv';
	}

	/**
	 * @summary 'Queries the status of the essential objects.'
	 *
	 * @return bool
	 */
	public function essentials_up() {
		return $this->m_essentials_up;
	}

	/**
	 * @summary 'Provides access to the Smarty object beyond this scope.'
	 *
	 * @return object
	 */
	public function get_smarty() {
		return $this->m_smarty;
	}

	/**
	 * @summary 'Provides direct access to the smarty object.' 
	 *
	 * @return object
	 */
	public static function smartyd() {
		return get_singleton()->essentials_up() ? get_singleton()->get_smarty() : null;
	}
	
	/**
	 * @summary 'Provides access to the MySqli object beyond this scope.'
	 *
	 * @return object
	 */
	public function get_mysql() {
		return $this->m_mysql;
	}
	
	/**
	 * @summary 'Provides direct access to the MySqli object.' 
	 *
	 * @return object
	 */
	public static function mysqlid() {
		return get_singleton()->essentials_up() ? get_singleton()->get_mysql() : null;
	}

	/**
	 * @summary 'Checks the caching status of a given page.'
	 *
	 * @return bool
	 */
	public function check_cache_status($url) {
		return $this->m_smarty->isCached($url);
	}

	/**
	 * @summary 'Initialises Smarty global variables for Thermal Max site.
	 *			 *NOTE* It is recommended to check the cache status of
	 *			 your page prior to this call - the params may already reside
	 *			 within the cache.'
	 *
	 * @return void
	 */
	public function init_global_smarty_params($uri = 0) {
		$this->m_smarty->assign('name', 'Thermal Max');
		$this->m_smarty->assign('author', 'Richard Underwood');
		$this->m_smarty->assign('bl', array('Benchmark Learning', 'benchmarklearning.co.uk'));
		$this->m_smarty->assign('sb', 'https://simplesharebuttons.com/images/somacro/');
		$this->m_smarty->assign('fb', 'facebook');
		$this->m_smarty->assign('tw', 'twitter');
		$this->m_smarty->assign('gg', 'google');
		$this->m_smarty->assign('li', 'linkedin');
		$this->m_smarty->assign('fb_share', 'Share on Facebook');
		$this->m_smarty->assign('tw_share', 'Share on Twitter');
		$this->m_smarty->assign('gg_share', 'Share on Google+');
		$this->m_smarty->assign('li_share', 'Share on LinkedIn');
		
		switch ($uri) {
			case $this->m_pages[0]:
				$this->m_smarty->assign('next_ft', 'img/icon-next.png');
				$this->m_smarty->assign('showcase', 'img/showcase.png');
				$this->m_smarty->assign('exq_aes', 'Exquisite Aesthetics');
				$this->m_smarty->assign('rosette', 'img/rosette.png');
				$this->m_smarty->assign('r10y', '10 Years Guarantee');
				break;
			case $this->m_pages[1]:
				$this->m_smarty->assign('sel_arw', 'img/select_arrow.png');
				$this->m_smarty->assign('col_w', 'White');
				$this->m_smarty->assign('col_at', 'Antique Teak');
				$this->m_smarty->assign('col_io', 'Irish Oak');
				$this->m_smarty->assign('col_go', 'Golden Oak');
				$this->m_smarty->assign('col_ma', 'Mahogany');
				$this->m_smarty->assign('col_cr', 'Cream');
				$this->m_smarty->assign('col_sc', 'Soft Cherry');
				$this->m_smarty->assign('col_rc', 'Rustic Cherry');
				$this->m_smarty->assign('col_ro', 'Rosewood');
				$this->m_smarty->assign('col_b', 'Black');
				$this->m_smarty->assign('col_g', 'Grey');
				$this->m_smarty->assign('col_cg', 'Chartwell Green');
				$this->m_smarty->assign('col_gr', 'Green');
				$this->m_smarty->assign('col_re', 'Red');
				$this->m_smarty->assign('col_st', 'Stahlblau');
				break;
			case $this->m_pages[2]:
				// Start mysqli
				$this->m_mysql = new mysqli("localhost", "root", "CAPOdiTUTTIcapi", "thermalmax");
				break;
			case $this->m_pages[3]:
				break;
			case $this->m_pages[4]:
				$this->m_smarty->assign('ema', 'thermalmax@benchmarklearning.co.uk');
				break;
			case $this->m_pages[5]:
				$this->m_smarty->assign("ben", "Benefits of Triple Glazing");
				break;
			default:
				echo 'Something wicked happened!';
		}
	}
}

?>