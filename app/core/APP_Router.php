<?php if (!defined("BASEPATH")) exit("No direct script access allowed");



/**
*
* @package  	app\core\APP_Router.php
* @category		Core
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	2019 - renkert.net | Rüdiger Renkert
* @version		1.0.0
*
* Inspired by:
*
* @package		CodeIgniter HMVC Modules
* @author		Jens Segers
* @link			http://www.jenssegers.be
* @license		MIT License Copyright (c) 2012 Jens Segers
*
* @author      hArpanet
* @link        http://harpanet.com
*              Updated for CI 3.0-dev.
*              Added _set_default_controller() to allow default_controller
*              (specified in config/routes.php) to reside in a module of the same name.
*/

class APP_Router extends CI_Router
{

    /**
     * Current module name
     *
     * @var string
     * @access public
     */
    var $module = '';

	/**
	* Catchall controller
	*
	* @var string
	*/
	public $catch_controller;

	/**
	* Indicator if $catch all controller is used (TRUE) or not (FALSE)
	*
	* @var bool
	*/
	public $catch			= FALSE;


    /**
     * Constructor
     *
     * Runs the route mapping function.
     */
    function __construct()
	{

        $this->config =& load_class('Config', 'core');

		//--> Load routes.php to get some vars
		if ( file_exists(APPPATH.'config/routes.php') ) {
			include(APPPATH.'config/routes.php');
		}
		if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/routes.php')) {
			include(APPPATH.'config/'.ENVIRONMENT.'/routes.php');
		}

		//--> Set Catch Controller
		if (isset($route) && is_array($route))
		{
			if ( isset( $route['catch_controller'] ) ) {
				$this->catch_controller = $route['catch_controller'];
			}
		}

        //--> Process 'modules_locations' from config
        $locations = $this->config->item('modules_locations');

        if (!$locations) {
            $locations = array(APPPATH . 'modules/');
        }
		else if (!is_array($locations)) {
            $locations = array($locations);
        }

        // Make sure all paths are the same format
        foreach ($locations as &$location)
		{
            $location = realpath($location);
            $location = str_replace('\\', '/', $location);
            $location = rtrim($location, '/') . '/';
        }

        $this->config->set_item('modules_locations', $locations);

		parent::__construct();
    }

    /**
     * Validates the supplied segments.  Attempts to determine the path to
     * the controller.
     *
     * @access	private
     * @param	array
     * @return	array
     */
    function _validate_request($segments)
	{
        if (count($segments) == 0) {
            return $segments;
        }

        //--> Locate the controller with modules support
        if ($located = $this->locate($segments)) {
			//print_r($located);
            return $located;
        }

        //--> Is there a 404 override?
        if (!empty($this->routes['404_override'])) {
            $segments = explode('/', $this->routes['404_override']);
            if ($located = $this->locate($segments)) {
                return $located;
            }
        }

        // Nothing else to do at this point but show a 404
        show_404($segments[0]);
    }

    /**
     * Parse Routes
     *
     * This function matches any routes that may exist in
     * the config/routes.php file against the URI to
     * determine if the class/method need to be remapped.
     *
     * NOTE: The first segment must stay the name of the
     * module, otherwise it is impossible to detect
     * the current module in this method.
     *
     * @access	private
     * @return	void
     */
    function _parse_routes()
	{
        //--> Apply the current module's routing config
        $segstart = 1;
        if ($module = $this->uri->segment($segstart))
		{
            foreach ($this->config->item('modules_locations') as $location)
			{
                if (is_file($file = $location . $module . '/config/routes.php'))
				{
                    include ($file);
                    $route = (!isset($route) or !is_array($route)) ? array() : $route;
                    $this->routes = array_merge($this->routes, $route);
                    unset($route);
                }
            }
        }
        //--> Let parent do the heavy routing
        return parent::_parse_routes();
    }

    /**
     * The logic of locating a controller is grouped in this function
     *
     * @param	array
     * @return	array
     */
    function locate($segments)
	{

        list($module, $directory, $controller) = array_pad($segments, 3, NULL);

        foreach ($this->config->item('modules_locations') as $location)
		{
            $relative 	= $location;
            //--> Make path relative to controllers directory
            $start 		= rtrim(realpath(APPPATH), '/');
            $parts 		= explode('/', str_replace('\\', '/', $start));

            //--> Iterate all parts and replace absolute part with relative part
            for ($i = 1; $i <= count($parts); $i++)
			{
                $relative = str_replace(implode('/', $parts) . '/', str_repeat('../', $i), $relative, $count);
				array_pop($parts);
                //--> Stop iteration if found
                if ($count) {
					break;
				}
            }

            //--> Does a module exist? (/modules/xyz/controllers/)
            if (is_dir( $source = $location . $module . '/controllers/') )
			{
                $this->module 		= $module;
                $this->directory 	= $relative . $module . '/controllers/';

                //--> Module root controller?
                if ($directory && is_file($source . ucfirst($directory) . '.php'))
				{
                    $this->class = $directory;
                    return array_slice($segments, 1);
                }

                //--> Module sub-directory?
                if ($directory && is_dir($source . $directory . '/'))
				{
                    $source = $source . $directory . '/';
                    $this->directory .= $directory . '/';

                    //--> Module sub-directory controller?
                    if (is_file($source . ucfirst($directory) . '.php'))
					{
                        return array_slice($segments, 1);
                    }

                    //--> Module sub-directory  default controller?
                    if (is_file($source . ucfirst($this->default_controller) . '.php'))
					{
                        $segments[1] = $this->default_controller;
                        return array_slice($segments, 1);
                    }

                    //--> Module sub-directory sub-controller?
                    if ($controller && is_file($source . ucfirst($controller) . '.php')) {
                        return array_slice($segments, 2);
                    }
                }

                //--> Module controller?
                if (is_file($source . ucfirst($module) . '.php')) {
                    return $segments;
                }

                //--> Module default controller?
                if (is_file($source . ucfirst($this->default_controller) . '.php')) {
                    $segments[0] = $this->default_controller;
                    return $segments;
                }
            }
        }



		//--> No Module found, so we search for a regular controller
		$debug 	= '--- LOCATE -----------------------------------<br>';
		//$debug .= 'Controller: '.$controller.'<br>';
		//$debug .= 'Module: '.$module.'<br>';
		//$debug .= 'Directory: '.$directory.'<br>';
		//$debug .= '----------------------------------------------<br>';
		if( isset($segments[0]))
			$debug .= 'Segement[0]: '. $segments[0] .'<br>';
		if( isset($segments[1]))
			$debug .= 'Segement[1]: '. $segments[1] .'<br>';
		if( isset($segments[2]))
			$debug .= 'Segement[2]: '. $segments[2] .'<br>';
		if( isset($segments[3]))
			$debug .= 'Segement[3]: '. $segments[3] .'<br>';


		//--> Root folder controller?
        if (is_file(APPPATH . 'controllers/' . ucfirst($module) . '.php')) {
            return $segments;
        }

		//--> Root / Pages folder controller?
		$number = count($segments);
		$count	= $number;

		foreach ($segments as $segment) {
			if( $number >= $count )
			{
				$count = $count-1;
				//--> Root / Pages folder controller?
		        if (is_file(APPPATH . 'controllers/'. $this->catch_controller.'/' . ucfirst($segments[$count]) . '.php')) {
					$this->directory 	= $this->catch_controller.'/';
					$segments[0] 		= $segments[$count];
					$debug .= 'Count: '. $count .'<br>';
		            return array_slice($segments, $count);
		        }
			}
		}

        //--> Sub-directory controller?
        if ($directory && is_file(APPPATH . 'controllers/' . $module . '/' . ucfirst($directory) . '.php')) {
            $this->directory = $module . '/';
            return array_slice($segments, 1);
        }

        //--> Default controller?
        if (is_file(APPPATH . 'controllers/' . $module . '/' . ucfirst($this->default_controller) . '.php')) {
            $segments[0] = $this->default_controller;
            return $segments;
        }
    }

    /**
     * Set the module name
     *
     * @param	string
     * @return	void
     */
    function set_module($module) {
        $this->module = $module;
    }

    /**
     * Set default controller
     *
     * First we check in normal APPPATH/controller's location,
     * then in Modules named after the default_controller
     * @author  hArpanet - based on system/core/Router.php
     *
     * @return  void
     */
    protected function _set_default_controller()
    {
        // controller in APPPATH/controllers takes priority over module with same name
        parent::_set_default_controller();

        // see if parent found a controller
        $class = $this->fetch_class();

        if (empty($class)) {

            // no 'normal' controller found,
            // get the class/method from the default_controller route
            if (sscanf($this->default_controller, '%[^/]/%s', $class, $method) !== 2)
            {
                $method = 'index';
            }

            // try to locate default controller in modules
            if ($located = $this->locate(array($class, $class, $method))) {

                log_message('debug', 'No URI present. Default module controller set.');
            }
        }

        // Nothing found - this will trigger 404 later
    }

    // --------------------------------------------------------------------


    /**
     * Fetch the module
     *
     * @access	public
     * @return	string
     */
    function fetch_module() {
        return $this->module;
    }
}
