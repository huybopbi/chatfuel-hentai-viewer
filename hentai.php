<?php

// >_ gingdev: https://m.me/gingdev

require('vendor/autoload.php');

$curl = new Curl\Curl();
$curl->setUserAgent('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1');


$curl->get('http://gingcs.7m.pl/hentai/');

$result = json_decode($curl->response, true);

$curl->close();

$chatfuel = new Chatfuel\Chatfuel(TRUE);

$chatfuel->sendImage($result[rand(0, 19)]);