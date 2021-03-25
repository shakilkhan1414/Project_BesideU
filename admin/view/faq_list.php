<?php 
    require_once "../checking/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title>BesideU-User's List</title>
    <style>
        #container{
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>

    <div id="container">
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $result=$con->query("select * from faq");

            while($row=$result->fetch_assoc()){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $message=$row['message'];
                echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$message</td>  
                        <td>
                            <a href='../checking/delete_faq.php?id=$id' class='btn btn-danger btn-sm'>Delete</a>
                        </td>             
                    </tr>";
            }
        ?>
        
    </tbody>
    </table>
    </div>
    
</body>
</html>