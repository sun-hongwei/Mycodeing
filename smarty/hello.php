<?php 
require_once './libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
//$smarty->assign("title","我的标题");
$smarty->assign("content","我的内容");
$smarty->display("hello.tel");
?>