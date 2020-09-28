<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <title>title</title>
  <style>
    body {
      background-color: hotpink;
    }
  </style>
</head>

<body>
  <!-- <h2>我是一个很好看的页面</h2> -->
  <!-- 使用 php来生成页面   -->
  <!-- 引入 其他的 php页面  -->
  <!--
      生成页面的步骤
        1.商业的网站的数据 是保存在?=>服务器的数据库中
          这里使用了一个 数组 作为模拟 =>假数据
        2.用户访问这个页面时
          读取数据
        3.生成对应的html代码 =>让页面好看一些
    -->

  <?php
    // 1.引入其他的php页面
    include 'data_fruit_list.php';

    // 2.读取数据
    echo '<ul>';
    for($i=0;$i<count($arr);$i++){
      // 3.生成对应的html结构
      echo '<li>';
      echo '<a href="'.$arr[$i]['href'].'">点我看'.$arr[$i]['name'].'</a>';
      echo '<img src="'.$arr[$i]['path'].'" alt="">';
      echo '<span>'.$arr[$i]['name'].'</span>';
      echo '</li>';
    }
    echo '</ul>';
     
  ?>
  
</body>

</html>