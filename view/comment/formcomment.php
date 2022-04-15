<?php
    session_start();
    include '../../model/pdo.php';
    include '../../model/binhluan.php';
    $idproduct = $_REQUEST['idproduct'];
    $list = loadall_binhluan_idpro($idproduct);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="comment-list">
    <?php
        foreach($list as $binhluan){
            extract($binhluan);
            echo '
            <div class="comment-item">
                <p class="date">'.$ngay.'</p>
                <div class="name"><b>'.$name.'</b><i class="bx bxs-badge-check"></i>
                </div>
                        <p class="content">
                            '.$noidung.'
                        </p>
                        <a href="#" class="like">Like</a>
            </div>
            ';
        }
    ?>
    <?php if(isset($_SESSION['user'])&&($_SESSION['user'])){
        extract($_SESSION['user']); ?>
    <div class="comment-input">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="hidden" name="idpro" value="<?=$idproduct?>">
            <input type="text" name="noidung" cols="30" rows="5" placeholder="Nhập bình luận của bạn về sản phẩm..">
            <input type="submit" name="guibinhluan" value="Gửi">
        </form>
    </div>
    <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $idproduct = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $name = $_SESSION['user']['name'];
            $ngay = date('d/m/Y');
            insert_binhluan_idpro($iduser, $idproduct, $name, $noidung, $ngay);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    ?>
    <?php }else{?>
        <p class="mess-cmt">* Đăng nhập để thực hiện thức năng bình luận</p>
    <?php } ?>
</div>
</body>
</html>