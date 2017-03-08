<?php
require ('./lib/func.php');

//查询全部文章并显示
$sql = "select art_id,title,pubtime,catname,art.cat_id from art left join cat on art.cat_id=cat.cat_id";
$arts = getAll($sql);

include(ROOT . '/view/admin/artlist.html');

?>