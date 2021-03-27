<?php 
    session_start();
    require_once "../checking/connection.php";
    $sql="select * from inbox where sender_id='$_SESSION[id]' or received_id='$_SESSION[id]'";
    $result=$con->query($sql); 
    $friend=[];

          while($row=$result->fetch_assoc()){
              if($row['sender_id']==$_SESSION['id']){
                  if(in_array($row['received_id'],$friend)==false){
                    $friend[]=$row['received_id'];
                  }
              }
              else{
                if(in_array($row['sender_id'],$friend)==false){
                    $friend[]=$row['sender_id'];
                  }
              }
          }
         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                

    <link rel="stylesheet" href="css/inbox.css">
    <title>BesideU-Chat</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Document</title>
    <style>
        .chat-box {
            min-height: 560px;
            max-height: 560px;
        }
        .friend{
            background: #333;
            padding: 10px;
            margin-bottom: 2px;
            border-radius: 8px;
        }
        .friend img{
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }
        .friend a{
            color: white;
            text-decoration: none;
            font-size: 16px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <?php 
        include_once "header.php";
    ?>

  <div class="wrapper">
    <section class="chat-area">
      <div class="header">
        <div class="details">
        <img src="../../img/favicon.png" alt="">
          <span>Inbox</span>
        </div>
      </div>
      <div class="chat-box">
          
          <?php 
                for($i=0;$i<sizeof($friend);$i++){
                    $profilesql="select * from user_list where id='$friend[$i]'";
                    $res=$con->query($profilesql);
                    $rows=$res->fetch_assoc();
                    echo "<div class='friend'>
                            <img src='../../img/user/$rows[profile_picture]'>
                            <a href='inbox.php?id=$rows[id]'>$rows[name]</a>
                          </div>";
                }
          ?>

      </div>
    </section>
  </div>
</body>
</html>