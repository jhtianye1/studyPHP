<!DOCTYPE html>
<html>
<head>
    <meta charset="gbk">
</head>
<body>
<a href="http://test.huasushidai.com/testBad.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E"> ����ƻ��Ե�url����,
    chromeʧЧ��!!, QQ�������Ч, ieҲ��Ч.</a>
<!--<a href="http://test.huasushidai.com/testBad.php/"></a>-->

<!--//htmlspecialchars���Խ��sever����������, ���Ӻ������js�ű���url����������.-->
<!--<form action="--><?php;//
    //    echo htmlspecialchars($_SERVER["PHP_SELF"])
    //
?>
<!--</form>-->

<!--û��htmlspecialchars, �ͻᱻ������������sever, ����ҳ���js�ű�, ���Ǳ�û���ύҲһ����ִ�������php����.-->
<form action="<? php;
    echo($_SERVER["PHP_SELF"])

?>
" method="post">
    name<input name="name" value="name" type="text">
    <input type="submit">
</form>

</body>
</html>