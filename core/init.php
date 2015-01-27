<?php
spl_autoload_register(function($class){
	require_once 'core/class/'.$class.'.php';
});

// Include the config file
include 'config.php';

// Initialize the database
Database::init(
	Config::get('mysql/dbname'),
	Config::get('mysql/username'),
	Config::get('mysql/password'),
	Config::get('mysql/host'),
	Config::get('mysql/options')
);
