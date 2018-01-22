<?php
//php操作memcache
//① 实例化一个对象
$mem = new Memcache();

//② 连接memcache服务
//$mem -> connect('主机名','端口');
$z = $mem -> connect('localhost',11211);

//③ 有效期设置
$mem -> set('city1','beijing',0,0);  //有效期近30天
$mem -> set('city2','tianjin',0,20);  //1970-1-31号过期
$mem -> set('city3','shanghai',0,time()+20); //1970-1-31号过期


