    <?php
        session_start();

        include "model/pdo.php";
        include "model/sanpham.php";
        include "model/taikhoan.php";
        include "model/cart.php";
        include "model/danhmuc.php";
        include "global.php";
    
        if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    
        $spnew=loadall_sanpham_home();
        $dsdm=loadall_danhmuc();
        $dstop10=loadall_sanpham_top10();
        $sp=loadall_sanpham($keyw="",$iddm=0);
    
    ?>
    <?php require_once 'view/header.php'?>
    <!-- Slider Images -->
    <?php if(isset($_GET['act'])=="") require_once 'view/slider.php';?>

    <!-- Home -->
    <?php
        if(isset($_GET['act']) && ($_GET['act']!="")){
            $act=$_GET['act'];
            switch ($act) {
                case 'product':
                    if(isset($_POST['kyw']) && ($_POST['kyw'] !="")){
                        $kyw=trim(strip_tags($_POST['kyw']));
                        $dssp=loadall_sanpham($kyw,$iddm);
                        $tendm=loadten_dm($iddm);
                        require_once 'view/search.php';
                    } else{
                        $kyw="";
                    }
                    
                    if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                        $iddm=$_GET['iddm'];
                        $dssp=loadall_sanpham($kyw,$iddm);
                        $tendm=loadten_dm($iddm);
                        require_once 'view/product.php';
                    } else {
                        $iddm=0;
                    }

                    if(isset($_POST['kyw'])=='' && isset($_GET['iddm'])==0){
                        $dssp=loadall_sanpham($kyw,$iddm);
                        $tendm=loadten_dm($iddm);
                        require_once 'view/product.php';
                    }
                    break;
                case 'product-detail':
                    if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)){
                        $id=$_GET['idsp'];
                        $onesp = loadone_sanpham($id);
                        extract($onesp);
                        $sp_cungloai=load_sanpham_cungloai($id,$iddm);
                        include "view/product-detail.php";
                    } else {
                        include "view/home.php";
                    }
                    break;
                case 'login':
                    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                        $user=trim(strip_tags($_POST['user']));
                        $password=trim(strip_tags($_POST['password']));
                        $checkuser=checkuser($user,$password);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            // $thongbao="????ng Nh???p Th??nh C??ng";
                            header('Location: index.php');
                        } else{
                            $thongbao="T??i Kho???n Kh??ng T???n T???i";
                        }
                        
                    }
                    include "view/taikhoan/dangki.php";
                    break;
                case 'logout':
                    session_unset();
                    break;
                case 'tuyendung':
                    if(isset($_POST['tuyendung']) && ($_POST['tuyendung'])){
                        $ten=trim(strip_tags($_POST['ten']));
                        $sdt=trim(strip_tags($_POST['sdt']));
                        $email=trim(strip_tags($_POST['email']));
                        $diachi=trim(strip_tags($_POST['diachi']));
                        $mota=trim(strip_tags($_POST['mota']));
                        $vitri=trim(strip_tags($_POST['vitri']));
                        insert_tuyendung($ten,$sdt,$email,$diachi,$mota,$vitri);
                        $thongbao="????ng K?? Th??nh C??ng";
                    }
                    include "view/tuyendung.php";
                    break;
                case 'register':
                    if(isset($_POST['dangki']) && ($_POST['dangki'])){
                        $name=trim(strip_tags($_POST['name']));
                        $email=trim(strip_tags($_POST['email']));
                        $user=trim(strip_tags($_POST['user']));
                        $password=trim(strip_tags($_POST['password']));
                        $diachi=trim(strip_tags($_POST['diachi']));
                        $sdt=trim(strip_tags($_POST['sdt']));
                        insert_taikhoan($name,$email,$user,$password,$diachi,$sdt);
                        $thongbao="????ng K?? Th??nh C??ng. Vui L??ng ????ng Nh???p";
                    }
                    include "view/users/register.php";
                    break;
                case 'about':
                    include "view/about.php";
                    break;
                case 'sendpass':
                    $thongbao = "";
                    if (isset($_POST['quenmk'])==true) {
                        $email = $_POST['email'];
                        $conn = new PDO("mysql:host=localhost;dbname=duanmau;charset=utf8", "root", "");
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "SELECT * FROM taikhoan WHERE email = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute( [$email] );
                        $count = $stmt->rowCount();
                        if($count==0){
                            $thongbao = "Email b???n nh???p ch??a ????ng k?? th??nh vi??n v???i ch??ng t??i";
                        }else{
                            $newpass = substr(md5(rand(0,999999)),0,8);
                            $sql = "UPDATE taikhoan SET password = ? WHERE email = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute( [$newpass, $email] );
                            $thongbao = "???? C???p Nh???t";
                            require_once "model/PHPMailer-master/src/PHPMailer.php";
                            require_once "model/PHPMailer-master/src/Exception.php";
                            require_once "model/PHPMailer-master/src/OAuth.php";    
                            require_once "model/PHPMailer-master/src/SMTP.php";
                            $mail = new PHPMailer\PHPMailer\PHPMailer(true);     
                            try {        
                                $mail->SMTPDebug = 0;   //ch??? ????? full debug, khi m???i th??? ok th?? ch???nh l???i 0
                                $mail->isSMTP();       // Set mailer to use SMTP
                                $mail->Host = 'smtp.gmail.com';  // Server g???i th??
                                $mail->SMTPAuth = true;
                                $mail->Username = 'trungtinhuynh0147@gmail.com';  // v?? d???: abc@gmail.com
                                $mail->Password = 'trungtin210820@@';
                                $mail->SMTPSecure = 'ssl'; //TLS ho???c `ssl` 
                                $mail->Port = 465;    // 587 ho???c 465
                                $mail -> CharSet = "UTF-8"; 
                                $mail->smtpConnect([ "ssl" => [
                                        "verify_peer"=>false,
                                        "verify_peer_name" => false,
                                        "allow_self_signed" => true
                                        ]
                                    ]
                                );        
                                //Khai b??o ng?????i g???i v?? ng?????i nh???n mail        
                                $mail->setFrom('trungtinhuynh0147@gmail.com', 'Hu???nh Trung T??n');
                                $mail->addAddress($email); 
                                $mail->isHTML(true);  // n???i dung c???a email c?? m?? HTML
                                $mail->Subject = 'Th?? g???i m???t kh???u m???i';
                                $mail->Body = "????y l?? m???t kh???u m???i c???a b???n <b> {$newpass} </b>";
                                $mail->send();
                                $thongbao .= "???? g???i mail th??nh c??ng<br>";
                            } catch (Exception $e) {
                                    $thongbao .= "L???i khi g???i th??: " . $mail->ErrorInfo;
                            }

                        }
                    }
                    require_once "view/users/sendpass.php";
                    break;
                case 'edit_user':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
    
                        $name=trim(strip_tags($_POST['name']));
                        $email=trim(strip_tags($_POST['email']));
                        $user=trim(strip_tags($_POST['user']));
                        $password=trim(strip_tags($_POST['password']));
                        $diachi=trim(strip_tags($_POST['diachi']));
                        $sdt=trim(strip_tags($_POST['sdt']));
                        $id=$_POST['id'];
    
                        update_taikhoan($id,$user,$password,$diachi,$sdt,$email,$name,$role);
                        $_SESSION['user']=checkuser($user,$password);
                        
                    }
                    include "view/users/edit_user.php";
                    break;
                case 'mybill':
                    $iduser=$_SESSION['user']['id'];
                    $listbill=loadall_bill($iduser);
                    include "view/cart/mybill.php";
                    break;
                case 'addtocart':
                    if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                        $id=trim(strip_tags($_POST['id']));
                        $name=trim(strip_tags($_POST['name']));
                        $price=trim(strip_tags($_POST['price']));
                        $img=trim(strip_tags($_POST['img']));
                        $soluong=trim(strip_tags($_POST['soluong']));
                        $ttien=$soluong * $price;
                        $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                        if(empty($_SESSION['mycart'])){
                        $_SESSION['mycart'][$id]=$spadd;                 
                        }else{
                        $array_key=array_keys($_SESSION['mycart']);
                        if(in_array($id,$array_key)){
                            $_SESSION['mycart'][$id][4]+=$soluong;
                        }else{
                            $_SESSION['mycart'][$id]=$spadd; 
                        }
                    }
                }
                    include "view/cart/viewcart.php";
                    break;
                case 'delcart':
                    if(isset($_GET['idcart'])){                 
                        unset($_SESSION['mycart'][$_GET['idcart']]);
                        
                    } else { 
                        $_SESSION['mycart']=[];
                    }
                    header('Location: index.php?act=viewcart');
                    
                    break;
                case 'bill-confirm':
                    if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
    
                        if (isset($_SESSION['user'])) {
                            $iduser = $_SESSION['user']['id'];
                        } else {
                            $iduser = 0;
                        }
    
                        $name=trim(strip_tags($_POST['name']));
                        $email=trim(strip_tags($_POST['email']));
                        $diachi=trim(strip_tags($_POST['diachi']));
                        $sdt=trim(strip_tags($_POST['sdt']));
                        $ngaydathang=date('h:i:sa d/m/Y');
                        $tongdonhang=tongdonhang();
    
                        $idbill=insert_bill($iduser,$name,$email,$diachi,$sdt,$ngaydathang,$tongdonhang);
    
                        // insert into cart : $sesstion['mycart'] & id bill
    
                        foreach ($_SESSION['mycart'] as $cart) {
                            insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                        }
                        
                        $_SESSION['mycart']=[];
                    }
                    $bill=loadone_bill($idbill);
                    $billct=loadall_cart($idbill);
                    include "view/cart/bill-confirm.php";
                    break;
                case 'viewcart':
                    include "view/cart/viewcart.php";
                    break;
                case 'check-out':
                    include "view/cart/check-out.php";
                    break;
                default:
                    include "view/home.php";
                    break;
                    }
        } else {
            include "view/home.php";
        }
    ?>

    <!--  footer -->
    <?php require_once 'view/footer.php' ?>