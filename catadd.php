<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午11:30
 */
require ('./lib/func.php');

if (empty($_POST)){
    require('./view/admin/catadd.html');
}else{

    //获取栏目名并插入数据库
    $catname = trim($_POST['catname']);
    $sql = "insert into cat(catname) values ('$catname')";
    if (!query($sql)){
        mes('栏目插入失败');
    }else{
        mes('栏目插入成功');
    }
}

?>