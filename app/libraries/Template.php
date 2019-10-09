<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



/**
* Template Library
* Not really a library, just a builder to get some content short and dirty
*
* @package  	application\libraries\Template.php
* @category		Library
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	2019 - renkert.net | Rüdiger Renkert
* @version		1.0.0
*
*/



class Template
{
	/**
	 * if the view files should reside in a subfolder of /application/views
	 *
	 * @var string
	 */
	public $view_folder 		= 'content';


	// --- CONSTRUCTOR ---------------------------------------------------------
	public function __construct()
    {
		// --- LOGFILE ---------------------------------------------------------
		log_message('info', '(LIBRARY) - '. __CLASS__ .' - initialized');
	}



    public function render( $_view = NULL, $_layout = NULL, $_data = array() ) {
        $data['view']			= isset( $this->view_folder ) ? $this->view_folder . '/' .$_view : $_view;
        $data 					= array_merge($data, $_data);
		$layout 				= isset( $_layout ) ? $_layout : 'index';
        ci()->load->view('layouts/' . $layout, $data);
    }

}
