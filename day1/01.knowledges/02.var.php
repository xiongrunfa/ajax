<?php
  // 设置编码格式
  header('content-type:text/html;charset=utf-8');

  // 定义变量 var name = 'jack';
  // 字符串
  $name = '吴京';

  echo $name;

  // 输出换行
  echo '<br>';
  
  // 数组
  $num = 123;
  echo $num;

    // 输出换行
  echo '<br>';

  // 小数
  $pi = 3.141592653;
  echo $pi;

  // 输出换行
  echo '<br>';
  // bool
  $male = false;

  // 逻辑语句
  if($male == false){
    echo '萌妹子';
  }else{
    echo '糙汉子';
  }
?>