<?php 
    require_once "connection.php";

    if(isset($_GET['id'])){
        $del_sql="Delete from user_list where id='$_GET[id]'";
			if($con->query($del_sql))
				{
                    $location_data=file_get_contents("../../json/locations.json");
		            $location_array_data=json_decode($location_data,true);
                    for ($i=0; $i < sizeof($location_array_data); $i++){
                        if($location_array_data[$i]['id']==$_GET['id']){    
                            unset($location_array_data[$i]);
                            $ab=array_values($location_array_data);
                            $location_final_data=json_encode($ab);
                            if(file_put_contents("../../json/locations.json",$location_final_data)){
                                header('location: ../view/user_list.php');
                            }
                        }
                    }
				}
				else{
					echo "Something went wrong,try again ...";
				}
        }
        
?>