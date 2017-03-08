<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午11:00
 */
require ('./lib/func.php');

//查询所有栏目名称，显示在页面左侧
$sql = "select cat_id, catname from cat";
$cats = getAll($sql);

if(isset($_GET['cat_id'])){
    //如果有栏目名被选择，只显示属于该栏目的文章
    $sql = "select * from art inner join cat on art.cat_id=cat.cat_id where art.cat_id=$_GET[cat_id]";
}else{
    //否则查询全部栏目并显示
    $sql = "select * from art inner join cat on art.cat_id=cat.cat_id";
}

$arts = getAll($sql);

require ('./view/front/index.html');
?>