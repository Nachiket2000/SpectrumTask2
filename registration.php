<?php
session_start();
?> 
<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2 Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <?php
    //Database connection
    include 'config.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $branch = mysqli_real_escape_string($con,$_POST['branch']);
        $year = mysqli_real_escape_string($con,$_POST['year']);
        $domain = mysqli_real_escape_string($con,$_POST['domain']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $confirm_password = mysqli_real_escape_string($con,$_POST['confirm_password']);

        $pas = password_hash($password,PASSWORD_BCRYPT);
        $confirm_pas = password_hash($confirm_password,PASSWORD_BCRYPT);

        $emquery = " select * from users where email = '$email' ";
        $query = mysqli_query($con,$emquery);

        $emcount = mysqli_num_rows($query);

        if($emcount>0){
            echo "email already exists";
        }

        else{
            if($password === $confirm_password){

                $insertquery = "insert into users( name, email, mobile,branch,year,domain, password, confirm_password) values('$name','$email','$mobile','$branch','$year','$domain','$pas','$confirm_pas')" ;

                $insquery = mysqli_query($con,$insertquery);

                if($insquery){
                    ?>
                    <script>
                        alert("Succesfully Connected");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                alert("Registeration Not Successful");
                </script>
                <?php
                }
                

            }
            else{
                ?>
                    <script>
                        alert("Password must be same");
                    </script>
                    <?php
                
            }
        }

    }



    ?>



    <img class ="bg" src="https://c1.wallpaperflare.com/preview/108/814/559/laptop-office-desk-camera.jpg" alt="">
    <div class="container1">
        <div class="title">
            <h2>Registration Form</h2>
        </div>
        <form action="" method="POST">
        <div class="form">
            <div class="box1">
                <label>Name</label>
                <input type="text" class="box" name="name">
            </div>
            <div class="box1">
                <label>Email</label>
                <input type="email" name="email" class="box" required>
            </div>
            <div class="box1">
                <label>Mobile Number</label>
                <input type="number" name="mobile"class="box">
            </div>
            <div class="box1">
                <label>Branch</label>
                <input type="text" name="branch"class="box">
            </div>
            <!-- <div class="box1">
                <label>Branch</label>
                
                <div class="select1">
                    <select>
                        <option value="" >Select</option>
                        <option value="cse" name="branch">Computer Science</option>
                        <option value="it">Information & Technology</option>
                        <option value="iee">Instrumentation & Electronics</option>
                        <option value="ee">Electrical</option>
                        <option value="me">Mechanical</option>
                        <option value="cv">Civil</option>
                        <option value="ft">Fashion & Technology</option>
                        <option value="tt">Textile</option>

                    </select>
                </div>
            </div> -->
            <div class="box1">
                <label>Year</label>
                <input type="text" class="box" name="year">
            </div>
            <div class="box1">
                <label>Domain</label>
                <input type="text" class="box" name="domain">
            </div>
            <!-- <div class="box1">
                <label>Domain</label>
                
                <div class="select1">
                    <select>
                        <option value="" name="domain">Select</option>
                        <option value="hd">Hardware</option>
                        <option value="st">Software</option>
                        <option value="ds">Design</option>

                    </select>
                </div>

            </div> -->
            <div class="box1">
                <label>Password</label>
                <input type="password" name="password" class="box">
            </div>
            <div class="box1">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="box">
            </div>
            <div class="box1 terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="mark"></span>
                </label>
                <p>Agreed to terms and conditions</p>
            </div>
            <div class="box1">
                <input type="submit" name = "submit" value="Submit" class="btn">
            </div>
            <p class="member">Already a member?
                <a href="login.php">Login</a>
            </p>
        </div>
        </form>

    </div>

</body>

</html>