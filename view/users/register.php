<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolyStor</title>
    <link rel="icon" href="./images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <seciton class="register">
        <div class="title">
            <h1>Tạo Tài Khoản</h1>
        </div>
        <div class="form-register">
        <?php
            if(isset($thongbao) && ($thongbao!="")){
                echo '
                    <h5 style="margin: 10px 0 0 80px">'.$thongbao.'</h5>
                ';
            }
        ?>
            <form action="index.php?act=register" method="post">
                <input type="text" name="name" id="" placeholder="Họ và tên" required>
                <input type="text" name="user" id="" placeholder="User name" required>
                <input type="email" name="email" id="" placeholder="Email" required>
                <input type="text" name="diachi" id="" placeholder="Địa chỉ" required>
                <input type="text" name="sdt" id="" placeholder="Số điện thoại" required>
                <input type="password" name="password" id="" placeholder="Mật khẩu" required>
                <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                <input type="submit" name="dangki" id="" value="Đăng Kí" required>
            </form>
            
            <a href="index.php"><i class="fas fa-angle-left"></i> Quay lại trang chủ</a>
        </div>
    </seciton>
</body>
</html>