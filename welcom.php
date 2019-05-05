<html>

<body>
<br>
Welcome
 <?php echo  $_POST["name"]; echo "<br> "; 
echo "hellow wordwrap";
?>
<br>
Your email address is: <?php echo $_POST["email"];?>

</br>
获取发过来的会话

<?php

session_start();
$session = $_SESSION['section'];
echo $session;

?>

</br>

<?php


  if (file_exists("upload/" . $_FILES["userfile"]["name"]))
      {
      echo $_FILES["userfile"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["userfile"]["tmp_name"],
      "upload/" . $_FILES["userfile"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["userfile"]["name"];
      }
    
  


if (isset($_FILES['userfile'])) {
	# code...

	$uploader = 'uploader';
// 上传文件放置的路径
$uploaderfiler = $uploader.basename($_FILES['userfile']['name']);

echo "</br>";
if (move_uploaded_file($_FILES['userfile']['type_name'], uploaderfiler)) {
	# code...上传的文件放到指定的目录
echo "文件上传成功 \n";

}else{

echo "文件上传失败 \n" . $_FILES['userfile']['error']."</br>";


}

print_r($_FILES);


}

  // echo  $_FILE['userfile']['name'];
  // echo  $_FILE['userfile']['size'] ;
  //  echo $_FILE['userfile']['type_name'];
  // echo $_FILE['userfile']['error'];

?>



<!-- <form  enctype = "multipart/form-data" action = "welcom.php" method = "POST">
	<input type = "hidden" name = "MAX_FILE_SIZE" value = "30000"/>
	<input name = "userfile" type = "file"/>
	<input type = "submit" value = "上传文件"/>

</form> -->


<?php    

function test (){

$a=10;
echo "$a" ;
echo "</br>";
$a++;

echo "$a" ;
for ($i=0; $i < 5; $i++) { 
	# code...
	$a++;
	echo $a;
	echo "</br>";
}

}
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
?>


函数中嵌套函数

<?php

function fatherfunction(){

echo "fatherfunction";
function childern(){

echo "childern";


}



}


$phpcssoutput = "外面函数无定义的话内部的函数是不会显示的 ，只有定义外部函数就是father函数才能显示children函数";
echo "<br/><font color=red > $phpcssoutput</font><br/>";


 fatherfunction();

echo "<br/>";
  
  childern();






$phpduoweishuzuoutput = "创建多维数组";
echo "<br/><font color=red > $phpduoweishuzuoutput</font><br/>";

$name[0] = "张三";
$name[4] = "4";
echo "姓名：".$name[0]."今年".$name[4]."岁了";


$cars = array(


array("volvo",100),
array("f3",60)

	);

echo" <br/>";
echo "<br/>-------------------二维数组输出的第一种样式-------------------------<br/>";
print_r($cars);
print_r($cars[0][0]);
echo "<br/>--------------------------------------------<br/>";
$arraymore = array(
	"brother" => array("one","two","three") ,
"sister" => array("lenten","miaomaio","xiaohua"),
"father" => array("lentengan","miaomaiobaba","xiaohuabab")

 );

echo "<br/>------------------二维数组输出的第二种样式--------------------------<br/>";

echo" <br/>";

print_r($arraymore);

echo" <br/>";

print_r($arraymore["father"][0]);


echo "<br/>--------------删除元素------------------------------<br/>";

unset($arraymore["father"][0]);
print_r($arraymore);





echo "<br/>--------------合并数组------------------------------<br/>";


$arrayrust  = array_merge($name,$cars,$arraymore);

print_r($arrayrust);

echo "<br/>-------------- 拆分数组取第二个以后的数据------------------------------<br/>";

$output1 = array_slice($arrayrust,2);
print_r($output1);


echo "<br/>-------------- 拆分数组取第4个以后并且倒数第二个以前的数据------------------------------<br/>";


$output2 = array_slice($arrayrust, 4, -2);
print_r($output2);


echo "<br/>-------------- 浏览器信息 ------------------------------<br/>";

echo $_SERVER['HTTP_USER_AGENT'];

echo "<br/>-------------- 浏览器语言 ------------------------------<br/>";

echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];


?>

<?php

// echo "<br/>-------------- 数据库连接 ------------------------------<br/>";
// $user = 'jingjing';
// $password = '12345678';
// $db = 'inventory';
// $host = '127.0.0.1';
// $port = 3306;
// $socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link, 
//    $host,
//    $user, 
//    $password, 
//    $db,
//    $port,
//    $socket
// );


// echo mysql_error();
 echo"php 链接数据路出错,待解决\n";

echo"面向对象\n";


class People{

public $name = '静静';
public $age = '18';


}

$PeopleOne = new People();
$PeopleTwo = new People();


print_r($PeopleOne) ;
print_r($PeopleTwo);
$PeopleOne->name ="小静静";
$PeopleOne->age = '10';

print_r($PeopleOne);

echo "<script> 

var count = 0 ;
count++;

 
</script>";



?>




</body>
</html>





















