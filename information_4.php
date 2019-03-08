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
<h2>学生信息查询</h2>
<form  action="information_44" method="post">
<label>请选择要查询的方式：</label>
<select name="iForm">
<option value='stusname'>姓名</option>
<option value='stusnumber' selected="selected">学号</option>
</select>
<br/><br/>
<label>请输入要查询的内容：</label>
<input type="text" name="student"/><br/><br/>
<input type="submit" value="确定"><br/><br/>
<a href="show.php" title="返回主页">返回主页</a>
</form>
</div>
</body>
</html>