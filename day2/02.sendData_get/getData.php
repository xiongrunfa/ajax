<?php 

  // 设置中文编码
  header('content-type:text/html;charset=utf-8');

  // 直接返回
  print_r($_GET);

  // 拼接一些 html结构

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
  <h2>没想到呀,你竟然喜欢吃---<?php echo $_GET['food']; ?></h2>
  <h3>而且用 <?php echo $_GET['doType']; ?> 种方法来吃</h3>
</body>
</html>