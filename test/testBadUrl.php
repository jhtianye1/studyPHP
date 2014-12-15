<!DOCTYPE html>
<html>
<head>
    <meta charset="gbk">
</head>
<body>
<a href="http://test.huasushidai.com/testBad.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E"> 这个破坏性的url测试,
    chrome失效了!!, QQ浏览器有效, ie也有效.</a>
<!--<a href="http://test.huasushidai.com/testBad.php/"></a>-->

<!--//htmlspecialchars可以解决sever函数的问题, 链接后面挂上js脚本的url不起作用了.-->
<!--<form action="--><?php;//
    //    echo htmlspecialchars($_SERVER["PHP_SELF"])
    //
?>
<!--</form>-->

<!--没有htmlspecialchars, 就会被恶意链接利用sever, 在网页输出js脚本, 既是表单没有提交也一样会执行里面的php代码.-->
<form action="<? php;
    echo($_SERVER["PHP_SELF"])

?>
" method="post">
    name<input name="name" value="name" type="text">
    <input type="submit">
</form>

</body>
</html>