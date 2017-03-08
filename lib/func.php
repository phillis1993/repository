<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午8:15
 */

header('Content-type:text/html;charset=utf8');
define('ROOT' , dirname(__DIR__));

//
function mes($res){
    require('./view/admin/mes.html');
}

//连接数据库
function connect(){
    $con = mysqli_connect('localhost','root','123','blog');
    return $con;
}

//sql执行
function query($sql)
{
    $con = connect();
    $res = $con->query($sql);
    if (!$res) {
        mes('123');
    //    exit();
    }
    return $res;
}

//获取查询结果（一条）
function getOne($sql) {
    $res = query($sql);
    if(!$res) {
        return false;
    }
    return mysqli_fetch_assoc($res);    //从结果集中取得一行作为关联数组
}

//获取查询结果（多条）
function getAll($sql){
    $res = query($sql);
    if (!$res){
        mes('');
    }
    $arr = array();
    while ($row = mysqli_fetch_array($res)){    //mysqli_fetch_array从结果集中取得一行作为关联数组，或数字数组，或二者兼有。
        $arr[] = $row;
    }
    return $arr;
}



