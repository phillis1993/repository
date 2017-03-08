<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:05
 */
require ('./lib/func.php');
if(empty($_POST)){
    $cat_id = $_GET['cat_id'];
    $sql = "select catname from cat where cat_id=$cat_id";
    $cat = getRow($sql);
    require('./view/admin/catedit.html');
} else {

    $cat_id = $_POST['cat_id'];
    $sql = "update cat set catname='$_POST[catname]' where cat_id=$cat_id";
    if(!query($sql)){
        mes('栏目修改失败');
    } else {
        mes('栏目修改成功');
    }
}


?>