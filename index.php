<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
/*
$dirname			=	dirname($_SERVER['SCRIPT_NAME']);
$basename			=	basename($_SERVER['SCRIPT_NAME']);
$request_uri		=	str_replace([$dirname, $basename], null, $_SERVER['REQUEST_URI']);
echo($request_uri);
*/

/*
$url			=	'/uye/tayfunerbilen';
echo preg_match('@^/uye/([0-9a-zA-Z]+)@', $url, $parameters);

print_r($parameters);
*/
require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';

Route::run('/', function(){
	echo 'merhaba dünya!';
});

/*Route::run('/uye/{url}', function($name){
	echo 'Hoşgeldin ' . $name;
});*/

Route::run('/uyeler', 'uyeler@index');
Route::run('/uyeler', 'uyeler@post', 'post');
Route::run('/uye/{url}', 'uye@index');
Route::run('/profil/sifre-degistir', 'profile/changepassword@index');