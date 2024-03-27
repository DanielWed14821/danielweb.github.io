<!DOCTYPE html>
<html>
<head>
    <title>Real-time Time Display</title>
    <script>
        window.onload = function() {
            setInterval(updateTime, 1000); // 每秒更新時間
        }

        function updateTime() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();

            // 確保時、分、秒都是兩位數，若不足10，在前面補0
            if (hours < 10) {
                hours = "0" + hours;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }

            var timeString = hours + ":" + minutes + ":" + seconds;
            document.getElementById("current-time").innerHTML = timeString;
        }
    </script>
</head>
<body>
    <h1>Real-time Time Display:</h1>
    <h1 id="current-time"></h1>
</body>
</html>