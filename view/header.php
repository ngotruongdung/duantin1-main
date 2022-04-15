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
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=2632700360189650&autoLogAppEvents=1"
        nonce="hNcMShpx"></script>
</head>

<body>
    <!-- Header -->
    <header class="header">

        <div class="header-main">
            <i class='bx bx-menu-alt-left' id="menu-btn"></i>
            <img src="./images/logo.png" alt="" class="logo">
            <div class="phone icon">
                <i class="fas fa-phone-alt"></i>
                <div class="infor">
                    <b>Hotline mua hàng</b>
                    <p>Gọi ngay: 086 2642568‬</p>
                </div>
            </div>
            <div class="ship icon">
                <i class="fas fa-shipping-fast"></i>
                <div class="infor">
                    <b>Giao hàng tận nơi</b>
                    <p>Miễn phí từ 5 sản phẩm‬</p>
                </div>
            </div>

            <div class="trade icon">
                <i class="fas fa-sync-alt"></i>
                <div class="infor">
                    <b>1 Đổi 1 nếu lỗi hàng</b>
                    <p>Trong vòng 7 ngày‬</p>
                </div>
            </div>

            <div class="login icon" id="login-btn">
                <i class="fas fa-user-circle"></i>
                <div class="infor">
                    <b>Đăng nhập / Đăng kí</b>
                    <p >Tài khoản của tôi <i class="fas fa-chevron-down"></i>‬</p>
                </div>
            </div>
            <a href="index.php?act=addtocart" class="cart icon">
                <i class="fas fa-shopping-bag"></i>
                <b>Giỏ hàng</b>
            </a>

        </div>

        <div class="header-menu">
            <div class="nav">
                <a href="index.php" class="active">Trang Chủ</a>
                <a href="index.php?act=about">giới Thiệu</a>
                <a href="index.php?act=product">Sản Phẩm</a>
                <a href="index.php?act=tuyendung">Tuyển Dụng</a>
            </div>
            <div class="search">
                <form action="index.php?act=product" method="post">
                    <input type="text" name="kyw" id="" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit" name="timkiem"><i class='bx bx-search-alt'></i></button>
                </form>
            </div>
            
        </div>

        <div class="login-form">
        <?php
                if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            ?>
            <form action="" method="post">
                <h3>Tài Khoản</h3>
                <span>Xin chào, <b><?=$name?></b></span>
                <a href="index.php?act=mybill"><i class="fas fa-shopping-cart"></i> Đơn Hàng Của Tôi</a>
                <a href="index.php?act=sendpass"><i class="fas fa-unlock"></i> Quên mật khẩu</a>
                <a href="index.php?act=edit_user"><i class="fas fa-pen"></i> Cập nhật thông tin</a>


                <?php
                    if($role==1){
                ?>
                <a href="admin/index.php"><i class="fas fa-user-shield"></i> Đăng nhập Admin</a>
                <?php };?>
                <a href="index.php?act=logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
            </form>
            <?php

                }else{
            ?>

                <form action="index.php?act=login" method="post">
                <h3>Đăng Nhập</h3>
                    <input type="text" name="user" placeholder="Tài khoản">
                    <input type="password" name="password" placeholder="Mật Khẩu">
                <input type="submit" value="Đăng nhập" name="dangnhap" class="btn-login">
                <a href="index.php?act=register">Đăng kí tài khoản</a>
                <a href="index.php?act=sendpass">Quên mật khẩu?</a>
            </form>

            <?php }?>
        </div>
    </header>