<?php

namespace App\Providers;

use Muna\Framework\Support\ServiceProvider;
use Muna\Framework\Routing\Route;

class RouteServiceProvider extends ServiceProvider {
    
    public function boot() {
        require_once dirname(__DIR__,2) . '/routes/web.php';
    }
}
