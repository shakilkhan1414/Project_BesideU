<?php 
    session_start();
    require_once "connection.php";

     if(isset($_SESSION['flag'])){
        
        $sender_id = $_SESSION['id'];
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $send_message = mysqli_real_escape_string($con, $_POST['message']);
        $send_time=date("d-m-Y h:i:s a");
        if(!empty($send_message)){
            $sql = mysqli_query($con, "INSERT INTO world_chat (sender_id,send_message,send_time)
                                        VALUES ('$sender_id', '$send_message', '$send_time')") or die();

        }   
    }else{
        header("location: ../view/login.html");
    }
?>