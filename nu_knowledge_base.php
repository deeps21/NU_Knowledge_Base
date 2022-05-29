<?php
/**
*NU Knowledge Base
 */
/**
*Team Members
*Deepak
*Soham Pal
*Yash Nehra
*Drishti
 */



define('NU_KNOWLEDGE_BASE', '1.0');
define('NU_KNOWLEDGE_BASE_OPTION_PREFIX', 'mkb_option_');
define('NU_KNOWLEDGE_BASE_URL', plugin_dir_url( __FILE__ ));
define('NU_KNOWLEDGE_BASE_IMG_URL', NU_KNOWLEDGE_BASE . 'assets/img/');
define('NU_KNOWLEDGE_BASE_DIR', plugin_dir_path(__FILE__));
define('NU_KNOWLEDGE_BASE', get_template_directory());

// init app
require_once(NU_KNOWLEDGE_BASE . 'lib/app.php');

global $nu_kb;
$nu_kb = new NU_KNOWLEDGE_BASE_App();
