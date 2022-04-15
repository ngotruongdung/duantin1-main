
<section class="check-out">
    <div class="info">
        <h3>PolyStor</h3>
        <p>Thông tin giao hàng</p>
        <?php
                    if(isset($_SESSION['user'])){
                        $name=$_SESSION['user']['name'];
                        $diachi=$_SESSION['user']['diachi'];
                        $email=$_SESSION['user']['email'];
                        $sdt=$_SESSION['user']['sdt'];
                    } else{
                        $name="";
                        $diachi="";
                        $email="";
                        $sdt="";
                    }
        ?>
        <form action="index.php?act=bill-confirm" method="post">
            <input type="text" name="name" id="" placeholder="Họ và tên" value="<?=$name?>">
            <input type="email" name="email" id="" placeholder="Email" value="<?=$email?>">
            <input type="text" name="sdt" id="" placeholder="Số điện thoại" value="<?=$sdt?>">
            <input type="text" name="diachi" id="" placeholder="Địa chỉ" value="<?=$diachi?>">
            <input type="submit" value="Hoàn Tất Đơn Hàng" class="btn" name="dongydathang">
            <a href="index.php?act=product"><i class="fas fa-chevron-left"></i> Tiếp tục mua hàng</a>
        </form>
    </div>
    <div class="total">
        <div class="check-out-list">
                <?php
                    viewcart();
                ?>
        </div>
        <div class="check-out-voucher">
            <form action="" method="post">
                <input type="text" name="" id="" placeholder="Mã giảm giá">
                <input type="submit" value="Sử Dụng" class="btn">
            </form>
        </div>
    </div>
</section>
