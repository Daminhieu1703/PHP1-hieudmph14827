<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="B3_B4.php" method="POST">
            <h1>Sign Up For New Account</h1>
            <div>
                <label for="">User Name</label>
                <input type="text" name="user"> <span style="color:red;"><?php if ($_POST['user'] == "") {echo "thiếu username";} ?></span>
            </div>
            <br>
            <div>
                <label for="">User Email</label>
                <input type="email" name="email"> <span style="color:red;"><?php if ($_POST['email'] == "") {echo "thiếu email";} ?></span>
            </div>
            <br>
            <div>
                <label for="">Select Title</label>
                <select name="option" id="">
                    <option value="0">Mr.</option>
                    <option value="0">Ms.</option>  
                </select>
                <label for="">Full Name</label>
                <input type="text" name="names"> <span style="color:red;"><?php if ($_POST['names'] == "") {echo "thiếu full name";} ?></span>
            </div>
            <br>
            <div>
                <label for="">Company Name</label>
                <input type="text" name="company"> <span style="color:red;"><?php if ($_POST['company'] == "") {echo "thiếu company name";} ?></span>
                <br>
                <br>
                <input type="checkbox" onchange="checkbox()"><span>I am agree with registration</span>
            </div>
            <br>
            <button type="submit" disabled>Register</button>
            <h1 style="color:green;"> 
                <?php
                    if ($_POST['user'] != "" && $_POST['email'] != "" && $_POST['names'] != "" && $_POST['company'] != "") {
                        echo "Đăng nhập thành công";
                    }
                ?>
            </h1>
        </form>
    <script>
        function checkbox() {
                var checkbox = document.querySelector("input[type=checkbox]");
                var button = document.querySelector("button[type=submit]");
                button.disabled = !checkbox.checked ? true : false;
        }
    </script>
</body>
</html>