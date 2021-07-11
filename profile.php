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
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <!-- <section> -->
    <div class="container2">
        <img class="bg2" src="./image/profilebg.jpg" alt="">

        <!-- <div class="container3"> -->
            <div class="main">
                <div class="content">
                    <h2>Profile</h2>
                    <p>Name:<?php echo $_SESSION['name']; ?> <br> Email: <br> Branch:<br> Year :<br> Domain: <br></p>
                </div>

                <!-- <div class="bagimage">
                    <img src="image/img2.jpeg" alt="">
                </div> -->
            </div>
        <!-- </div> -->

    </div>
    <!-- </section> -->

</body>

</html>