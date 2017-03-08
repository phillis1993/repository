<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 下午12:10
 */

require ('./lib/func.php');
if(empty($_POST)) {
    $art_id = $_GET['art_id'];
    $sql ="select art_id,title,content,pubtime,catname from art inner join cat on art.cat_id=cat.cat_id where art_id = $art_id";
//    echo $sql;
    $art = getRow($sql);
    require('./view/admin/artedit.html');
} else {

    $art_id = $_POST['art_id'];
    $art['title'] = trim($_POST['title']);
    $art['content'] = trim($_POST['content']);
    $art['pubtime'] = time();
    echo $art_id;
    $sql = "update art set title='$art[title]',content='$art[content]',pubtime='$art[pubtime]' where art_id=$art_id";
    echo $sql;
    if (!query($sql)){
        mes('文章修改失败');
    }else{
        query($sql);
        mes('文章修改成功');
    }
}
?>