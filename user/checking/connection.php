<?php

    define('server','localhost');
    define('user','root');
    define('password','');
    define('database','besideu');

    $con=mysqli_connect(server,user,password,database);

    if(!$con){
        die("coneection Failed ".mysqli_connect_error());
    }

?>