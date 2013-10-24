<?php
//
// PHASE: BOOTSTRAP
//
define('ZLATAN_INSTALL_PATH', dirname(__FILE__));
define('ZLATAN_SITE_PATH', ZLATAN_INSTALL_PATH . '/site');

require(ZLATAN_INSTALL_PATH.'/src/CZlatan/bootstrap.php');

$zl = CZlatan::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$zl->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$zl->ThemeEngineRender();
