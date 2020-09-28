<?php 
    // echo '123';
    // 设置中文编码
    header('content-type:text/html;charset=utf-8');

    // 接收提交过来的数据
    // get
    // php中 为我们提供了一些 超全局变量
    // 跟 js中 window对象类似 不需要定义直接就可以使用
    // 是有值的
    echo $_GET;
    echo '<br>';
    print_r($_GET);
    // post 
 ?>