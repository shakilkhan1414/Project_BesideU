<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title>BesideU-Dashboard</title>
    <style>
        td{
            padding: 5px 20px;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            padding: 20px;
        }
    </style>
</head>
<body>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>
                <p>Total User: <?php 
                    if(file_exists("../../json/user_list.json"))
                    {
                        $data=file_get_contents("../../json/user_list.json");
                        $array_data=json_decode($data,true);
                        $array_size=sizeof($array_data);
                        echo $array_size;
                    }
                ?> </p>
            </td>
        </tr>
    </table>
    <br>

    <a href="faq_list.php">View FAQ</a>
    <br>
    <br>

    <a href="user_list.php">Users</a>
</body>
</html>