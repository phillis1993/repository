<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:09
 */

require ('./lib/func.php');

//删除文章
$art_id = $_GET['art_id'];
$sql = "delete from art where art_id=$art_id";
if(!query($sql)) {
    mes('删除失败');
} else {

    //如果文章删除成功，其所属栏目下的文章数减一
    $sql = "update cat set num=num-1 where cat_id=(select cat_id from art where art_id = $art_id)";
    query($sql);
    mes('删除成功');
}

?>