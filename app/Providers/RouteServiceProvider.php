<?php

namespace App\Providers;

use Munastack\Support\Providers\ServiceProvider;
use Munastack\Support\Facades\Facade;

use Munastack\Routing\Router;
use Munastack\Http\Request;
use Munastack\Http\Response;

class RouteServiceProvider extends ServiceProvider {

	public function register(): void
	{
		Facade::setFacadeApplication($this->app);

		$request = $this->app->container->set('request',new Request());
		$response = $this->app->container->set('response',new Response());
		$router = $this->app->container->set('router',Router::create($request,$response));

	}
    
    public function boot(): void
	{
        require_once dirname(__DIR__,2) . '/routes/web.php';
    }
}
