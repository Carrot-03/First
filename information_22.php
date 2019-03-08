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
<h1>学&nbsp;籍&nbsp;信&nbsp;息&nbsp;管&nbsp;理&nbsp;系&nbsp;统 </h1>
<table>
<caption>该学生信息为：</caption>
<tr>
<td>姓名&nbsp;</td>
<td>年龄&nbsp;</td>
<td>民族&nbsp;</td>
<td>专业&nbsp;</td>
<td>班级&nbsp;</td>
<td>学号&nbsp;</td>
<td>数学成绩&nbsp;</td>
<td>英语成绩&nbsp;</td>
<td>专业成绩</td>
</tr><br/><br/>
<?php
@$stunumber=$_POST["snumber"];
$hon=mysqli_connect("localhost","root");
if(mysqli_connect_errno()){
    echo 'error';
}
$hon->select_db('user');
$result = mysqli_query($hon,"select * from information_stu where stu_snumber = '$stunumber' ") ;
$row = mysqli_fetch_array($result);
if ($row['stu_snumber'] == $stunumber)
{
    echo "
    <tr>
    <td>{$row['stu_sname']}</td>
   <td>{$row['stu_sage']}</td>
   <td>{$row['stu_sminzu']}</td>
   <td>{$row['stu_szhuanye']}</td>
   <td>{$row['stu_sclass']}</td>
   <td>{$row['stu_snumber']}</td>
   <td>{$row['stu_smath']}</td>
   <td>{$row['stu_senglish']}</td>
   <td>{$row['stu_sit']}</td></tr>";
}
else
{
    exit("<script>
            alert('查找失败！');
            location.href='information_2.php';
            </script>");
}
?>
</table>
<br/><br/>
<p>请输入新的信息(学号不可修改)：</p>
<form action="information_23.php" method="post">
姓&nbsp;名：
<input type="text" name="sname"/><br/><br/>
年&nbsp;龄：
<input type="text" name="sage"/><br/><br/>
民&nbsp;族：
<input type="text" name="sminzu"/><br/><br/>
专&nbsp;业：
<input type="text" name="szhuanye"/><br/><br/>
班&nbsp;级：
<input type="text" name="sclass"/><br/><br/>
学&nbsp;号：
<input type="text" name="snumber"/><br/><br/>
数学成绩：
<input type="text" name="smath"/><br/><br/>
英语成绩：
<input type="text" name="senglish"/><br/><br/>
专业成绩：
<input type="text" name="sit"/>
<br/><br/><br/>
<input type="submit" value="提交">&nbsp;&nbsp;
<input type="reset" value="重置">
</form>
<a href="show.php" title="返回主页">返回主页</a>
</div>
</body>
</html>