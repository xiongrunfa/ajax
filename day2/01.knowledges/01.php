<?php
  // 准备一些数据
  $heroArr =array(
    array(
    "champion_icon"=> "images/1498811286269.jpg",
    "champion_name"=>"凯隐",
    ),
    array(
    "champion_icon"=> "images/1493291013439.jpg",
    "champion_name"=>"洛",
    ),
    array(
    "champion_icon"=> "images/1493298541562.jpg",
    "champion_name"=>"霞",
    ),
    array(
    "champion_icon"=> "images/1480473717181.png",
    "champion_name"=>"卡蜜尔",
    ),
    array(
    "champion_icon"=> "images/1474437997425.png",
    "champion_name"=>"艾翁",
    ),
    array(
    "champion_icon"=> "images/1469511859510.png",
    "champion_name"=>"克烈",
    ),
    array(
    "champion_icon"=> "images/1462418224471.jpg",
    "champion_name"=>"塔莉垭",
    ),
    array(
    "champion_icon"=> "images/173891429886.png",
    "champion_name"=>"索尔",
    ),
    array(
    "champion_icon"=> "images/1456128461876.png",
    "champion_name"=>"烬",
    ),
    array(
    "champion_icon"=> "images/1447226977586.png",
    "champion_name"=>"俄洛伊",
    )
  );

 
?>
<!--  for循环的半边  -->
<?php for ($i=0; $i < count($heroArr); $i++) {  ?>
    <h1> <?php echo $heroArr[$i]['champion_name']; ?> ---- 感觉自己萌萌哒的 ^_^</h1>
    <img src="" alt="">
    <a href="#">萌你奶奶个腿</a>
<?php } ?>

