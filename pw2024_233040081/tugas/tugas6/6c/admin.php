<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            bacground-color: lightblue;
            font-family: Helvetica
            display:flex;
            justify-content:center
            align-items:center
            flex-direction:colum;
        }

        .content {
            background-color: gray;
            width: 50%;
            height: 50%;
            border: 2px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: colum;
            box-shadow: 2px 2px 5px 2px; #white;
        }

        .content h1 {
            margin: 10px;
        }

        button {
            bacground-color: lightblue;
            border: 2px solid red;
            box-shadow: 2px 2px 9px 2px #white;
            border-radius: 0px 10px 0px 10px;
            padding: 5px;
            transition: 1s all;
        }

        button a{
        text-decoration: none;
        }

        button:hover {
            tranform: scale(90%);
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="content">
        <h1>Selamat Datang</h1>
        <button><a href="login.php">keluar</a></button>
    </div>
    </div>
</body>
</html>