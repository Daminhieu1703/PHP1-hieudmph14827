<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/we16305/bootstrap.min.css"></link>
</head>
<body>
    <div class="col-8 offset-2">
        <form action="/we16305/src/auth/login.php" method="POST">
            <div>
                <label>Email</label>
                <input name="email" type="email" class="form-control"/>
            </div>
            <div>
                <label>Password</label>
                <input name="password" type="password" class="form-control"/>
            </div>
            <button class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
