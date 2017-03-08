<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午11:42
 */

require ('./lib/func.php');
$cat_id = $_GET['cat_id'];

//查询栏目是否为空
$sql = "select count(*) from art where cat_id=$cat_id";
$res = query($sql);
if(mysqli_fetch_row($rs)[0] != 0) {
    mes('栏目下有文章,不能删除');
    exit();
}

//从数据库删除栏目
$sql = "delete from cat where cat_id=$cat_id";
if(!query($sql)) {
    mes('栏目删除失败');
} else {
    mes('栏目删除成功');
}

?>