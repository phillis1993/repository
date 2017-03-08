<?php
/**
 * Created by PhpStorm.
 * User: phillis
 * Date: 17-3-5
 * Time: 上午8:15
 */

header('Content-type:text/html;charset=utf8');
define('ROOT' , dirname(__DIR__));

function mes($res){
    require(ROOT . '/view/admin/mes.html');
}

function connect(){
    $con = mysqli_connect('localhost','root','123','blog');
    return $con;
}

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

function getAll($sql){
    $res = query($sql);
    if (!$res){
        mes('');
    }
    $arr = array();
    while ($row = mysqli_fetch_array($res)){
        $arr[] = $row;
    }
    return $arr;
}


function getRow($sql) {
    $res = query($sql);
    if(!$res) {
        return false;
    }
    return mysqli_fetch_assoc($res);
}

