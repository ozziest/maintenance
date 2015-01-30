<?php namespace Ozziest\Maintenance;

class Maintenance {

    /**
     * Application maintenance mode is checking
     *
     * @param  string       $message        [optional]
     * @return null
     */
    public static function check($path, $message = 'Be right back!')
    {
        if (file_exists(getcwd().'/'.$path.'/down')) {
            die($message);
        }
    }

}
