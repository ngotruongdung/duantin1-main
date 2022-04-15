<?php

    if(is_array($sp)){
        extract($sp);
    }

    $hinhpath="../upload/".$img;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='550'>";
        } else{
            $hinh="no photo";
    }

?>

<div class="main-admin">
    <h3>cập nhập hàng hóa</h3>
    <form action="index.php?act=updatepro" method="POST" enctype="multipart/form-data">
        <select name="iddm">
            <option value="0" selected>Tất Cả</option>
            <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if ($iddm == $id_danhmuc) {
                                $s = "selected";
                            } else {
                                $s = "";
                            }
                            echo '<option value="' . $id_danhmuc . '" ' . $s . '>' . $name . '</option>';
                        }
                    ?>
        </select>

        <input type="text" name="tensp" value="<?=$name_sp?>" required>

        <input type="text" name="giasp" value="<?=$price?>" required>

        <input type="text" name="hinh" value="<?=$img?>" required>

        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
        <div class="btn">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value="Cập Nhật">
            <input type="reset" value="Reset">
            <a href="index.php?act=listpro">
                <input type="button" value="Danh sách">
            </a>
        </div>
        <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
    </form>
</div>