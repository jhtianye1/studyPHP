<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";  //����ʼֵ��Ϊ��

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
        $data = trim($data); //ȥ���ո�
        $data = stripslashes($data); // ������б��  ������ܲ���, \���ᱻɾ��, w3school��վ��ͬ���Ĵ���Ϳ���, �����Ƿ�����
//        ��php�汾����
        $data = htmlspecialchars($data); //���������ַ�

        return $data;
    }

?>
<a href="#">dddd</a>
<h2>PHP ��֤ʵ��</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    ������<input type="text" name="name">
    <br><br>
    ���ʣ�<input type="text" name="email">
    <br><br>
    ��ַ��<input type="text" name="website">
    <br><br>
    ���ۣ�<textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    �Ա�
    <input type="radio" name="gender" value="female">Ů��
    <input type="radio" name="gender" value="male">����
    <br><br>
    <input type="submit" name="submit" value="�ύ">
</form>

<?php
    echo "<h2>�������룺</h2>";
    echo "�ո�".$name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>

<h1>��֤���ı�����</h1>
<?php
    // �������������Ϊ��ֵ
    $nameErr_1 = $emailErr = $genderErr = $websiteErr = "";
    $name_1 = $email_1 = $gender_1 = $comment_1 = $website_1 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name_1"])) {
            $nameErr_1 = "�����Ǳ����";
        } else {
            $name_1 = test_input_1($_POST["name_1"]);
        }

        if (empty($_POST["email_1"])) {
            $emailErr = "�����Ǳ����";
        } else {
            $email_1 = test_input_1($_POST["email_1"]);
        }

        if (empty($_POST["website_1"])) {
            $website_1 = "";
        } else {
            $website_1 = test_input_1($_POST["website_1"]);
        }

        if (empty($_POST["comment_1"])) {
            $comment_1 = "";
        } else {
            $comment_1 = test_input_1($_POST["comment_1"]);
        }

        if (empty($_POST["gender_1"])) {
            $genderErr = "�Ա��Ǳ�ѡ��";
        } else {
            $gender_1 = test_input_1($_POST["gender_1"]);
        }
    }

    function test_input_1($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

?>

<h2>PHP ��֤ʵ��</h2>

<p><span class="error">* ������ֶ�</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    ������<input type="text" name="name_1">
    <span class="error">* <?php echo $nameErr_1; ?></span>
    <br><br>
    ���ʣ�<input type="text" name="email_1">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    ��ַ��<input type="text" name="website_1">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    ���ۣ�<textarea name="comment_1" rows="5" cols="40"></textarea>
    <br><br>
    �Ա�
    <input type="radio" name="gender_1" value="female">Ů��
    <input type="radio" name="gender_1" value="male">����
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="�ύ">
</form>

<?php
    echo "<h2>�������룺</h2>";
    echo $name_1;
    echo "<br>";
    echo $email_1;
    echo "<br>";
    echo $website_1;
    echo "<br>";
    echo $comment_1;
    echo "<br>";
    echo $gender_1;
?>

</body>
</html>

