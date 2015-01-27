<?php
/**
 * @version    1.1
 * @author     Sibren Talens  <sibrentalens@gmail.com>
 * @copyright  2014-2015      Sibren Talens
 * @license    Apache license http://sibrentalens.com/license
 */
class Config{
	/**
	 * Get a value from the config array
	 * @param  string       $key Search in array, seperated by a '/'
	 * @return array|string       The result
	 */
	public static function get($key = null){
		$config = $GLOBALS['config'];
		if($key){
			$key = explode('/', $key);

			foreach($key as $bit)
				if(isset($config[$bit])) $config = $config[$bit];
		}
		return $config;
	}
}
