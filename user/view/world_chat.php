<?php 
    session_start();
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
                
    <link rel="stylesheet" href="css/chat.css">
    <title>BesideU-Notice Board</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
  header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    height: 80px;
    width: 100%;
    background-color: black;
}
header .logo{
    margin-left: 50px;
}
header .logo img{
    height: 50px;
    
}
header .menu{
    margin-right: 50px;
}
header .menu ul{
    display: flex;
    margin-bottom: 0;
}
header .menu ul li{
    padding: 5px 20px;
    list-style: none;
}
header .menu ul li a{
    color: white;
    font-size: 15px;
    letter-spacing: .1em;
    font-weight: 500;
    text-decoration: none;
}
header .menu ul li.name{
    color: white;
    font-size: 15px;
    letter-spacing: .1em;
    font-weight: 500;
    border-right: 2px solid white;
}
</style>
<body>

<?php include_once "header.php"; ?>

  <div class="wrapper">
    <section class="chat-area">
      
      <div class="chat-box">
 
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a notice here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="js/chat.js"></script>

</body>
</html>