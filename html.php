<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html or main page</title>

    <Style>
        .box {
            width: 420px;
            padding: 20px;
            border: 1px solid black;
            font-family: "Times New Roman", serif;
            font-size: 18px;
        }
        .row {
            margin-bottom: 15px;
        }
        #username {
            width: 220px;
            padding: 8px;
            margin-left: 20px;
            font-size: 16px;
        }
        #submitBtn {
            margin-left: 175px;
            padding: 10px 70px 10px 20px;
            background-color: #70ad47;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        #message {
            margin-top: 25px;
            color: #00b050;
        }
    </Style>
</head>
<body>
    <div class="box">
        
        <div class="row">
            <label for="username">User Name:</label>
            <input type="text" id="username">
        </div>

        <button id="submitBtn">Submit</button>

        <p id="message">Key in username and click submit</p>
    </div>

    <script src="verify_ajax.js"></script>
</body>
</html>