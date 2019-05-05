


<html>

<body>

<!-- 九九乘法表 -->
<?php  
for ($a=1; $a<10; $a++) { 
  # code...
echo "<tr>";
echo " </br>";
for ($b=1; $b<= $a; $b++) { 

  # code...
echo "<td>";
echo "$b*$a=".$a*$b."\n";
echo "\n";
echo "</td>";
//echo " </br>";

}
// echo "</tr>";
}


 ?>

<!-- 九九乘法表 -->


<!-- 单元格背景颜色 -->


<?php  
for ($i=0; $i < 10 ; $i++) { 
  # code...

if ($i<=5) {
  # code...

  $rand = dechex(rand(0,254));
}else{


continue;

}

}



?>

<table  height = "55" bgcolor="#<?php echo $rand;?>"> 
<tr>
  <td width = "156"></td>
</tr>
</table>

<!-- 单元格背景颜色 -->

<!-- 字符串过滤 -->


<!-- 字符串过滤 -->

</body>
</html>


















