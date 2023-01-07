<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "JetBrains Mono", sans-serif;
        }
        .container {
            max-width: 1300px;
            width: 100%;
            margin: 0 auto;
            padding: 0 15px;
        }
        input {
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 15px;
            font-size: 16px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            background-color: #0c20be;
            color: white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        {{ content }}
    </div>
</body>
</html>
