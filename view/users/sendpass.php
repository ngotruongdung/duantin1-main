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
            <h1>Quên Mật Khẩu</h1>
        </div>
        <div class="form-register">
            <?php if($thongbao!=""){ ?>
                <h5 style="margin: 10px 0 0 70px"><?=$thongbao?></h5>
            <?php } ?>
            <form action="index.php?act=sendpass" method="post">
                <input type="email" name="email" id="" placeholder="Nhập email dùng khi đăng kí" required>
                <input type="submit" name="quenmk" id="" value="Xác nhận"/>
            </form>
            
            <a href="#"><i class="fas fa-angle-left"></i> Quay lại trang chủ</a>
        </div>
    </seciton>
</body>
</html>