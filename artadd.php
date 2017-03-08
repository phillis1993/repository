<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:09
 */

require ('./lib/func.php');
if(empty($_POST)){
    $sql = 'select * from cat';
    $cats = query($sql);
    require('./view/admin/artadd.html');
}else{
    $art['title'] = trim($_POST['title']);
    $art['cat_id'] = $_POST['cat_id'];
    $art['content'] = $_POST['content'];
    $art['pubtime'] = date("Y-m-d H:i", time());
    echo $art['content'];


    $sql = "insert into art(title,cat_id,content,pubtime) values ('$art[title]','$art[cat_id]','$art[content]','$art[pubtime]')";
    if (!query($sql)){
        mes('栏目插入失败');
    }else{
        $sql = "update cat set num=num+1 where cat_id=$art[cat_id]";
        query($sql);
        mes('栏目插入成功');
    }
}

?>