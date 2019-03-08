<?php
    if(!isset($_COOKIE['username'])){
        exit("<script>
        alert('请先登录再访问！');
        location.href='test.php';
        </script>");
    }
?>
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
<br/><br/>
<?php
    if(isset($_COOKIE['username'])){
        echo "用户名：".$_COOKIE["username"];
    }
?>
<br/><br/>
<form action="show_2.php" method="post">
<input type="submit" value="退出登录" name="tuichu">
</form>
<br/>
<form action="information_1.php" method="post">
<p><strong>1.学生信息录入</strong>&nbsp;&nbsp;<input type="submit" value="进入"></p>
</form>
<form action="information_2.php" method="post">
<p><strong>2.学生信息更改</strong>&nbsp;&nbsp;<input type="submit" value="进入"></p>
</form>
<form action="information_4.php" method="post">
<p><strong>3.学生信息查询</strong>&nbsp;&nbsp;<input type="submit" value="进入"></p>
</form>
<form action="information_5.php" method="post">
<p><strong>4.学生信息删除</strong>&nbsp;&nbsp;<input type="submit" value="进入"></p>
</form>
<form action="information_6.php" method="post">
<p><strong>5.显示学生信息</strong>&nbsp;&nbsp;<input type="submit" value="进入"></p>
</form>
<form action="information_3.php" method="post">
<p><strong>5.学生成绩统计</strong>&nbsp;&nbsp;<input type="submit" value="进入"></p>
</form>
<a href="test.php" title="返回登陆页面">返回登陆页面</a>
</div>
</body>
</html>