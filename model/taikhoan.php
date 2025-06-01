<?php
    function loadall_taikhoan(){
        $sql="SELECT * FROM taikhoan ORDER BY id DESC";
        $listtaikhoan= pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($user,$pass,$email,$address,$tel){
        $sql= "INSERT INTO `taikhoan` (`user`,`pass`,`email`,`address`,`tel`) VALUES('$user','$pass','$email','$address','$tel')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."' ";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql="SELECT * FROM taikhoan WHERE email='".$email."'";;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql= "UPDATE `taikhoan` SET `user` = '".$user."',`pass` = '".$pass."',`email` = '".$email."',`address` = '".$address."',`tel` = '".$tel."' WHERE `taikhoan`.`id` ='$id'";
        pdo_execute($sql);
    }
    function delete_taikhoan($id){
        $sql="UPDATE `taikhoan` SET `kiemtratk` = '1' WHERE  `taikhoan`.`id` = ".$id;
        pdo_execute($sql);
    }
    
?>