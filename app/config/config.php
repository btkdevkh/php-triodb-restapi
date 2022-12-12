<?php

// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

define('DB_HOST', 'localhost');
define('DB_NAME', 'triosound');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456789');

define('URLROOT', 'http://localhost/PHP-DEVS/php-triodb-restapi');
define('URL_MUSIC', '/public/uploads_musics/musics/');
define('URL_MUSICCOVER', '/public/uploads_musics/covers/');

define('URL_SUB', '/public/uploads_movies/movies/');
define('URL_MOVIE', '/public/uploads_movies/movies/');
define('URL_MOVIECOVER', '/public/uploads_movies/covers/');
