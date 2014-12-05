<?php namespace Ozziest\Maintenance;

class Maintenance {

	/**
	 * Application maintenance mode is checking
	 *
	 * @return null
	 */
	public static function check($path)
	{
		if (file_exists(getcwd().'/'.$path.'/down')) {
			die('Be right back!');
		}
	}

}
