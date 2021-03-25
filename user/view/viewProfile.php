<?php 
    require_once "../checking/connection.php";
    session_start();

    if(isset($_REQUEST['id'])){
        $sql="select * from user_list where id='$_REQUEST[id]'";
        $result=$con->query($sql);

        while($row=$result->fetch_assoc()){
            $name=$row['name'];
            $email=$row['email'];
            $gender=$row['gender'];
            $job=$row['job'];
            $district=$row['district'];
            $interest=$row['interest'];
            $dob=$row['dob'];
            $image=$row['profile_picture'];
        }  
    }

?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">

                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
                
                <link rel="stylesheet" href="css/profile.css">
                <title>BesideU-View Profile</title>
                <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            </head>
            <body>
            <?php include_once "header.php"; ?>
            
            <div id="container">
            <table class="table ">
                
                <tbody>
                    <tr>
                        <td colspan="2" class="header"><img src="../../img/user/<?=$image?>" alt=""></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td> <?php echo $name; ?> </td>
                        
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td> <?php echo $email; ?> </td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td> <?php echo $gender; ?> </td>
                    </tr>
                    <tr>
                        <td>Occupation :</td>
                        <td> <?php echo $job; ?> </td>
                    </tr>
                    <tr>
                        <td>District :</td>
                        <td> <?php echo $district; ?> </td>
                    </tr>
                    <tr>
                        <td>Interest :</td>
                        <td> <?php echo $interest; ?> </td>
                    </tr>
                    <tr>
                        <td>Date of Birth :</td>
                        <td> <?php echo $dob; ?> </td>
                    </tr>
                </tbody>
                </table>
            </div>      
            </body>
            </html>

