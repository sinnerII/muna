<?php

return [

    'name' => 'Muna Application',
    'version' => '1.0.3',
	'database' => [
		'driver' => 'mysql'
	],

	'providers' => [
		\App\Providers\AppServiceProvider::class,
		\App\Providers\AuthServiceProvider::class,
		\App\Providers\RouteServiceProvider::class,
	],

	'params' => [
		'id' => '\d+',
		'uid' => '\d+',
		'slug' => '[a-z]+',
	],

];
