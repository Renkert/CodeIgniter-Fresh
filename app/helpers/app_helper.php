<?php defined('BASEPATH') || exit('No direct script access allowed');

//--- EASY INSTANCE ------------------------------------------------------------
if (!function_exists('ci')) {

	function &ci($class=null, &$object=null)
	{
		$CI = get_instance();
		if ($class && $object == null) {
			$class = strtolower($class);
			if ( isset($CI->$class) ) {
				return $CI->$class;
			}
			else {
				$CI->load->library($class);
				return $CI->$class;
			}
		}
		elseif ($class && $object) {
			$CI->$class = &$object;
		}
		return $CI;
	}
}

//--- ASSET URL ----------------------------------------------------------------
if (!function_exists('asset_url')) {

   function asset_url( $what = '' ) {
	   return base_url('assets/'.$what);
   }
}
