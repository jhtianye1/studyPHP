<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";  //将初始值设为空

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
        $data = trim($data); //去除空格
        $data = stripslashes($data); // 剥除反斜杠  这个功能不行, \不会被删除, w3school网站上同样的代码就可以, 估计是服务器
//        的php版本问题
        $data = htmlspecialchars($data); //剥除特殊字符

        return $data;
    }

?>
<a href="#">dddd</a>
<h2>PHP 验证实例</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    姓名：<input type="text" name="name">
    <br><br>
    电邮：<input type="text" name="email">
    <br><br>
    网址：<input type="text" name="website">
    <br><br>
    评论：<textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    性别：
    <input type="radio" name="gender" value="female">女性
    <input type="radio" name="gender" value="male">男性
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>

<?php
    echo "<h2>您的输入：</h2>";
    echo "空格".$name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>

<h1>验证表单的必填项</h1>
<?php
    // 定义变量并设置为空值
    $nameErr_1 = $emailErr = $genderErr = $websiteErr = "";
    $name_1 = $email_1 = $gender_1 = $comment_1 = $website_1 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name_1"])) {
            $nameErr_1 = "姓名是必填的";
        } else {
            $name_1 = test_input_1($_POST["name_1"]);
        }

        if (empty($_POST["email_1"])) {
            $emailErr = "电邮是必填的";
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
            $genderErr = "性别是必选的";
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

<h2>PHP 验证实例</h2>

<p><span class="error">* 必需的字段</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    姓名：<input type="text" name="name_1">
    <span class="error">* <?php echo $nameErr_1; ?></span>
    <br><br>
    电邮：<input type="text" name="email_1">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    网址：<input type="text" name="website_1">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    评论：<textarea name="comment_1" rows="5" cols="40"></textarea>
    <br><br>
    性别：
    <input type="radio" name="gender_1" value="female">女性
    <input type="radio" name="gender_1" value="male">男性
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>

<?php
    echo "<h2>您的输入：</h2>";
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

