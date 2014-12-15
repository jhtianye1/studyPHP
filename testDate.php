<!DOCTYPE html>
<html>
<body>
<a href="#bottom">���ײ�</a>
<?php
    /**
     * Created by tiane.
     * User: tianye
     * Date: 2014/12/15
     * Time: 14:02
     *
     */

    //"<hr>��ע�� PHP date() �����᷵�ط������ĵ�ǰ����/ʱ�䣡</br>"
    echo "<hr>��ע�� PHP date() �����᷵�ط������ĵ�ǰ����/ʱ�䣡</br>";

    echo "������ " . date("y/m/d") . "<br>";
    echo "������ " . date("y.m.d") . "<br>";
    echo "������ " . date("Y-m-d") . "<br>"; //php����������Сдû�й�ϵ.
    echo "������ " . date("l") . "<br>";
    echo "��ǰʱ���� " . date("h:i:sa") . "<br>";

    echo "��ǰʱ���� " . date("h") . "<br>";  //
    echo "<hr>    ����ʱ��, �����ʱ��, �Ͳ����ܵ���������Ӱ��</br>";

    date_default_timezone_set("Asia/Shanghai");  //��ʱ������Ϊ "Asia/Shanghai"��
    echo "��ǰʱ��:  " . date("y-m-d") . "<br>";
    echo "<hr>    mktime����ʱ���</br>";
    $d = mktime(9, 12, 31, 6, 10, 2015);
    echo "���������� " . date("Y-m-d h:i:sa", $d);

    //<hr>ͨ�� PHP strtotime() ���ַ�������������</br>
    echo "<hr>ͨ�� PHP strtotime() ���ַ�������������</br>";
    $d = strtotime("10:38pm April 15 2015");
    echo "</br>";
    echo "����: " . "</br>";
    echo "�������� " . date("Y-m-d h:i:sa", $d) . "<br>";
    echo "</br>";
    echo "strtotime����˳���ܱ�" . "</br>";
    $d = strtotime("April 10:38pm  15 2015") . "<br>";   //
    echo "�������� " . date("Y-m-d h:i:sa", $d) . "<br>";

    echo "</br>";
    echo "strtotime��������Сд����:" . "</br>";
    $d = strtotime("april 10:38pm  15 2015");
    echo "�������� " . date("Y-m-d h:i:sa", $d) . "</br>";

    //<hr>PHP strtotime���� �ڽ��ַ���ת��Ϊ�����ⷽ��ǳ��������������ܹ�ʹ�ø���ֵ��</br>
    echo "<hr>PHP strtotime���� �ڽ��ַ���ת��Ϊ�����ⷽ��ǳ��������������ܹ�ʹ�ø���ֵ��</br>";
    echo "tomorrow" . "</br>";
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    echo "next Saturday" . "</br>";
    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    echo "+3 Months" . "</br>";
    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    //����������������, ����������
    echo "<hr>������������������ڣ�</br>";
    $startdate = strtotime("Saturday");  //�������������������
    $enddate = strtotime("+6 weeks", $startdate);  //��������ݺ������������.

    while ($startdate < $enddate) { //ѭ�����ÿ�������������
        echo date("M d", $startdate), "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    echo "<hr>���12��31��֮ǰ��������</br>";
    $d1 = strtotime("December 31");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);  //ceil: float value rounded to the next lowest integer.��ʾ���������� time()��ʾĿǰ��ʱ����
    echo "����ʮ������ʮһ�ջ��У�" . $d2 . " �졣";



?>

<a name="bottom"></a>
</body>
</html>

