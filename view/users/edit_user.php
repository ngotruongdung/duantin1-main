
    <seciton class="register">
        <div class="title">
            <h1>Sửa Tài Khoản</h1>
        </div>
        <div class="form-register">
        <?php
            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
        ?>
            <form action="index.php?act=edit_user" method="post">
                <input type="text" name="name" id="" value="<?=$name?>" required>
                <input type="text" name="user" id="" value="<?=$user?>" required>
                <input type="text" name="email" id="" value="<?=$email?>" required>
                <input type="text" name="diachi" id="" value="<?=$diachi?>" required>
                <input type="text" name="sdt" id="" value="<?=$sdt?>" required>
                <input type="text" name="password" id="" value="<?=$password?>" required>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" id="" value="Cập nhật" required>
            </form>
            
            <a href="#"><i class="fas fa-angle-left"></i> Quay lại trang chủ</a>
        </div>
    </seciton>