<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    
    <title>Login</title>
</head>

<body>

    <?php include 'navbar_signin.php'; ?>
    <section class="login">
        <p class="title d-flex justify-content-center">เข้าสู่ระบบ</p>
        <div class="container d-flex justify-content-center">
            <form method="POST" action="Check_login.php">
                <div class="txt_field d-flex justify-content-center">
                    <label for="Username">ชื่อผู้ใช้</label>
                    <input type="text" required name="Username" id="Username" placeholder="example@company.com">
                </div>
                <div class="txt_field d-flex justify-content-center">
                    <label for=" password">รหัสผ่าน</label>
                    <input type="Password" required name="password" id="password" placeholder="********">
                </div>
                <?php if (isset($_SESSION['Error'])) {
                    echo "<div class='text-danger'> ";
                    echo $_SESSION['Error'];
                    echo '</div>';
                } ?>
                <div class="container d-flex justify-content-center">
                    <input type="submit" name="btn_login" value="Login">
                </div>

            </form>
        </div>
    </section>
    <section class="register_text">
        <div class="container d-flex justify-content-center">
            <p class="register">ถ้ายังไม่เป็นสมาชิก</p>
            <a href="register.php">กดตรงนี้</a>
            <p class="register">เพื่อสมัครสมาชิก</p>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>