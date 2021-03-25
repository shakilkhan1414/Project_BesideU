<?php
    session_start();
    require_once "connection.php";

    function nameCheck($inputName){
        if($inputName>='A' && $inputName<='Z' || $inputName>='a' && $inputName<='z')
        { return true; }
        else{ return false; }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name=$con->real_escape_string(strip_tags($_REQUEST['name']));
        $email=$con->real_escape_string(strip_tags($_REQUEST['email']));
        $interest=$con->real_escape_string(strip_tags($_REQUEST['interest']));
        $job=$con->real_escape_string(strip_tags($_REQUEST['job']));
        $gender=$con->real_escape_string(strip_tags($_REQUEST['gender']));
        $district=$con->real_escape_string(strip_tags($_REQUEST['district']));
        $dob=$con->real_escape_string(strip_tags($_REQUEST['dob']));
        
        if(nameCheck($name)){
                    if(strlen($job)>2){

                        $update_sql="update user_list set name='$name',email='$email',job='$job',interest='$interest',gender='$gender',district='$district',dob='$dob' where id='$_SESSION[id]'";
                        
                            if($con->query($update_sql))
                            {
                                $location_data=file_get_contents("../../json/locations.json");
                                $location_array_data=json_decode($location_data,true);

                                $coordinates=file_get_contents("../../json/coordinates.json");
                                $coordinates_array=json_decode($coordinates,true);
                                
                                for($i=0; $i < sizeof($coordinates_array); $i++){
                                    if($district==$coordinates_array[$i]['district']){
                                        $lat=$coordinates_array[$i]['lat'];
                                        $lng=$coordinates_array[$i]['lng'];
                                    }
                                }
                                
                                $content="<p>Name: ".$name."<br>Occupation: ".$job."<br>Interest: ".$interest."</p><br><a href='viewProfile.php?id=$_SESSION[id]' class=''>View Profile</a>";

                                for($i=0; $i < sizeof($location_array_data); $i++){
                                    
                                    if($_SESSION['id']==$location_array_data[$i]['id']){
                                        $location_array_data[$i]['coords']['lat']=$lat;
                                        $location_array_data[$i]['coords']['lng']=$lng;
                                        $location_array_data[$i]['content']=$content;
                                        $final_location_data=json_encode($location_array_data);

                                        if (file_put_contents("../../json/locations.json",$final_location_data)) {
                                            header("location: ../view/profile.php");
                                        } else {
                                            echo "Failed! Try again later ...";
                                        }
                                    }
                                }

                                
                            }
                            else{
                                echo "Something went wrong,try again ...";
                            }
                    }
                    else{
                        echo "Invalid job name ...";
                    }
        }
        else{
            echo "Invalid Name ...";
        }
    }

?>