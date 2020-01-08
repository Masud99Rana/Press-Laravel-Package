<?php
namespace masud\Press;

class Press
{
    public static function configNotPublished(){
    	return is_null(config('press'));
    }

    public static function driver(){
    	$driver = ucwords(config('press.driver')); // file to File

    	$class = 'masud\Press\Drivers\\'. $driver . 'Driver'; // masud\Press\Driver\FileDriver

    	return new $class;
    }
}