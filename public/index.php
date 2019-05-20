<?php

/**
 * Routing
 */

define ('URL','http://localhost:8888/Portfolio_Galdric/public/');

// Get 'q' param
$q = empty($_GET['q']) ? '' : $_GET['q'];

// Define controller
$controller = '404';

if ($q == 'about')
    $controller = 'about-me';

elseif ($q == '')
    $controller = 'home';

if ($q == 'school-career' || $q == 'parcours')
    $controller = 'school';

elseif ($q == 'watch')
    $controller = 'watch';


// Include controller
include '../controllers/'.$controller.'.php';