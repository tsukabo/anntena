<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'hoge',
		'encoding' => 'utf8',
	);

	public $development = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'hayasaki',
		'password' => 'tsukasa',
		'database' => 'hayasaki',
		'encoding' => 'utf8',
	);

	public $staging = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'anntena',
		'encoding' => 'utf8',
	);

	public $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'anntena',
		'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'root',
		'database' => 'anntena',
		'encoding' => 'utf8',
	);

    /**
     * constructor
     *
     * @access public
     * @return void
     */
    public function __construct() {
        switch (env('CAKE_ENV_MODE')) {
            case 'development':
                $this->default = $this->development;
                break;
            case 'staging':
                $this->default = $this->staging;
                break;
            case 'production':
            default:
                $this->default = $this->production;
                break;
        }
    }
}
