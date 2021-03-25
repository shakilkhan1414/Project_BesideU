<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> BesideU-Signup </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
   </head>
<body>
  <header>
    <div class="logo">
        <img src="../../img/logo.png" alt="Logo">
    </div>
    <div class="menu">
        <ul>
          <li><a href="../../index.php">Home</a></li>
          <li><a href="../../index.php#about">About</a></li>
          <li><a href="../../index.php#service">Service</a></li>
          <li><a href="../../index.php#contact">Contact</a></li>
          <li><a href="login.html">Login</a></li>
        </ul>
    </div>
</header>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="../checking/signCheck.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Occupation</span>
            <input type="text" placeholder="Enter your occupation" name="job" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Interest</span>
            <input type="text" placeholder="Enter your interest" name="interest" autocomplete="off" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" checked>
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="p_n_t_s" id="dot-3">
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
                <select name="district" class="s" required>
                    <option value=''>---Select District---</option>

                  <?php  
                      $data = file_get_contents("../../json/coordinates.json");
                      $user = json_decode($data, true);
                      
                      for ($i=0; $i < sizeof($user); $i++){ 
                        $district=$user[$i]['district'];
                        echo "<option value='$district'>$district</option>";
                      }
                  ?>
                  
                </select>
            </div>
            <div class="input-box">
                <span class="details">Date of Birth</span>
                <input type="date" name="dob" id="" required>
            </div>
        </div>

        <div class="last pic">
            <div class="input-box">
                <span class="details">Profile Picture</span>
                    <input type="file" name="profile_picture" id="" required>
            </div>
        </div>

        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
