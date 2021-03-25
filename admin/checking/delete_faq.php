<?php 
    require_once "connection.php";
    
    if(isset($_GET['id'])){
        $del_sql="Delete from faq where id='$_GET[id]'";
		if($con->query($del_sql)){
            header('location: ../view/faq_list.php');
        }
        else{
            echo "Something went wrong,try again ...";
        }
    }

?>