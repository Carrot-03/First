<html>
<head>
<title>学籍信息管理系统</title>
<style>
a:link {color: blue} 
a:visited {color: blue} 
a:hover {color: blue} 
a:active {color: blue} 
</style> 
</head>
<body>
<div align="center">
<h1>学&nbsp;籍&nbsp;信&nbsp;息&nbsp;管&nbsp;理&nbsp;系&nbsp;统</h1>
<h2>英语成绩单</h2>
<table>
<tr>
<td>序号&nbsp;</td>
<td>姓名&nbsp;</td>
<td>专业&nbsp;</td>
<td>班级&nbsp;</td>
<td>学号&nbsp;</td>
<td>英语成绩&nbsp;</td>
</tr><br/><br/>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=user','root');
$sql="select * from information_stu order by stu_senglish desc" ;
$result=$pdo->query($sql);
$i=0;
while($row = $result->fetch())
{
    $i++;
    echo "
    <tr>
    <td>{$i}</td>
    <td>{$row['stu_sname']}</td>
   <td>{$row['stu_szhuanye']}</td>
   <td>{$row['stu_sclass']}</td>
   <td>{$row['stu_snumber']}</td>
   <td>{$row['stu_senglish']}</td></tr>"."<br/>";
}
?>
</table>
<br/><br/><br/>

<a href="information_3.php" title="返回上一页">返回上一页</a>
</div>
</body>
</html>