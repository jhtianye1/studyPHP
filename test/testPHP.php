<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
</head>
<body>
<a href="#bottom">到底部2</a>
<!--<p id="p1">1111</p>-->
<?php
    $x = 15555; // global scope

    function myTest() {
        global $x;//global用来访问全局变量
        $GLOBALS['x'] = 10000;
        static $y = 10; // local scope 局部和静态变量, 静态变量在每次函数被使用完成后都不会被销毁
        echo "<p>在函数内部测试变量：</p>";
        echo "变量 x 是： $x";//变量在双引号里面也可以发挥作用, 和其他语言不同.
        echo "<br>";
        echo "变量 y 是：$y";
        $y++;//对静态变量累加
    }


    myTest();


    echo "<p>在函数之外测试变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
    myTest();


    echo "<p>在函数之外测试变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";

?>

//
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3School.com.cn";
    $cars = array("Volvo", "BMW", "SAAB");
    echo $txt1;
    echo "<br>";
    echo "Study PHP at $txt2";
    echo "<br>";
    echo "My car is a $cars[0]";
?>

<!--//测试数据类型-->
<?php
    $x = 5985;
    var_dump($x);
    echo "<p>测试数据类型</p>";
    echo "<hr>";
    //echo "<br>";
    $x = -345; // 负数
    var_dump($x); //用var_dump调试变量
    echo "<br>";
    $x = 0x8C; // 十六进制数
    var_dump($x);
    echo "<br>";
    $x = 047; // 八进制数
    var_dump($x);
    $x = "a";//
    echo "<br>";
    var_dump($x)

?>
<!--测试数组-->
<?php
    echo "<hr>测试数组</br>";
    $cars = array("Volvo", "BMW", "SAAB");
    var_dump($cars);

?>
<?php
    echo "<hr>测试类</br>";

    class Car {
        var $color;
        var $size;

        function Car($color = "green", $size = "10") { //构造函数
            $this->color = $color;
            $this->size = $size;
        }

        function what_color() { //方法
            return $this->color;
        }

        function what_size() {
            return $this->size;
        }
    }

    function print_vars($obj) { //函数
        foreach (get_object_vars($obj) as $prop => $val) {//遍历对象的属性
            echo "\n$prop = $val";
        }
    }

    // instantiate one object
    $herbie = new Car("white", 20);

    // show herbie properties
    echo "herbie: Properties";
    print_vars($herbie);

?>

<?php
    echo "<hr>测试字符串</br>";

    echo strlen("Hello world!"), '</br>';
    echo strpos("Hello world!", "world");

?>

<?php
    echo "<hr>测试字符串运算</br>";

    $a = "Hello";
    $b = $a . " world!";
    echo $b; // 输出 Hello world!

    echo "<br>";

    $x = "Hello";
    $x .= " world!";
    echo $x; // 输出 Hello world!
?>
<?php
    echo "<hr>测试加加 减减运算符</br>";

    $x = 10;
    echo ++$x; // 11
    echo "<br>";

    $y = 10;
    echo $y++; //10
    echo "<br>";

    $z = 5;
    echo --$z; //4
    echo "<br>";

    $i = 5;
    echo $i--; //5
?>
<?php
    echo "<hr>测试比较运算符</br>";

    $x = 100;
    $y = "100";

    var_dump($x == $y); // 因为值相等，返回 true
    echo "<br>";
    var_dump($x === $y); // 因为类型不相等，返回 false    ===表示完全相同
    echo "<br>";
    var_dump($x != $y); // 因为值相等，返回 false
    echo "<br>";
    var_dump($x !== $y); // 因为数值相等，返回 true  !==完全不同
    echo "<br>";

    $a = 50;
    $b = 90;

    var_dump($a > $b);
    echo "<br>";
    var_dump($a < $b);
?>
<?php
    echo "<hr>数组比较</br>";

    $x = array("a" => "red", "b" => "green");
    $x2 = array("b" => "green", "a" => "red");
    $x3 = array("b" => "green1", "a" => "red");

    echo "<br>";
    var_dump($x3 != $x); //true
    echo "<br>";

    echo "<br>";
    var_dump($x2 != $x);//false  只是顺序不同, 键值对相同.
    echo "<br>";

    echo "x2!==x";
    var_dump($x2 !== $x); //true
    echo "<br>";
    echo "x2";
    var_dump($x2);
    echo "<br>";
    echo "$x";
    var_dump($x);

?>
<?php
    echo "<hr>if语句</br>";

    $t = date(H); //双引号有没有不影响结果
    if ($t < "0") {  //双引号有没有不影响结果
        echo "have a good day";


    } else {
        echo "xxxxx";
    }

?>
<?php
    echo "<hr>test foreach</br>";

    $color = array("blue", "red", "orange");
    foreach ($color as $item) {
        /*     echo "$item"; //echo "$item" +"</br>" 会输出为000, 变量和html标签不能放在一起.
             echo "</br>";*/
        echo "$item" . "</br>"; //用.链接就没有问题,  把前后都当作字符串.

    }
    echo "<hr></br>";

    $ship = array("color" => "red", "size" => "16", "speed" => "20jie");
    foreach ($ship as $a => $b) {
        echo "$a=>$b" . "</br>";
        //        echo "</br>";

    }
?>

<!--PHP 的真正力量来自它的函数：它拥有超过 1000 个内建的函数。-->
<!--PHP - 数组的排序函数-->
<?php
    echo "<hr>数组排序</br>";
    echo "sort升序" . "</br>";

    $cars = array("Volvo", "BMW", "SAAB");
    sort($cars);

    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[ $x ];
        echo "<br>";
    }
    echo "<hr>rsort降序</br>";

    $cars = array("Volvo", "BMW", "SAAB");
    rsort($cars);

    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[ $x ];
        echo "<br>";
    }

    echo "<hr>asort值升序</br>";
    $age = array("Bill" => "35", "Steve" => "37", "Peter" => "43");
    asort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<hr>ksrot键升序</br>";

    $age = array("Bill" => "35", "Steve" => "37", "Peter" => "43");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo "<hr>arsort值降序</br>";
    $age = array("Bill" => "35", "Steve" => "37", "Peter" => "43");
    arsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<hr>krsort键降序</br>";

    $age = array("Bill" => "35", "Steve" => "37", "Peter" => "43");
    krsort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

?>



<!--超全局变量 在 PHP 4.1.0 中引入，是在全部作用域中始终可用的内置变量。-->
<!--•$GLOBALS
•$_SERVER
•$_REQUEST
•$_POST
•$_GET
•$_FILES
•$_ENV
•$_COOKIE
•$_SESSION-->
<?php
    echo "<hr>全局$globals</br>";
    $x = 30;
    $y = 65;

    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;

    echo "<hr>_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。</br>";

    foreach ($_SERVER as $key => $value) {
        echo "$key =>" . "$value" . "</br>";
    }


?>

<hr>
PHP $_REQUEST 用于收集 HTML 表单提交的数据。</br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!--action提交到php代码输出的路径:/testphp.php-->

    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php

    $name = $_REQUEST['fname'];
    echo $name;
?>

<hr>
PHP $_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    $name = $_POST['fname'];
    echo $name;
?>



<hr>
$_GET 也可以收集 URL 中的发送的数据。<br>
<a href="test_get.php?subject=PHP& web=W3school.com.cn">测试 $GET</a>

<!--test_get.php的内容如下-->
<?php
    /*    echo "Study " . $_GET['subject'] . " at " . $_GET['web']; //$_GET接收到url传来的subject和web变量
    */
?>


<hr>
PHP 表单处理
<br>

<form action="/welcome.php" method="post">
    姓名：<input type="text" name="name"><br>
    电邮：<input type="text" name="email"><br>
    <input type="submit">
</form>

<!--$_GET 是通过 URL 参数传递到当前脚本的变量数组。-->
<!--$_POST 是通过 HTTP POST 传递到当前脚本的变量数组。-->

<!--PHP 表单验证-->
<!--
htmlspecialchars() 函数把特殊字符转换为 HTML 实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 &lt; 和 &gt;
。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。-->


<!--关于 PHP 表单安全性的重要提示-->

<a href="http://test.huasushidai.com/testphp.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E"> 这个破坏性的url测试,
    chrome失效了!!, QQ浏览器有效, ie也有效.</a>

<!--<a href="http://test.huasushidai.com/testphp.php/%22%3E%3Cscript%3document.write(" hack")%3C/script%3E"> 这个破坏性的url测试,
chrome失效了, QQ浏览器有效, ie也有效.</a>-->

<form action="<? php;
    echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"

</form>
<?php

?>

<a name="bottom">底部</a>

</body>

</html>


