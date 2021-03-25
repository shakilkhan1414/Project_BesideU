<?php 
    session_start();
    require_once "../checking/connection.php";

    if(!isset($_SESSION['flag'])){
        header("location: login.html");
    }

    $data = file_get_contents("../../json/locations.json");
    $sql="select * from user_list where id='$_SESSION[id]'";
    
         if($result=$con->query($sql)){
            while($row=$result->fetch_assoc()){
                $user_district=$row['district'];
            }
             $coordinates_data = file_get_contents("../../json/coordinates.json");
             $coordinates_array = json_decode($coordinates_data, true);

             for ($j=0; $j < sizeof($coordinates_array); $j++)
             {
                if($coordinates_array[$j]['district']==$user_district){
                    $lat=$coordinates_array[$j]['lat'];
                    $lng=$coordinates_array[$j]['lng'];
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
                
                <link rel="stylesheet" href="css/home.css">

                <title>BesideU-Home</title>
                <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            </head>
            <body>

            <?php include_once "header.php"; ?>

            <div id="map"></div>


            <script>
                function initMap(){
                var options = {
                    zoom:13,
                    center:{lat: <?php echo $lat; ?>,lng:<?php echo $lng; ?>}
                }
                var map = new google.maps.Map(document.getElementById('map'), options);

                google.maps.event.addListener(map, 'click', function(event){

                    addMarker({coords:event.latLng});
                });

                    var markers= <?php echo $data; ?>
            
                for(var i = 0;i < markers.length;i++){
            
                    addMarker(markers[i]);
                }

                function addMarker(props){
                    var marker = new google.maps.Marker({
                    position:props.coords,
                    map:map,
                    });

                    if(props.iconImage){
                    marker.setIcon(props.iconImage);
                    }

                    if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });

                    marker.addListener('click', function(){
                        infoWindow.open(map, marker);
                    });
                    }
                }
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>

            <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=place key here&callback=initMap"></script> -->
                
            </body>
        </html>
