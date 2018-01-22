<?php

//多级命名空间
namespace beijing\haidian\xisanqi;
const USER = "root";

namespace liaoning\shenyang\tiexi;
const USER = "admin";

//访问当前空间元素
//echo USER; //admin

//访问其他空间元素
echo \beijing\haidian\xisanqi\USER;//root
