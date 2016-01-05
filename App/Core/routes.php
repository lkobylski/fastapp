<?php
/**
 * Routes
 */


use Core\Router;
use Helpers\Hooks;

Router::any('', 'Controllers\Index@index');
//Router::any('importer', 'Modules\Importer\Controllers\Index@index');
//Router::any('importer/prize', 'Modules\Importer\Controllers\Index@prize');

$hooks = Hooks::get();
$hooks->run('routes');

Router::$fallback = false;

Router::dispatch();