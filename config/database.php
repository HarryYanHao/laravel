<?php

return [

	/*
	|--------------------------------------------------------------------------
	| PDO Fetch Style
	|--------------------------------------------------------------------------
	|
	| By default, database results will be returned as instances of the PHP
	| stdClass object; however, you may desire to retrieve records in an
	| array format for simplicity. Here you can tweak the fetch style.
	|
	*/

	'fetch' => PDO::FETCH_CLASS,

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| to use as your default connection for all database work. Of course
	| you may use many connections at once using the Database library.
	|
	*/

	'default' => 'mysql',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

    'connections' => [
        'gmf_bms'  		=> [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_BMS', 'gmf_bms'),
            'username'  => env('DB_USERNAME_BMS', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_BMS', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'app_fund' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_APP_FUND', 'app_fund'),
            'username'  => env('DB_USERNAME_APP_FUND', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_APP_FUND', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'oms' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_OMS_V2', 'oms_v2'),
            'username'  => env('DB_USERNAME_OMS_V2', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_OMS_V2', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'oms_sync' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '127.0.0.1'),
            'database'  => env('DB_DATABASE_OMS_SYNC', 'oms_sync'),
            'username'  => env('DB_USERNAME_OMS_SYNC', 'root'),
            'password'  => env('DB_PASSWORD_OMS_SYNC', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            'unix_socket'=>'/tmp/mysql.sock',
        ],
        'platform' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_PLATFORM', 'platform'),
            'username'  => env('DB_USERNAME_PLATFORM', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_PLATFORM', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'cash_flow' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_CASH_FLOW', 'cash_flow'),
            'username'  => env('DB_USERNAME_CASH_FLOW', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_CASH_FLOW', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'market_quote' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_QUOTE', 'market_quote'),
            'username'  => env('DB_USERNAME_QUOTE', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_QUOTE', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'bounty'  		=> [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_PLATFORM', 'platform'),
            'username'  => env('DB_USERNAME_PLATFORM', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_PLATFORM', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'gmf_defend' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_QUOTE', 'gmf_defend'),
            'username'  => env('DB_USERNAME_QUOTE', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_QUOTE', '123456'),

            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'statistic' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_STAT', 'statistic'),
            'username'  => env('DB_USERNAME_STAT', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_STAT', '123456'),

            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'sns'  		=> [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '192.168.0.37'),
            'database'  => env('DB_DATABASE_PLATFORM', 'gmf_sns'),
            'username'  => env('DB_USERNAME_PLATFORM', 'dev_gmf'),
            'password'  => env('DB_PASSWORD_PLATFORM', '123456'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],

	/*
	|--------------------------------------------------------------------------
	| Migration Repository Table
	|--------------------------------------------------------------------------
	|
	| This table keeps track of all the migrations that have already run for
	| your application. Using this information, we can determine which of
	| the migrations on disk haven't actually been run in the database.
	|
	*/

	'migrations' => 'migrations',

	/*
	|--------------------------------------------------------------------------
	| Redis Databases
	|--------------------------------------------------------------------------
	|
	| Redis is an open source, fast, and advanced key-value store that also
	| provides a richer set of commands than a typical key-value systems
	| such as APC or Memcached. Laravel makes it easy to dig right in.
	|
	*/

	'redis' => [

		'cluster' => false,

		'default' => [
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
            'read_write_timeout' => 0
		],

	],

];
