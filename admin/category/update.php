<?php

    if(is_array($dm)){
        extract($dm);
    }

?>

<div class="main-admin">
        <h3>CẬP NHẬP DANH MỤC</h3>
        <form action="index.php?act=updatecategory" method="post">
            <input type="text" name="" disabled value="auto">
            <input type="text" name="tenloai" value="<?php if(isset($name) && ($name!="")) echo $name?>" required>
            <div class="btn">
                <input type="hidden" name="id" value="<?php if(isset($id_danhmuc) && ($id_danhmuc>0)) echo $id_danhmuc?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Reset">
                <a href="index.php?act=listcategory"><input type="button" value="Danh sách"></a> 
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>