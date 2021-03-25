<?php 
    require_once "connection.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];

        $sql="SELECT * from user_list where username='$username' and password='$password'";
        $result=$con->query($sql);
            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                $_SESSION['flag'] = true;
                $_SESSION['name']=$row['name'];
                $_SESSION['id']=$row['id'];
                header('location: ../view/home.php');
            }
            else{
                echo "Invalid username or password ...";
            }
        }
        
?>