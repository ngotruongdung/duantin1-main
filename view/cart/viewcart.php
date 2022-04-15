<section class="cart">
    <h1>Giỏ hàng của bạn</h1>
    <p>Có <b><?=count($_SESSION['mycart'])?></b> sản phẩm trong giỏ hàng</p>
    <div class="container">
        <div class="cart-list">
            <?php
                $tong=0;
                $i=1;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $cart[2];
                    $tong+=$cart[5];
                    $xoasp = 'index.php?act=delcart&idcart='.$cart[0].'';
            ?>
            <div class="cart-item">
                <img src="<?=$hinh?>" alt="this is picture">
                <div class="cart-info">
                    <b><?=$cart[1]?></b>
                    <p><?=number_format($cart[3],0, ',', '.')?>đ</p>
                    <p>S / White</p>
                    <p><?=$cart[4]?></p>
                </div>
                <div class="cart-del">
                    <a href="<?=$xoasp?>">x</a>
                    <b><?=number_format($cart[5],0, ',', '.')?> đ</b>
                </div>
            </div>
            <?php $i+=1; } ?>
        </div>

        <div class="cart-total">
            <h3>Thông tin đơn hàng</h3>
            <div class="total">
                <p>Tổng tiền:</p>
                <span><?=number_format($tong,0, ',', '.')?>đ</span>
            </div>
            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
            <p> Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
            <a href="index.php?act=check-out" class="btn">Thanh toán</a>
            <a href="index.php?act=product"><i class="fas fa-chevron-left"></i> Tiếp tục mua hàng</a>
        </div>
    </div>
</section>