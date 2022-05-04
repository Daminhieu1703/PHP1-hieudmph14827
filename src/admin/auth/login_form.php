<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\WEB16305\src\bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">

        <div class="row d-flex justify-content-center align-items-center p-5">

            <form action="\WEB16305\src\admin\auth\login.php" class=" m-0 col-6 p-3 offset-2 border border-3 border-secondary rounded" method="post">
                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" >
                </div>

                <div class="d-grid gap-2 text-center text-danger fw-bold">
                    <?php
                        if (isset($_SESSION['error']) ) {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    ?>
                    <button type="submit" class="btn btn-success fw-bold ">Login</button>
                    <!-- <a href="\WEB16305\src\admin\users\index.php" class="btn btn-secondary"> Cancel</a> -->
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>