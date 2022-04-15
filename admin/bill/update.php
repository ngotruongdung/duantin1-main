<?php

    if(is_array($bill)){
        extract($bill);
    }

?>

<div class="main-admin">
        <h3>Cập Nhập Đơn Hàng</h3>
        <form action="index.php?act=updatebill" method="post">
        <span>ID Đơn Hàng</span>
        <input type="text" name="id" disabled value="DON-<?=$bill['id']?>">

        <span>Trạng Thái Đơn Hàng</span>
        <select name="status" >
            <option value="0">Đơn hàng mới</option>
            <option value="1">Đang xử lí</option>
            <option value="2">Đang giao hàng</option>
            <option value="3">Đã giao hàng</option>
        </select>
            <div class="btn">
                <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Reset">
                <a href="index.php?act=listbill"><input type="button" value="Danh sách"></a> 
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>