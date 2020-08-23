<?php
include_once 'dbh.php';
    if(isset($_REQUEST["register"]))
    {

        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        if(!empty($email)&&!empty($first_name)&&!empty($last_name))
        {
            $obj = new DB();
            $stmt = $obj->connect()->prepare("insert into users(first_name,last_name,email)values(:first_name,:last_name,:email);");
            $stmt->bindParam(':first_name',$first_name);
            $stmt->bindParam(':last_name',$last_name);
            $stmt->bindParam(':email',$email);
            $stmt->execute();
            header('location:showUserInfo.php');
        }
        else{
            print "Mising Data! Check This Form";
            header('location:index.php');
        }
    }

?>