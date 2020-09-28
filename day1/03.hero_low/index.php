<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <style>
      img{
        width: 240px;
        height: 240px;
      }
    </style>
</head>
<body>
  <!--
      1. 读取数据库数据==>假数据模拟 include

      2. 解析数据

      3. 生成html代码 让数据 好看一些

    -->
    <?php
        // 1.引入
        include './data_lol_list.php';
        /*
          粘贴过来的数据结构--从 data_lol_list.php中粘贴出来的
            $heroArr =array(
            array(
            "champion_icon"=> "images/1498811286269.jpg",
            "champion_name"=>"凯隐",
            ),
        */
        // 2.解析
        echo '<ul>';
        for ($i=0; $i < count($heroArr); $i++) {
          echo '<li>';
          echo '<img src="'.$heroArr[$i]['champion_icon'].'" alt="">';
          echo '<a href="#">'.$heroArr[$i]['champion_name'].'</a>';
          echo '</li>';
        }
        echo '</ul>';
    ?>
</body>
</html>