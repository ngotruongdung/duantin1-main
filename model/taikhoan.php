<?php

    function insert_taikhoan($name,$email,$user,$password,$diachi,$sdt){
        $sql="insert into taikhoan(name,email,user,password,diachi,sdt) values('$name','$email','$user','$password','$diachi','$sdt')";
        pdo_execute($sql);
    }

    function insert_tuyendung($ten,$sdt,$email,$diachi,$mota,$vitri){
        $sql="insert into tuyendung(ten,sdt,email,diachi,mota,vitri) values('$ten','$sdt','$email','$diachi','$mota','$vitri')";
        pdo_execute($sql);
    }

    function checkuser($user,$password){
        $sql="select * from taikhoan where user='".$user."' AND password='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id,$user,$password,$diachi,$sdt,$email,$name,$role){
        $sql="update taikhoan set name='".$name."', email='".$email."', user='".$user."', password='".$password."', diachi='".$diachi."', sdt='".$sdt."', role='".$role."' where id=".$id;
        pdo_execute($sql);
    }

    function checkemail($email){
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }

    function loadone_taikhoan($id){
        $sql="select * from taikhoan where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function delete_taikhoan($id){
        $sql="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }

?>