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
@$r=$_POST['iForm'];
@$stu=$_POST['student'];
$pdo=new PDO('mysql:host=localhost;dbname=user','root');
if($r=="stusnumber")
{

$sql="select * from information_stu where stu_snumber = '$stu' " ;
$result =$pdo->query($sql);
$row = $result->fetch();
if ($row['stu_snumber'] == $stu)
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
{exit("<script>
    alert('查找失败！');
    location.href='information_4.php';
    </script>") ;}
}
else if($r=="stusname")
{
    $sql="select * from information_stu where stu_sname = '$stu' " ;
    $result =$pdo->query($sql);
    $row = $result->fetch();
    if ($row['stu_sname'] == $stu)
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
            location.href='information_4.php';
            </script>");
  }
}
?>
<a href="show.php" title="返回主页">返回主页</a>
</table>
</form>
</div>
</body>
</html>