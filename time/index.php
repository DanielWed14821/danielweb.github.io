<!DOCTYPE html>
<html>
<head>
    <title>Real-time Time Display</title>
    <script>
        window.onload = function() {
            setInterval(updateTime, 1000); // ÿ����r�g
        }

        function updateTime() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();

            // �_���r���֡��붼�ǃ�λ����������10����ǰ���a0
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