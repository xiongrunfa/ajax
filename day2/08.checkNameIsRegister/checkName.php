<?php 
  //  接收提交的数据 $_GET
  $name = $_GET['name'];

  //   假数据模拟 =>数组
  $nameArr = array('jack','rose','icemountain','Robot');
  //   判断是否在数组中存在
  // 参数1 查询的内容
  // 参数2 去哪个数组查询
  $result = in_array($name,$nameArr);

  //   返回不同的内容给用户即可
  if($result == true){
      echo '很遗憾,已被注册,再选一个吧.o(╯□╰)o';
  }else{
      echo '恭喜你,还没人用呢!!快点注册哦 O(∩_∩)O哈哈~';
  } 
  //     恭喜你可以用
  //     很遗憾用不了
  sleep(2);
 ?>