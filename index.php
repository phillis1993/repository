<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午11:00
 */
require ('./lib/func.php');

$sql = "select cat_id, catname from cat";
$cats = getAll($sql);

if(isset($_GET['cat_id'])){
    $sql = "select * from art inner join cat on art.cat_id=cat.cat_id where art.cat_id=$_GET[cat_id]";
}else{
    $sql = "select * from art inner join cat on art.cat_id=cat.cat_id";
}

$arts = getAll($sql);

require ('./view/front/index.html');
?>