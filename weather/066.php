<?php

//php操作memcache

//① 实例化一个对象
$mem = new Memcache();

//② 连接memcache服务
//$mem -> connect('主机名','端口');
$z = $mem -> connect('localhost:8088',11211);

//③ 有效期设置
var_dump($mem -> get('city1'));echo "<br />";
var_dump($mem -> get('city2'));echo "<br />";
var_dump($mem -> get('city3'));echo "<br />";


