<?php 
    session_start();
    require_once "../checking/connection.php";
    $msg_id=$_REQUEST['id'];

    $sql="select * from user_list where id='$msg_id'";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();

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
    <title>BesideU-Inbox</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php 
        include_once "header.php";
    ?>

  <div class="wrapper">
    <section class="chat-area">
      <div class="header">
        <img src="../../img/user/<?=$row['profile_picture']?>" alt="">
        <div class="details">
          <span><?=$row['name']?></span>
        </div>
      </div>
      <div class="chat-box">
                      
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="msg_id" name="msg_id" value="<?=$msg_id;?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="js/inbox.js"></script>

</body>
</html>