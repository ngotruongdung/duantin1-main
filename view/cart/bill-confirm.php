
<section class="bill-confirm">
    <form action="index.php?act=bill-confirm" method="post">

        <?php

            if(isset($bill) && (is_array($bill))){
                extract($bill);
            }
        
        ?>
        <div class="box">
            <h3>Đơn Hàng Của Quý Khách</h3>
            <div class="title"></div>
            <span>DON-<?=$bill['id'];?></span>
            <span>Tổng <?=$bill['total'];?>đ</span>
            <p>Ngày <?=$bill['ngaydathang'];?></p>
        </div>
        <div class="box">
            <h3>Thông Tin Đặt Hàng</h3>
                    <p>Người Đặt Hàng: <span><?=$bill['bill_name'];?></span></p>
                    
                    <p>Địa Chỉ: <span><?=$bill['bill_diachi'];?></span></p>
                    
                    <p>Email: <span><?=$bill['bill_email'];?></span></p>
                    
                    <p>Số Điện Thoại: <span><?=$bill['bill_sdt'];?></span></p>
                    
        </div>
        <div class="box">
            <h3>Thông Tin Giỏ Hàng</h3><div class="title"></div>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Sản Phẩm</th>
                    <th>Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                </tr>
                <?php
                    bill_chi_tiet($billct);
                ?>
            </table>
        </div>
        <a href="index.php"><input type="button" value="Quay Lại Cửa Hàng" class="btn"></a>
    </form>
</section>