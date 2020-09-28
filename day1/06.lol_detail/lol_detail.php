<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
<?php 
    // 设置中文编码
    header('content-type:text/html;charset=utf-8');
    // 接收数据 超全局变量
    // 获取提交过来的英雄的名字
    $heroName = $_GET['lolHero'];

    // 查询数据=>模拟的假数据中查询
    include './data_lol_detail.php';
    $hero = $heroArr[$heroName];
    
    // 生成页面 解析数据 创建好看的html结构 并返回
    echo '<h2>'.$hero['champion_title'].'--<span>'.$hero['champion_name'].'</span></h2>';
    // 图片
    echo '<img src="'.$hero['champion_icon'].'" alt="">';
    // 个性签名
    echo '<p>'.$hero['champion_info'].'</p>';
    // 位置
    echo '<h3>'.$hero['champion_tags'].'</h3>';
 ?>
</body>
</html>

