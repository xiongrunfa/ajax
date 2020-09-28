<?php
  // 设置中文编码
  header('content-type:text/html;charset=utf-8');

 // 关系型数组
 $person = array('name'=>'吴京','film'=>'战狼','wife'=>'谢楠');

 // 获取 内容
 echo $person['wife'];

 // 完整输出数组
 print_r($person);

 echo '<br>';

 // 遍历
 // $key 循环的键
 // $value 循环的值
 foreach ($person as $key => $value) {
   // 打印内容
   echo $key.'-----'.$value.'<br>';
 }

?>