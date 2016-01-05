<?php

use Helpers\Hooks;

Hooks::addHook('routes', 'Modules\Importer\Controllers\Index@routes');