<?php
    extract($onesp);
?>
<section class="product-one">
    <?php
        echo '
        <div class="product-info">

            <img src="'.$img.'" alt="">

            <div class="content">
                <div class="name">
                    <h4>'.$name_sp.'</h4>
                    <p>SKU: ORP157 - S</p>
                </div>
                <div class="price">
                    <span>'.number_format($price,0, ',', '.').'đ</span>
                </div>
                <form action="index.php?act=addtocart" method="post">
                    <div id="field1">
                    <button type="button" id="sub" class="sub">-</button>
                    <input type="number" name="soluong" id="1" value="1" min="1" max="10" />
                    <button type="button" id="add" class="add">+</button>
                    </div>
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name_sp.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn">
                </form>
                <div class="desc">
                    <ul>
                        <h4>Mô Tả</h4>
                        <li>Gồm 3 size: S / M / L </li>
                        <li>'.$mota.'</li>
                    </ul>
                </div>
            </div>
        </div>
        ';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#binhluan").load("view/comment/formcomment.php", {
            idproduct: <?=$id?>
        });
    });
    </script>
    <!-- <div class="comment" id="binhluan">

    </div> -->

    <div class="product-similar">
        <h3 class="heading">Sản Phẩm Cùng Loại</h3>
        <div class="product">
            <?php
                $i=0;
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $linksp="index.php?act=product-detail&idsp=".$id;
                    echo'
                    <a href="'.$linksp.'" class="product-item">
                    <img src="'.$img.'" alt="">
                    <b>'.$name_sp.'</b>
                    <p>'.number_format($price,0, ',', '.').' đ</p>
                    </a>
                    ';
                $i+=1;
                if($i>3){
                    break;
                }
                }
            ?>
        </div>
    </div>


    <div class="tags">
        <h3>Haftag:</h3>
        <div class="tags-item">
            <span class="tags-text">Áo thun</span>
            <i class='bx bx-x'></i>
        </div>
        <div class="tags-item">
            <span class="tags-text">Hoodie</span>
            <i class='bx bx-x'></i>
        </div>
        <div class="tags-item">
            <span class="tags-text">Sản phẩm mới</span>
            <i class='bx bx-x'></i>
        </div>
        <div class="tags-item">
            <span class="tags-text">PolyStor</span>
            <i class='bx bx-x'></i>
        </div>
        <div class="tags-item">
            <span class="tags-text">Brand</span>
            <i class='bx bx-x'></i>
        </div>
    </div>


</section>