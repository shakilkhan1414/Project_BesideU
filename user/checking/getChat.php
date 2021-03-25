<?php 
    session_start();
    require_once "connection.php";

    if(isset($_SESSION['flag'])){

        $id = $_SESSION['id'];
        
        $output = "";
    
        $sql = "SELECT * FROM world_chat LEFT JOIN user_list ON world_chat.sender_id = user_list.id";
        
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                    $img="../../img/user/".$row['profile_picture'];
                    $datetime=$row['send_time'];
                    $dt = new DateTime($datetime);
                    $time = $dt->format('h:i:s a');
                    // $new_time = date("H:i:s a", strtotime('+5 hours', strtotime($time)));
                    
                    $output .= '<div class="chat incoming">
                                    <img src="'.$img.'">
                                    <div class="details">   
                                        <p><a href="viewProfile.php?id='.$row['id'].'">'.$row['name'].'</a><br>'.$row['send_message'].'<span>'.$time.'</span></p>
                                    </div>
                                </div>';
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../view/login.html");
    }
?>