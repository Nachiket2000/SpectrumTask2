<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2 Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //Database connection
    include 'config.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email']; 
        $password = $_POST['password'];

        //Validation of user input with database
        $find_email = " select * from users where email='$email' ";
        $query = mysqli_query($con,$find_email);

        //Existance of data
        $email_no = mysqli_num_rows($query);
        if($email_no){
            $email_pwd = mysqli_fetch_assoc($query);

            $pass = $email_pwd['password'];

            $_SESSION['username'] = $email_pwd['name'];
            $_SESSION['email1'] = $email_pwd['email'];
            $_SESSION['branch1'] = $email_pwd['branch'];
            $_SESSION['year1'] = $email_pwd['year'];
            $_SESSION['domain1'] = $email_pwd['domain'];

           

            $pass_decode = password_verify($password,$pass);

            if($pass_decode){
                echo "Successful Login";
                ?>
                <script>
                    location.replace("spectrum.php");
                </script>
                <?php
            }
            else{
                echo "Incorrect Password";
            }

        }
        else{
            echo "Invalid Email";

        }

    }





    ?>
    <!-- <section> -->
    <img class ="bg2" src="https://c1.wallpaperflare.com/preview/108/814/559/laptop-office-desk-camera.jpg" alt="">
    <div class="container2">
       
        <div class="container3">
            <div class="main">
                <div class="content">
                    <h2>Login</h2>
                    <form action="" method="POST">
                        <input type="email" name="email" placeholder="Email" required autofocus="">
                        <input type="password" name="password" placeholder="Password" required autofocus="">
                        <button class="btn" type="submit" name="submit">Login</button>
                    </form>
                    <p class="member">Don't have an account?
                        <a href="registration.php">Register</a>
                    </p>
                </div>

                <div class="bagimage">
                    <img src="image/img2.jpeg" alt="">
                </div>
            </div>
        </div>

    </div>
    <!-- </section> -->

</body>

</html>