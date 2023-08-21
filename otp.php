<!DOCTYPE html>
<html>
<head>
    <title>OTP Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .otp-container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            text-align: center;
        }

        .otp-input {
            font-size: 24px;
            width: 40px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 5px;
            padding: 5px;
        }

        .generate-button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .generate-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="otp-container">
        <h2>Enter One-Time Password (OTP)</h2>
        <div>
            <input type="text" class="otp-input" id="digit1" maxlength="1" onkeyup="focusNext(this)">
            <input type="text" class="otp-input" id="digit2" maxlength="1" onkeyup="focusNext(this)">
            <input type="text" class="otp-input" id="digit3" maxlength="1" onkeyup="focusNext(this)">
            <input type="text" class="otp-input" id="digit4" maxlength="1">
        </div>
        <button class="generate-button" onclick="generateOTP()">Generate OTP</button>
    </div>

    <script>
        function generateOTP() {
            var digits = '0123456789';
            var otp = '';

            for (var i = 0; i < 4; i++) {
                otp += digits[Math.floor(Math.random() * digits.length)];
            }

            for (var i = 1; i <= 4; i++) {
                document.getElementById('digit' + i).value = otp[i - 1];
            }
        }

        function focusNext(input) {
            var nextInput = input.nextElementSibling;

            if (nextInput) {
                nextInput.focus();
            }
        }
    </script>
</body>
</html>
