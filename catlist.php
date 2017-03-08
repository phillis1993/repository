<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午11:20
 */
require ('./lib/func.php');

//从数据库查询全部栏目信息并显示
$sql = "select * from cat";
$cats = query($sql);
require('./view/admin/catlist.html');

?>