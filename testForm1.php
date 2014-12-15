
<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
    // �������������Ϊ��ֵ
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "�����Ǳ����";
        } else {
            $name = test_input($_POST["name"]);
            // ��������Ƿ������ĸ�Ϳհ��ַ�
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "ֻ������ĸ�Ϳո�";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "�����Ǳ����";
        } else {
            $email = test_input($_POST["email"]);
            // �������ʼ���ַ�﷨�Ƿ���Ч
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                $emailErr = "��Ч�� email ��ʽ";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // ��� URL ��ַ�﷨�Ƿ���Ч��������ʽҲ���� URL �е�б�ܣ�
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "��Ч�� URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "�Ա��Ǳ�ѡ��";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2>PHP ��֤ʵ��</h2>
<p><span class="error">* ������ֶ�</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    ������<input type="text" name="name" value ="<?php echo $name?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    ���ʣ�<input type="text" name="email" value = "<?php echo $email?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    ��ַ��<input type="text" name="website" value = "<?php echo $website?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    ���ۣ�<textarea name="comment" rows="5" cols="40" ></textarea>
    <br><br>
    �Ա�
    <input type="radio" name="gender" value="female">Ů��
    <input type="radio" name="gender" value="male">����
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="�ύ">
</form>

<?php
    echo "<h2>�������룺</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>

</body>
</html>

