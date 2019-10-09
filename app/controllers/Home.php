<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Home Controller
*
* @package  	app\controllers\Home.php
* @category		Controller
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	2019 - renkert.net | Rüdiger Renkert
* @version		1.0.0
*
*/




class Home extends APP_Controller
{


	// --- CONSTRUCTOR ---------------------------------------------------------
	public function __construct()
	{
		parent::__construct();

		// --- LOGFILE ---------------------------------------------------------
		log_message('info', '(CONTROLLER) - '. __CLASS__ .' - initialized');
	}


	public function index()
	{
		$this->template->render('home');
	}

}
