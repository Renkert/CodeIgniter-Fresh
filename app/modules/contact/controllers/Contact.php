<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Home Controller
*
* @package  	application\controllers\Home.php
* @category		Controller
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	renkert.net | CCM! | Rüdiger Renkert
* @version		1.0.0
*
*/




class Services extends MY_Controller
{

	public function index()
	{
		$data['dir']			= __DIR__;
		$data['view_file']		= VIEWPATH .'/';
		$this->template->render('services', NULL, $data);
	}

}
