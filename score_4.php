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
<h2>成绩排行榜</h2>
<table>
<tr>
<td>序号&nbsp;</td>
<td>姓名&nbsp;</td>
<td>年龄&nbsp;</td>
<td>民族&nbsp;</td>
<td>专业&nbsp;</td>
<td>班级&nbsp;</td>
<td>学号&nbsp;</td>
<td>数学成绩&nbsp;</td>
<td>英语成绩&nbsp;</td>
<td>专业成绩&nbsp;</td>
<td>总成绩</td>
</tr><br/><br/>
<?php
@$stunumber=$_POST["snumber"];
$pdo=new PDO('mysql:host=localhost;dbname=user','root');
$sql="select * from information_stu order by ssum desc";
$result=$pdo->query($sql);
$i=0;
while($row = $result->fetch())
{
    $i++;
    echo "
    <tr>
    <td>{$i}</td>
    <td>{$row['stu_sname']}</td>
   <td>{$row['stu_sage']}</td>
   <td>{$row['stu_sminzu']}</td>
   <td>{$row['stu_szhuanye']}</td>
   <td>{$row['stu_sclass']}</td>
   <td>{$row['stu_snumber']}</td>
   <td>{$row['stu_smath']}</td>
   <td>{$row['stu_senglish']}</td>
   <td>{$row['stu_sit']}</td>
   <td>{$row['ssum']}</td></tr>"."<br/>";
}
?>
</table>
<a href="information_3.php" title="返回上一页">返回上一页</a>
</div>
</body>
</html>