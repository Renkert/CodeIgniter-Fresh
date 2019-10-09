<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Base Controller which has to be extended by all Controllers
*
* @package  	app\core\APP_Controller.php
* @category		Core Controller
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	2019 - renkert.net | Rüdiger Renkert
* @version		1.0.0
*
*/




class APP_Controller extends CI_Controller
{

	// --- CONSTRUCTOR ---------------------------------------------------------
	public function __construct()
    {
        parent::__construct();

		// --- LOGFILE ---------------------------------------------------------
		log_message('info', '(CORE CONTROLLER) - '. __CLASS__ .' - initialized');
	}
}
