<html>

<body>
<br>

 <?php

$dbhost = 'localhost:8889';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT name,age,sex FROM peopletable';
mysqli_select_db( $conn, 'firstdatabase' );
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));

   // print_r(mysqli_error($conn));
}
echo '<h2>php连接数据库测试<h2>';
echo '<table border="1">';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
$sex =  $row['sex'];
if ($sex == 1) {
  # code...
  $sex = '男';
}else{

 $sex = '女';

}

    echo "<tr><td> 姓名:{$row['name']}</td> ".
         "<td> 年龄: {$row['age']} </td> ".
         "<td> 性别:$sex </td> ".
         "</tr>";
}
echo '</table>';



mysqli_close($conn);

$dbhost = 'localhost:8889';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
$sqlid = 'SELECT * FROM peopletable WHERE id = 10';


mysqli_select_db( $conn, 'firstdatabase' );
$retval1 = mysqli_query( $conn, $sqlid );

if(! $retval1 )
{
    die('无法读取数据: ' . mysqli_error($conn));

   // print_r(mysqli_error($conn));
}
echo '<h2>php连接数据库测试<h2>';
echo '<table border="1">';
while($row = mysqli_fetch_array($retval1, MYSQLI_ASSOC))
{
$sex =  $row['sex'];
if ($sex == 1) {
  # code...
  $sex = '男';
}else{

 $sex = '女';

}

    echo "<tr><td> 姓名:{$row['name']}</td> ".
         "<td> 年龄: {$row['age']} </td> ".
         "<td> 性别:$sex </td> ".
         "</tr>";
}
echo '</table>';
mysqli_close($conn);





?>
<br>



</body>
</html>





















