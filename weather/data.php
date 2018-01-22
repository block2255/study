<?php
$url = "http://www.weather.com.cn/adat/sk/101010100.html";

$cont = file_get_contents($url);

echo $cont;