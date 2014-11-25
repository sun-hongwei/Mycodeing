<?php
    header("Content-Type:text/xml;charset=utf-8");
	header("Cache-Control:no-cache");

    $username=$_POST['username'];

	$info="";

	if($username=="shw"){
	   $info.="<res><mes>用户名已存在，不可用</mes></res>";
	}else{
	   $info.="<res><mes>用户名可用</mes></res>";
	}

    echo $info;
?>