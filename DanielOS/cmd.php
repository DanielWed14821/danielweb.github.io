<!DOCTYPE html>
<html>
<head>
    <title>CDAE_OS</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Consolas, monospace;
            margin: 0;
            padding: 0;
        }

        #output {
            width: 100%;
            height: calc(100% - 40px);
            background-color: #000;
            overflow-y: scroll;
            padding: 10px;
            box-sizing: border-box;
        }

        #input-container {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            background-color: #000;
            display: flex;
            align-items: center;
        }

        #command {
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            font-family: Consolas, monospace;
            font-size: 16px;
            outline: none;
            flex: 1;
            padding: 8px;
        }

        #command:focus {
            outline: none;
        }

        #execute-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
            outline: none;
        }
    </style>
    <script>
        window.onload = function() {
            var output = document.getElementById('output');
            output.innerHTML = "CDAE_OS<br>";
        }

        function simulateCommand() {
            var input = document.getElementById('command').value;
            var output = document.getElementById('output');

            // 清空输入框
            document.getElementById('command').value = '';

            // 模拟命令执行过程
            var response = executeCommand(input);

            // 显示命令和输出
            output.innerHTML += input + '<br>';
            output.innerHTML += response + '<br>';
            output.scrollTop = output.scrollHeight;
        }

        function executeCommand(command) {
            // 在此处编写模拟命令执行的逻辑
            // 这里只是一个简单的示例
            if (command === 'help') {
                return 'Available commands:<br>' +
                    'help - display available commands<br>' +
                    'time - display current time<br>' +
                    'dir - list directory contents <br>' +
                    'dos - open DanielOS';
            } else if (command === 'time') {
                return new Date().toLocaleTimeString();
            } else if (command === 'dir') {
                return 'Directory listing...';
            }else if(command == 'dos'){
		        window.open('/DanielOS/dos.php', '_blank');
            }else if(command == 'root/cat/teatea'){
		        window.open('/DanielOS/sad.htm', '_blank');
            } else {
                return 'Command not recognized.';
            }
        }

        function handleKeyDown(event) {
            if (event.keyCode === 13) {
                simulateCommand();
            }
        }
    </script>
</head>
<body>
    <div id="output"></div>
    <div id="input-container">
        <input type="text" id="command" autofocus onkeydown="handleKeyDown(event)">
        <button id="execute-button" onclick="simulateCommand()">Execute</button>
    </div>
</body>
</html>