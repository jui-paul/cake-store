


<?php include 'db.php';?>


<!DOCTYPE html>
<html>

<head>
    <title>Cake fair</title>


    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>

    

</head>



<body class="body">
    <div style="padding:10px; text-align: center;">
        you will get 10% discount afrer 10 orders
    </div>

    <div class="top-nav">
        The Cake Fair

    </div>






    <div class="main_nav">


        <a href="index.html" class="nav-item-link">
            Home
        </a>


        <div class="dropdown">
            <button class="dropbtn">Cake types</button>
            <div class="dropdown-content">
                <a href="Venilla cake.html"> Venilla </a>
                <a href="chocolate cake.html"> chocolate </a>
                <a href="Battenberg-Layer cake.html"> Battenberg-Layer </a>
                <a href="Strawberry cake.html"> Strawberry </a>
                <a href=" Zebra cake.html"> Zebra </a>
                <a href=" Rainbow cake.html"> Rainbow </a>
                <a href=" Swiss Roll cake.html"> Swiss Roll </a>
                <a href="Velvet cake.html "> Velvet </a>
                <a href="Fondant cake.html "> Fondant </a>
                <a href="Rasmalai cake.html "> Rasmalai </a>
                <a href="pistachio cake.html "> pistachio </a>
                <a href="Chiffon cake.html "> Chiffon </a>
            </div>
        </div>


        <div class="dropdown">
            <button class="dropbtn">our cakes</button>
            <div class="dropdown-content">
                <a href="birthday_cake.html"> birthday </a>
                <a href="wedding_cake.html"> wedding</a>
                <a href="Anniversary_cake.html"> Anniversary</a>

            </div>
        </div>

        <a href="contact_us.html" class="nav-item-link">
            Contact Us
        </a>

        <a class="nav-item-link" onclick="document.getElementById('login').style.display='block'">
            Login
        </a>
        <a class="nav-item-link" onclick="document.getElementById('id01').style.display='block'">
            Signup
        </a>
        <a href="checkout.html" class="nav-item-link">
            Checkout
        </a>

    </div>



    <!-- /// login  -->

    <div id="login" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('login').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1; padding-bottom: 70px;">
                <button type="button" onclick="document.getElementById('login').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>


    <!-- sign up -->



    <div id="id01" class="modal2">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal2">&times;</span>
        <form class="modal2-content" action="/action_page.php">
            <div class="container2">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>


