<?php
date_default_timezone_set('PRC');
define('IN_CDO',1);
define('ROOT_PATH', dirname(__FILE__).'/');
define('DIAOPHP_FRAMEWORK_CORE_PATH',dirname(__FILE__).'/../diaophp-framework-core/'.DIRECTORY_SEPARATOR);
require_once(DIAOPHP_FRAMEWORK_CORE_PATH."app".DIRECTORY_SEPARATOR."init.php");
app::run();