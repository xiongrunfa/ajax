<?php
  // 接收提交的文件
  // 超全局变量 用来接收提交的文件
  print_r($_FILES);

  /*
    这是 打印出来的 $_FILES的值
    Array ( 
      [icon] => Array ( 
          [name] => 1405937554667.png  上传的文件名
          [type] => image/png 类型
          [tmp_name] => C:\Users\51772\AppData\Local\Temp\php52F7.tmp 路径 临时
          [error] => 0 错误编码
          [size] => 13949  大小
          ) 
        )
  */

  // php 代码执行完毕之后 临时文件就被销毁了

  // 如果想要看到那个临时文件 可以 让php代码 执行的 稍微 慢一些  休息一会
  // sleep 的目的只是为了 让大家看到临时文件
  // sleep(5);

  // 移动上传的文件 在 w3cschool的 文件分类中
  // move_uploaded_file(file,newloc)
  // 参数1 移动的文件
  // 参数2 移动到哪里去
  move_uploaded_file($_FILES['icon']['tmp_name'],'./files/'.$_FILES['icon']['name']);
?>
<!--
    如果要严谨一些 还需要添加一些判断
      判断文件类型
      判断文件是否存在
      判断文件的大小
      ...
  -->