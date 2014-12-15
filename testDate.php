<!DOCTYPE html>
<html>
<body>
<a href="#bottom">到底部</a>
<?php
    /**
     * Created by tiane.
     * User: tianye
     * Date: 2014/12/15
     * Time: 14:02
     *
     */

    //"<hr>请注意 PHP date() 函数会返回服务器的当前日期/时间！</br>"
    echo "<hr>请注意 PHP date() 函数会返回服务器的当前日期/时间！</br>";

    echo "今天是 " . date("y/m/d") . "<br>";
    echo "今天是 " . date("y.m.d") . "<br>";
    echo "今天是 " . date("Y-m-d") . "<br>"; //php函数参数大小写没有关系.
    echo "今天是 " . date("l") . "<br>";
    echo "当前时间是 " . date("h:i:sa") . "<br>";

    echo "当前时间是 " . date("h") . "<br>";  //
    echo "<hr>    设置时区, 再输出时间, 就不会受到服务器的影响</br>";

    date_default_timezone_set("Asia/Shanghai");  //把时区设置为 "Asia/Shanghai"，
    echo "当前时间:  " . date("y-m-d") . "<br>";
    echo "<hr>    mktime建立时间戳</br>";
    $d = mktime(9, 12, 31, 6, 10, 2015);
    echo "创建日期是 " . date("Y-m-d h:i:sa", $d);

    //<hr>通过 PHP strtotime() 用字符串来创建日期</br>
    echo "<hr>通过 PHP strtotime() 用字符串来创建日期</br>";
    $d = strtotime("10:38pm April 15 2015");
    echo "</br>";
    echo "正常: " . "</br>";
    echo "创建日期 " . date("Y-m-d h:i:sa", $d) . "<br>";
    echo "</br>";
    echo "strtotime函数顺序不能变" . "</br>";
    $d = strtotime("April 10:38pm  15 2015") . "<br>";   //
    echo "创建日期 " . date("Y-m-d h:i:sa", $d) . "<br>";

    echo "</br>";
    echo "strtotime函数参数小写不行:" . "</br>";
    $d = strtotime("april 10:38pm  15 2015");
    echo "创建日期 " . date("Y-m-d h:i:sa", $d) . "</br>";

    //<hr>PHP strtotime函数 在将字符串转换为日期这方面非常聪明，所以您能够使用各种值：</br>
    echo "<hr>PHP strtotime函数 在将字符串转换为日期这方面非常聪明，所以您能够使用各种值：</br>";
    echo "tomorrow" . "</br>";
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    echo "next Saturday" . "</br>";
    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    echo "+3 Months" . "</br>";
    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    //下例输出下六个礼拜, 周六的日期
    echo "<hr>下例输出下周六的日期：</br>";
    $startdate = strtotime("Saturday");  //输出本周星期六的日期
    $enddate = strtotime("+6 weeks", $startdate);  //加六个礼拜后的星期六日期.

    while ($startdate < $enddate) { //循环输出每个礼拜六的日期
        echo date("M d", $startdate), "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    echo "<hr>输出12月31日之前的天数：</br>";
    $d1 = strtotime("December 31");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);  //ceil: float value rounded to the next lowest integer.表示向下求整数 time()表示目前的时间秒
    echo "距离十二月三十一日还有：" . $d2 . " 天。";



?>

<a name="bottom"></a>
</body>
</html>

