<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:10
 */

require ('./lib/func.php');


if(empty($_POST)) {

    //提交为空，显示待修改文章和对应的栏目
    $art_id = $_GET['art_id'];
    $sql ="select art_id,title,content,pubtime,catname from art inner join cat on art.cat_id=cat.cat_id where art_id = $art_id";
//    echo $sql;
    $art = getOne($sql);
    require('./view/admin/artedit.html');
} else {

    //提交修改（不能修改所属栏目）
    $art_id = $_POST['art_id'];
    $art['title'] = trim($_POST['title']);
    $art['content'] = trim($_POST['content']);
    $art['pubtime'] = time();
    //echo $art_id;
    $sql = "update art set title='$art[title]',content='$art[content]',pubtime='$art[pubtime]' where art_id=$art_id";
   // echo $sql;
    if (!query($sql)){
        mes('文章修改失败');
    }else{
        query($sql);
        mes('文章修改成功');
    }
}
?>