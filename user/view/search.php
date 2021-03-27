<?php 
    session_start();
    require_once "../checking/connection.php";

    if(isset($_REQUEST['search']))
    {
        $search_item=$_REQUEST['search'];

        $sql="SELECT * FROM user_list WHERE job LIKE '%$search_item%' or interest LIKE '%$search_item%'";
        $result=$con->query($sql);
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
                <title>BesideU-Search</title>
                <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                <style>
                    #search_container{
                        margin-top: 90px;
                        width: 100%;
                    }
                    #search_container table{
                        margin: auto;
                    }
                    #search_container table tr td,#search_container table tr th{
                        padding: 7px 30px;
                        border: 1px solid silver;
                    }
                    #search_container table tr td a{
                        text-decoration: none;
                        color: blue;
                    }

                </style>
            </head>
            <body>

            <?php include_once "header.php"; ?>

            <div id="search_container">
               <table>
                   <?php 
                        if($result->num_rows==0){
                            echo "<tr>
                                    <td>Nobody found!</td>
                                </tr>";
                        }
                        else{
                            echo "<tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Work</th>
                                    <th>Interest</th>
                                    <th>District</th>
                                    <th>Date of Birth</th>
                                    <th>Action</th>
                                </tr>";
                                
                        while($row=$result->fetch_assoc()){
                            echo "<tr>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[gender]</td>
                                    <td>$row[job]</td>
                                    <td>$row[interest]</td>
                                    <td>$row[district]</td>
                                    <td>$row[dob]</td>
                                    <td><a href='viewProfile.php?id=$row[id]'>View Profile</a></td>
                                </tr>";
                        }       
                }
        ?>
           
               </table>
            </div>
        </body>
    </html>