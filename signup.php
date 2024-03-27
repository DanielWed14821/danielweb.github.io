<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>注册界面</title>
</head>
<body>
    <h1>注册</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        
        // 将用户资料存储到文本文件
        $file = fopen("users.txt", "a");
        fwrite($file, "Username: " . $username . "\n");
        fwrite($file, "Password: " . $password . "\n");
        fwrite($file, "Email: " . $email . "\n\n");
        fclose($file);
        
        // 跳转到第二个界面
        header("Location: logined.php");
        exit();
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">用户名:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">密码:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">电子邮箱:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="注册">
    </form>
</body>
</html>