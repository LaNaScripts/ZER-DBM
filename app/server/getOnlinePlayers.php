<?php
header('Access-Control-Allow-Origin: *');
/**
 * Created by PhpStorm.
 * User: jwindmolders
 * Date: 9/12/2014
 * Time: 11:06
 */
error_reporting(0);
ini_set('display_errors',0);

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$password = request -> secret;
$instance = request -> instance;
$db = request -> db;

require 'Predis/Autoloader.php';

require 'config.php';


if ( md5($myRedisPass) == $password ) {

Predis\Autoloader::register();

$client = new Predis\Client([
    'host'   => '127.0.0.1',
    'password' => "npgforever1991",
	'port' => 6379,
	'database' => 1
]);
Predis\Autoloader::register();

// tcp client
$client = new Predis\Client([
    'host'   => '127.0.0.1',
    'port'   => 6379,

]);

$onlinePlayers = $client-> get('PLAYERS:'.$instance.'');

echo $onlinePlayers;
}else{
echo "[Wrong pass]";
}