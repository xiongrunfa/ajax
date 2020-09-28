<?php
  // 设置中文编码
  header('content-type:text/html;charset=utf-8');

  // 定义数组 -- 索引数组
  $foodArr = array('榴莲','西兰花','鸡蛋','西兰花炒蛋');

  // 获取数组的元素
  // 下标从0开始
  echo $foodArr[3];

  echo '<br>';

  // 直接打印 数组的 所有内容
  // echo $foodArr;
  // 直接输出复杂类型
  print_r($foodArr);

  echo '<br>';
  // 获取数组的长度
  // 参数1 需要获取长度的数组
  echo count($foodArr);

  // 遍历 没有.length的语法
  // 获取数组的长度
  for($i=0;$i<count($foodArr);$i++){
      echo '<br>';
      echo $foodArr[$i];
  }

?>