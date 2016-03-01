<?php
$url_param = $_SERVER['REQUEST_URI'];
$url_param = preg_replace("/(.php)/","",$url_param);
$url_param = explode("/",$url_param);
array_shift($url_param);

if($url_param[0] == 'tcc-dev')
{
    $url_param[0] = null;
    array_shift($url_param);
}
?>