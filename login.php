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
@ $passwd=$_POST["pass"];
@ $login=$_POST["login"];
@ $remember=$_POST["remember"];
if($username==NULL||$passwd==NULL)
{
    exit("<script>
            alert('输入为空，请重新输入');
            location.href='test.php';
            </script>");
}
else{
    $pdo=new PDO('mysql:host=localhost;dbname=user','root');
    $sql="select * from user_registe where username = '$username' and userpasswd = '$passwd'";
    $result =$pdo->query($sql);
    $row = $result->fetch();
    if ($row['username'] == $username && $row['userpasswd'] == $passwd){
        if($login==1&&$remember==2)
        {
            setcookie('username',$username,strtotime('+7 days'));
            setcookie('password',$passwd,strtotime('+7 days'));
            setcookie('login',$login,strtotime('+7 days'));
            setcookie('remember',$remember,strtotime('+7 days'));
            exit("<script>
            alert('登陆成功！');
            location.href='show.php';
            </script>");
        }
        else if($login==1&&$remember!=2)
        {
            exit("<script>
            alert('请记住密码！');
            location.href='test.php';
            </script>");
        }
        else if($login!=1&&$remember==2){
            setcookie('username',$username,strtotime('+7 days'));
            setcookie('password',$passwd,strtotime('+7 days'));
            setcookie('login',0,strtotime('+7 days'));
            setcookie('remember',$remember,strtotime('+7 days'));
            exit("<script>
            alert('登陆成功！');
            location.href='show.php';
            </script>");
        }
        else
        {
            setcookie('username',$username);
            setcookie('password',$passwd);
            setcookie('login',0);
            setcookie('remember',0);
            header("Location:show.php"); 
        }
}
else {
   exit("<script>
            alert('登陆失败！');
            location.href='test.php';
            </script>");
}

}
?>
<a href="test.php" title="返回登陆页面">返回登陆页面</a>
</body>
</html>