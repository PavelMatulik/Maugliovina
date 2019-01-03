<?php
include_once './vendor/autoload.php';

use App\App;
use Tracy\Debugger;

Debugger::enable(Debugger::DEVELOPMENT);
Debugger::detectDebugMode(true);

$app = new App();
$app->run();