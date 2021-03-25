<?php 
  session_start();
  require_once "../checking/connection.php";

  if(!isset($_SESSION['flag'])){
    header("location: login.html");
}

$sql="select * from user_list where id='$_SESSION[id]'";
$result=$con->query($sql);

while($row=$result->fetch_assoc()){
    $name=$row['name'];
    $email=$row['email'];
    $gender=$row['gender'];
    $job=$row['job'];
    $district1=$row['district'];
    $interest=$row['interest'];
    $dob=$row['dob'];
}      

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> BesideU-Update Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        form .button{
        height: 45px;
        margin: 20px 0 20px 0;
        }

        header{
          display: flex;
          justify-content: space-between;
          align-items: center;
          position: fixed;
          top: 0;
          left: 0;
          height: 80px;
          width: 100%;
          background-color: black;
            }
            header .logo{
                margin-left: 50px;
            }
            header .logo img{
                height: 50px;
                
            }
            header .menu{
                margin-right: 50px;
            }
            header .menu ul{
                display: flex;
            }
            header .menu ul li{
                padding: 5px 20px;
                list-style: none;
            }
            header .menu ul li a{
                color: white;
                font-size: 15px;
                letter-spacing: .1em;
                font-weight: 500;
            }
            header .menu ul li.name{
                color: white;
                font-size: 15px;
                letter-spacing: .1em;
                font-weight: 500;
                border-right: 2px solid white;
            }
            ul li.search input[type='text']{
              padding: 3px;
            }
            ul li.search button{
                    cursor: pointer;
                    padding: 3px;
                }
          

    </style>
   </head>
<body>
  <?php include_once "header.php"; ?>

  <div class="container">
    <div class="title">Update Profile</div>
    <div class="content">
      <form action="../checking/update.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" value="<?=$name?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" value="<?=$email?>" required>
          </div>
          <div class="input-box">
            <span class="details">Occupation</span>
            <input type="text" placeholder="Enter your occupation" name="job" value="<?=$job?>" required>
          </div>
          <div class="input-box">
            <span class="details">Interest</span>
            <input type="text" placeholder="Enter your interest" name="interest" value="<?=$interest?>" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" <?php if($gender=='Male'){echo "checked";}?> >
          <input type="radio" name="gender" value="Female" id="dot-2" <?php if($gender=='Female'){echo "checked";}?> >
          <input type="radio" name="gender" value="p_n_t_s" id="dot-3" <?php if($gender=='p_n_t_s'){echo "checked";}?> >
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="last">
            <div class="input-box">
                <span class="details">District</span>
                <select name="district" class="s" value required>
                    <option value=''>---Select District---</option>

                  <?php  
                      $data = file_get_contents("../../json/coordinates.json");
                      $user = json_decode($data, true);
                      
                      for ($i=0; $i < sizeof($user); $i++){ 
                        $district=$user[$i]['district'];
                        if($district==$district1){
                          echo "<option value='$district' selected>$district</option>";
                        }
                        else{
                          echo "<option value='$district'>$district</option>";
                        }
                        
                      }
                  ?>

                </select>
            </div>
            <div class="input-box">
                <span class="details">Date of Birth</span>
                <input type="date" name="dob" id="" value="<?=$dob?>" required>
            </div>
        </div>

        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
