<!DOCTYPE html>
<html>
<head>
    <title>内嵌CSS样式</title>
    <style>
        /* 在这里编写您的CSS样式 */
        body {
            background-image: url("https://s2.loli.net/2024/03/16/WCAfQpeyrPgEjVc.jpg");
            background-size: 100%;
		    background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }
        
        .rounded-box {
            width: 200px;
            height: 150px;
            background-color: lightblue;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="rounded-box"></div>
    </div>
</body>
</html>