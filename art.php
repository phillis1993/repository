<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:08
 */
require ('./lib/func.php');

//查询所有栏目名称，显示在页面左侧
$sql = "select cat_id, catname from cat";
$cats = getAll($sql);

//查询文章并显示
$art_id = $_GET['art_id'];
$sql = "select * from art inner join cat on art.cat_id=cat.cat_id where art_id=$art_id";
$art = getOne($sql);
require('./view/front/art.html');
?>