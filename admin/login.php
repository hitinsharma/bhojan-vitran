 <?php
//  $connection=mysqli_connect("localhost:3307","root","");
// $db=mysqli_select_db($connection,'demo');
include '../connection.php';
$acc=0;
$msg=0;
if(isset($_POST['signup']))
{

    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $location=$_POST['district'];

    $pass=password_hash($password,PASSWORD_DEFAULT);
    $sql="select * from admin where email='$email'" ;
    $result= mysqli_query($connection, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $acc=1;
        // echo "<h1> already account is created </h1>";
        // echo '<script type="text/javascript">alert("already Account is created")</script>';
        // echo "<h1><center>Account already exists</center></h1>";
    }
    else{
    
    $query="insert into admin(name,email,password,location) values('$username','$email','$pass','$location')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
        // $_SESSION['email']=$email;
        // $_SESSION['name']=$row['name'];
        // $_SESSION['gender']=$row['gender'];
       
        // header("location:#");
        // echo "<h1><center>Account does not exists </center></h1>";
        //  echo '<script type="text/javascript">alert("Account created successfully")</script>'; -->
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
        
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
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="login.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <p style="color:"></p>
            <div class="form login">
                <?php
                if($msg==1){
                    echo '<p ><center style=\"color:#06C167;\">Account created successfully</center></p>';
                }
                ?>
            <?php
                if($acc==1){
                  echo ' <p ><center style=\"color:crimson;\">Account already exists</center></p>';
                }
                ?>
                <!-- <p style="color:aqua;">account</p> -->
                <span class="title">Login</span>

                <form action=" " method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email"required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
<!-- 
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div> -->

                    <div class="input-field button">
                        <button type="submit" name="Login">Login</button>
                        <!-- <input type="button" value="Login" name="Login"> -->
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <?php
                if($msg==1){
                  echo '<p ><center style=\"color:crimson;\">Account already exists</center></p>';
                }
                ?>
                <span class="title">Registration</span>
            

                <form action=" " method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" name="name"required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <!-- <label for="district">District:</label> -->
                        <select id="district" name="district" style="padding:10px; padding-left: 20px;">
                          <option value="mathura">Mathura</option>
  <option value="etawah">Etawah</option>
  <option value="delhi">Delhi</option>
  <option value="noida">Noida</option>
  <option value="saharanpur">Saharanpur</option>
  <option value="meerut">Meerut</option>
  <option value="muzaffarnagar">Muzaffarnagar</option>
  <option value="etawah">Etah</option>
  <option value="firozabad">Firozabad</option>
  <option value="ghaziabad">Ghaziabad</option>
  <option value="shamli">Shamli</option>
  <option value="bijnor">Bijnor</option>
  <option value="hapur">Hapur</option>
  <option value="moradabad">Moradabad</option>
  <option value="bareilly">Bareilly</option>
  <option value="aligarh">Aligarh</option>
  <option value="budaun">Budaun</option>
  <option value="bulandshahr" selected>Bulandshahr</option>
  <option value="agra">Agra</option>
  <option value="hathras">Hathras</option>
  <option value="kasganj">Kasganj</option>
  <option value="shahjahanpur">Shahjahanpur</option>
  <option value="mainpuri">Mainpuri</option>
  <option value="kanpur">Kanpur</option>
  <option value="lucknow">Lucknow</option>
  <option value="varanasi">Varanasi</option>
  <option value="gorakhpur">Gorakhpur</option>
                        </select> 
                        

                        <!-- <input type="password" class="password" placeholder="Create a password" required> -->
                        <i class="uil uil-map-marker icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                   
<!-- 
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div> -->

                    <div class="input-field button">
                       <button type="submit" name="signup">Signup</button>
                        <!-- <input type="button" value="signup" name="signup"> -->
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>
</html>

<?php


$msg=0;
if (isset($_POST['Login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sanitized_emailid =  mysqli_real_escape_string($connection, $email);
  $sanitized_password =  mysqli_real_escape_string($connection, $password);
  // $hash=password_hash($password,PASSWORD_DEFAULT);

  $sql = "select * from admin where email='$sanitized_emailid'";
  $result = mysqli_query($connection, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($sanitized_password, $row['password'])) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['location'] = $row['location'];
        header("location:admin.php");
      } else {
        $msg=1;
        // echo "<h1><center> Login Failed incorrect password</center></h1>";
      }
    }
  } else {
    echo "<h1><center>Account does not exists </center></h1>";
  }




  // $query="select * from login where email='$email'and password='$password'";
  // $qname="select name from login where email='$email'and password='$password'";


  // if(mysqli_num_rows($query_run)==1)
  // {
  // //   $_SESSION['name']=$name;

  //   // echo "<h1><center> Login Sucessful  </center></h1>". $name['gender'] ;

  //   $_SESSION['email']=$email;
  //   $_SESSION['name']=$name['name'];
  //   $_SESSION['gender']=$name['gender'];
  //   header("location:home.html");

  // }
  // else{
  //   echo "<h1><center> Login Failed</center></h1>";
  // }
}
?>