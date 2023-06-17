<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
    <style>
        * {
            background: #111D05;
            font-family: 'Roboto', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background-color: #1E442C;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .box .welcome {
            background-color: #1E442C;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 0;
        }

        .box a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #1E442C;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            border: 2px solid #ffffff;
        }
    </style>
</head>
<body>
    <div class="box">
    <h2 class="welcome">SPYPRICE</h2>    
    <h2 class="welcome">Selamat Datang</h2>
        <a href="admin.php" class="btn">Admin</a>
        <a href="homepage.php" class="btn">Perbandingan Harga</a>
    </div>
</body>
</html>
