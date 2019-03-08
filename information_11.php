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
@$sum=$stumath+$stuenglish+$stuit;
if($stuname==NULL||$stuage==NULL||$stuminzu==NULL||$stuzhuanye==NULL||$stuclass==NULL||$stunumber==NULL||$stumath==NULL||$stuenglish==NULL||$stuit==NULL)
{
    exit("<script>
            alert('输入为空，请重新输入！');
            location.href='information_1.php';
            </script>");

}
else{
    $pdo=new PDO('mysql:host=localhost;dbname=user','root');
    $sql="INSERT INTO information_stu  VALUES ('$stuname','$stuage','$stuminzu','$stuzhuanye','$stuclass','$stunumber','$stumath','$stuenglish','$stuit','$sum')";
    $result=$pdo->exec($sql);
    if($result==1)
    {
        exit("<script>
            alert('信息存入成功！');
            location.href='show.php';
            </script>");
 
    }
    
    else
    {
        exit("<script>
            alert('信息存入失败，请重新输入！');
            location.href='information_1.php';
            </script>");
    }
    

}
?>
<a href="show.php" title="返回主页">返回主页</a>
</body>
</html>