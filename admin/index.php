<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "header.php";
    include "dashboard.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {

            // Thêm - Sửa - Xóa Danh Mục
            case 'addcategory':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=trim(strip_tags($_POST['tenloai']));
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm mới thành công";
                }
                include "category/add.php";
                break;
            case 'listcategory':
                $listdanhmuc=loadall_danhmuc();
                include "category/list.php";
                break;
            
            case 'delcategory':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "category/list.php";
                break;

            case 'editcategory':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "category/update.php";
                break;

            case 'updatecategory':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "category/list.php";
                break;

        // Thêm - Sửa - Xóa Sản Phẩm
        case 'addpro':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $mausp=$_POST['mausp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_POST['hinh'];
                $tensp .= $mausp;

                
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao="thêm mới thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            include "product/add.php";
            break;

        case 'listpro':
            if(isset($_POST['timsp'])&&($_POST['timsp'])){
                $keyw=$_POST['keyw'];
                $iddm=$_POST['iddm'];
            } else{
                $keyw='';
                $iddm=0;
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham($keyw,$iddm);
            include "product/list.php";
            break;

        case 'delpro':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadall_sanpham('',0);
            include "product/list.php";
            break;

        case 'editpro':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $sp=loadone_sanpham($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "product/update.php";
            break;

        case 'updatepro':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_POST['hinh'];
        
                update_sanpham($tensp, $giasp, $hinh, $mota, $iddm, $id);
                $thongbao="cập nhật thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham('',0);
            include "product/list.php";
            break;


        // Xem - Xóa Tài Khoản

        case 'listuser':
            $listtaikhoan=loadall_taikhoan();
            include "user/list.php";
            break;
        case 'deluser':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan=loadall_taikhoan();
            include "user/list.php";
            break;



        // Xem Xóa Bình Luận
        case 'listcmm':
            $listbinhluan=loadall_binhluan();
            include "comment/list.php";
            break;
        case 'delcmm':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_binhluan($_GET['id']);
            }
            $listbinhluan=loadall_binhluan();
            include "comment/list.php";
            break;

        // Xem Xóa Sửa Đơn Hàng
        case 'listbill':
            if(isset($_POST['keyw']) && ($_POST['keyw']!="")){
                $keyw=$_POST['keyw'];
            } else{
                $keyw="";
            }
            $listbill=loadall_bill_admin($keyw,0);
            include "bill/list.php";
            break;
        case 'editbill':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $bill=loadone_bill($_GET['id']);
            }
            include "bill/update.php";
            break;

        case 'updatebill':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id=$_POST['id'];
                $status=$_POST['status'];
                update_bill($id,$status);
                $thongbao="cập nhật thành công";
            }
            $listbill= loadall_bill_admin(0);
            include "bill/list.php";
            break;

        case 'delbill':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_bill($_GET['id']);
            }
            $listbill= loadall_bill_admin(0);
            include "bill/list.php";
            break;
        case 'editbill':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $bill=loadone_bill($_GET['id']);
            }
            include "bill/update.php";
            break;

        case 'updatebill':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id=$_POST['id'];
                $status=$_POST['status'];
                update_bill($id,$status);
                $thongbao="cập nhật thành công";
            }
            $listbill= loadall_bill_admin(0);
            include "bill/list.php";
            break;
        // Thống Kê
        case 'listanalysis':
            $listthongke=loadall_thongke();
            include "analysis/list.php";
            break;
        case 'analysis':
            $listthongke=loadall_thongke();
            include "analysis/analysis.php";
            break;
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
    include "footer.php";

?>