<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolyStor</title>
    <link rel="icon" href="./images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="search">
        <h1>Tìm Kiếm</h1>
        <p>Có <b><?=count($dssp)?></b> sản phẩm trong mục tìm kiếm</p>
        <span>Kết quả tìm kiếm cho <b>"<?=$kyw?>"</b></span>
        <div class="product">
            <?php
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp="index.php?act=product-detail&idsp=".$id;
                echo '
                    <a href="'.$linksp.'" class="product-item">
                        <img src="'.$img.'" alt="this is picture">
                        <b>'.$name_sp.'</b>
                        <p>'.number_format($price,0, ',', '.').' đ</p>
                    </a>
                    ';
            }
        ?>
        </div>
    </section>
</body>

</html>