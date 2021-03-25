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
            width: 90%;
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
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Occupation</th>
            <th scope="col">Gender</th>
            <th scope="col">District</th>
            <th scope="col">Interest</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $result=$con->query("select * from user_list");
            while($row=$result->fetch_assoc()){

                $id=$row['id'];
                $name=$row['name'];
                $username=$row['username'];
                $email=$row['email'];
                $job=$row['job'];
                $gender=$row['gender'];
                $district=$row['district'];
                $interest=$row['interest'];
                $dob=$row['dob'];

                echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$username</td>
                        <td>$email</td>
                        <td>$job</td>
                        <td>$gender</td>
                        <td>$district</td>
                        <td>$interest</td>
                        <td>$dob</td>     
                        <td>
                            <a href='' class='btn btn-success btn-sm'>Edit</a>
                            <a href='../checking/delete_user.php?id=$id' class='btn btn-danger btn-sm'>Delete</a>
                        </td>             
                    </tr>";
                    
                }
        ?>
        
    </tbody>
    </table>
    </div>
    
</body>
</html>