<?php
 /**
   * spl_autoload_register
   * class autoload
   * @author yoonho na
   */
    spl_autoload_register(function($className) {
	$dir1 = '/home/hosting_users/cusr_neodev/www/lib/';
    $dirs = array(
        $dir1,
    );

    foreach($dirs as $dir) {
		$className = str_replace('\\', '/', $className);
		//echo $dir. $className . '.php'.'<br/>';

        if(file_exists( '' . $dir. $className . '.php')) {
            require_once('' . $dir. $className . '.php');
            return;
        }

    }
    throw new Exception('Can not load class : ' . $className);
});
?>