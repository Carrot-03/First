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
<?php
@$stuname=$_POST["sname"];
@$stuage=$_POST["sage"];
@$stuminzu=$_POST["sminzu"];
@$stuzhuanye=$_POST["szhuanye"];
@$stuclass=$_POST["sclass"];
@$stunumber=$_POST["snumber"];
@$stumath=$_POST["smath"];
@$stuenglish=$_POST["senglish"];
@$stuit=$_POST["sit"];
@$stusum=$stumath+$stuenglish+$stuit;
if($stuname==NULL||$stuage==NULL||$stuminzu==NULL||$stuzhuanye==NULL||$stuclass==NULL||$stunumber==NULL||$stumath==NULL||$stuenglish==NULL||$stuit==NULL)
{
    exit("<script>
            alert('输入为空！');
            location.href='information_2.php';
            </script>");
}
else{
    $pdo=new PDO('mysql:host=localhost;dbname=user','root');
    $sql = "UPDATE information_stu set stu_sage = '$stuage',stu_sname='$stuname',stu_sminzu='$stuminzu',stu_szhuanye='$stuzhuanye',stu_sclass='$stuclass',stu_smath='$stumath',stu_senglish='$stuenglish',stu_sit='$stuit',ssum='$stusum' WHERE stu_snumber = '$stunumber'";
    $r=$pdo->exec($sql);
    if($r==1)
    {
        exit("<script>
            alert('修改成功！');
            location.href='show.php';
            </script>");
    }
    else
    {
        exit("<script>
            alert('修改失败！');
            location.href='show.php';
            </script>");
    }
}
?>
<a href="show.php" title="返回主页">返回主页</a>
</body>
</html>