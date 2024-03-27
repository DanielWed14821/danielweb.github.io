<!DOCTYPE html>
<html lang="zh">
<html>
<head>
    <meta charset="UTF-8">
    <title>Daniel Web</title>
    <style>
        
        body{
            background-color: rgb( 0, 128, 191);
        }

        #title-text{
            color: #333
        }

        

       

        .bar{
            width: 100%;
            height: 80px;
            top: 0px ;
            background-color: #fff;
            position: fixed;
            bottom: 0;
            left: 0;
            border-bottom: 3px solid gray;
            z-index: -1;
        }

        
        #logout{
            position: relative;
            width: 55px;
            height: 35px;
            top: 25px ;
            font-size: 15px;
            position: fixed;
            right: 65px;
            border-radius: 10px;
            background-color: lightcoral;
            color: #303030;
        }

         #buttonui{
            position: relative;
            width: 80px;
            height: 35px;
            font-size: 15px;
            border-radius: 10px;
            background-color: lightblue;
            color: #303030;
        }

    </style>

<script>
    function logout(){
        window.location.href = "login.php"
    }

    function time(){
        window.location.href = "/time/index.php"
    }

</script>


</head>
<body>
    <h1 id = "title-text">欢迎来到我的网站 </h1>
    <dev class="bar"></dev>
    <button id = "buttonui" onclick = "time()"> 我的时钟 </button>
</body>
</html>