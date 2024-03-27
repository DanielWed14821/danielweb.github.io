<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>登录界面</title>
</head>
<body>
    <h1>登录</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        
        // 从文件中读取用户名、密码和电子邮箱进行验证
        $file = fopen("users.txt", "r");
        $validUser = false;
        
        while (($line = fgets($file)) !== false) {
            $line = trim($line);
            $credentials = explode(": ", $line);
            
            if ($credentials[0] === "Username" && $credentials[1] === $username) {
                $validUser = true;
            }
            
            if ($credentials[0] === "Password" && $credentials[1] === $password && $validUser) {
                // 登录成功，跳转到第二个界面
                header("Location: logined.php");
                exit();
            }
        }
        
        fclose($file);
        
        // 登录失败，显示错误消息
        echo "用户名、密码或电子邮箱错误，请重试！";
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">用户名:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">密码:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">电子邮箱:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="登录">
    </form>
</body>
</html>