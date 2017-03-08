<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:08
 */
require ('./lib/func.php');

$sql = "select cat_id, catname from cat";
$cats = getAll($sql);
$art_id = $_GET['art_id'];
$sql = "select * from art inner join cat on art.cat_id=cat.cat_id where art_id=$art_id";
$art = getRow($sql);
require('./view/front/art.html');
?>