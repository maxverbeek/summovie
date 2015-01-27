<?php
require_once 'core/init.php';

header('Content-type: text/JSON');

if(isset($_GET['q'])):
	$query = $_GET['q'];
	$movies = Database::inst()->get('movies', 'name = '.$query)->result();
	echo json_encode($movies);
endif;
