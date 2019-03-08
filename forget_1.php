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
@ $username=$_POST["myName"];
@ $passwd=$_POST["pass1"];
@ $passwd2=$_POST["pass2"];
if($passwd!=$passwd2)
{
    exit("<script>
            alert('两次输入密码不相同，请重新输入！');
            location.href='forget.php';
            </script>");
    
}
else if($username==NULL||$passwd==NULL||$passwd2==NULL)
{
    exit("<script>
            alert('输入为空，请重新输入！');
            location.href='forget.php';
            </script>");
}
else{

    $pdo=new PDO('mysql:host=localhost;dbname=user','root');
    $sql="UPDATE user_registe SET userpasswd='$passwd' WHERE username='$username'";
    $result=$pdo->exec($sql);
    if($result==1)
    {
        exit("<script>
            alert('修改成功！');
            location.href='test.php';
            </script>");

    }
    
    else
    {
        exit("<script>
            alert('修改失败！');
            location.href='test.php';
            </script>");
    }

    
}
?>
<a href="test.php" title="返回登陆页面">返回登陆页面</a>
</body>
</html>