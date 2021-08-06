<?php

namespace Abovesky\LaravelYar\Controllers;

use Illuminate\Routing\Controller;
use Yar_Server;

class YarController extends Controller
{
    public function load($module)
    {
        $serviceName = "App\\Services\\$module";
        $server = new $serviceName();
        $service = new Yar_Server($server);
        $service->handle();
    }
}
