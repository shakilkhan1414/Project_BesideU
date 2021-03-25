<?php 
    session_start();
    require_once "connection.php";

     if(isset($_SESSION['flag'])){
        
        $sender_id = $_SESSION['id'];
        $received_id = mysqli_real_escape_string($con, $_POST['msg_id']);
        $send_message = mysqli_real_escape_string($con, $_POST['message']);
        $send_time=date("M,d,Y h:i:s A");
        if(!empty($send_message)){
            $sql = mysqli_query($con, "INSERT INTO inbox VALUES ('','$sender_id', '$received_id', '$send_message', '$send_time')") or die();

        }   
    }else{
        header("location: ../view/login.html");
    }
?>