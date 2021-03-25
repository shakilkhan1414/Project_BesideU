<?php 
    session_start();
    require_once "connection.php";
    $imgsql="select * from user_list where id='$_REQUEST[msg_id]'";
    $imgresult=$con->query($imgsql);
    $imgrow=$imgresult->fetch_assoc();

    if(isset($_SESSION['flag'])){

        $id = $_SESSION['id'];
        
        $output = "";
    
        $sql = "SELECT * FROM inbox where sender_id='$_REQUEST[msg_id]' and received_id='$_SESSION[id]' or sender_id='$_SESSION[id]' and received_id='$_REQUEST[msg_id]'";
        
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['sender_id'] == $id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['message'] .'</p>
                                </div>
                                </div>';
                }else{        
                        $img="../../img/user/".$imgrow['profile_picture'];
                    $output .= '<div class="chat incoming">
                                <img src="'.$img.'"alt="">
                                <div class="details">
                                    <p>'. $row['message'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../view/login.html");
    }
?>