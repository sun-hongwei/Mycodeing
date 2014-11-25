<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>用户注册</title>
<script src="my.js" type="text/javascript"></script>

<script  type="text/javascript">
   
   var myXmlHttpRequest;

   function checkName(){
	  
     myXmlHttpRequest=getXmlHttpObject();

	 if(myXmlHttpRequest){

	   var url="jieshou.php";

	   var data="username="+$('username').value;

	   myXmlHttpRequest.open("post",url,true);

	   myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
       
	   myXmlHttpRequest.onreadystatechange=function chuli(){
		//接收数据json 
			if(myXmlHttpRequest.readyState==4){

			  if(myXmlHttpRequest.status==200){

				  var mes=myXmlHttpRequest.responseXML.getElementsByTagName("mes");

				  var mes_val=mes[0].childNodes[0].nodeValue;

				  $('myres').value = mes_val;
				 
			}
		
		}
	   
	   }
	                myXmlHttpRequest.send(data);
	 }	          
  }
</script>
</head>
<body>
<form action="" method="post">
<table>
用户名:<input type="text" name="username" id="username">
<input type="button" value="验证" onclick="checkName();">
<input style="border-width:0;color:red" type="text" id="myres"></br>
密码:</td><td><input type="password" name="password"></br>
<input type="submit" value="注册">
</table>
</form>
</body>
</html>