<?php
  // 设置中文编码
  header('content-type:text/html;charset=utf-8');

  // 选择语句
  $day = '礼拜八';

  // 选择语句
  switch($day){
    case '礼拜一':
    case '礼拜二':
    case '礼拜三':
    case '礼拜四':
    case '礼拜五':
    echo '上班';
    break;
    case '礼拜六':
    echo '加班';
    break;
    case '礼拜天':
    echo '继续加班';
    break;
    default:
    echo '终于可以休息了';
    break;
  }

  // 循环语句
  // for
  // for(var i =0;i<10;i++){}

  for($i=0;$i<10;$i++){
    echo '<br>';
    // php中拼接字符串 用 .
    echo '感觉自己萌萌哒'.$i;
  }

  // while
  $num = 0;
  while($num<=998){
    echo '哈哈哈哈哈'.$num;
    echo '<br>';
    $num++;
  }
  // 如果为false 一次都不执行
  while(false){
    echo '人呢?';
  }
  // do while 最起码执行一次 哪怕是false
  do {
   echo '进来了吗?';
  } while (false);
?>