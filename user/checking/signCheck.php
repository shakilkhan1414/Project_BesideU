<?php
    require_once "connection.php";

    function nameCheck($inputName){
        if($inputName>='A' && $inputName<='Z' || $inputName>='a' && $inputName<='z')
        { return true; }
        else{ return false; }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name=$con->real_escape_string(strip_tags($_REQUEST['name']));
        $username=$con->real_escape_string(strip_tags($_REQUEST['username']));
        $email=$con->real_escape_string(strip_tags($_REQUEST['email']));
        $password=$con->real_escape_string(strip_tags($_REQUEST['password']));
        $interest=$con->real_escape_string(strip_tags($_REQUEST['interest']));
        $job=$con->real_escape_string(strip_tags($_REQUEST['job']));
        $gender=$con->real_escape_string(strip_tags($_REQUEST['gender']));
        $district=$con->real_escape_string(strip_tags($_REQUEST['district']));
        $dob=$con->real_escape_string(strip_tags($_REQUEST['dob']));
        $id=rand(time(), 100000000);
        
        if(nameCheck($name)){
            if(ctype_alnum($username) && strlen($username)>=4){
                    if(strlen($job)>2){
                        
                    $img_name = $_FILES['profile_picture']['name'];
                    $img_type = $_FILES['profile_picture']['type'];
                    $tmp_name = $_FILES['profile_picture']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            move_uploaded_file($tmp_name,"../../img/user/".$new_img_name);
                    }
                    else{
                        $new_img_name = "default.jpg";

                    }
                        $ins_sql="insert into user_list (id,name,username,email,password,job,gender,district,interest,dob,profile_picture) values ('$id','$name','$username','$email','$password','$job','$gender','$district','$interest','$dob','$new_img_name')";
                        
                            if($con->query($ins_sql))
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
                                
                                $content="<p>Name: ".$name."<br>Work: ".$job."<br>Interest: ".$interest."</p><br><a href='viewProfile.php?id=$id'>View Profile</a> &nbsp; &nbsp; <a href='inbox.php?id=$id'>chat</a>";

                                $locations = [	
                                        'id'=>$id,
                                        'coords'=>[
                                                    'lat'=>$lat,
                                                    'lng'=>$lng
                                                ],
                                    'content'=>$content
                                ];
                                $location_array_data[]=$locations;
                                $final_location_data=json_encode($location_array_data);
                                if (file_put_contents("../../json/locations.json",$final_location_data)) {
                                    header("location: ../view/login.html");
                                } else {
                                    echo "Failed! Try again later ...";
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
                echo "Invalid username ...";
            }
        }
        else{
            echo "Invalid Name ...";
        }
    }

?>
