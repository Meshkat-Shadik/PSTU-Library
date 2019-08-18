<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel =" stylesheet" href="Style.css">
        
        <style>
            
        </style>
    </head>
    <body style="background-image: url(pi2.jpg)">
        <?php
        // put your code here
        ?>
              <nav>
            <ul>
                <li><a href="Topper.php" style="color: white">HOME</a></li> 
                <li><a href="index.php" style="color:white">REGISTRATION&nbsp;</a></li>
            </ul>
        </nav>
         <div class ="anyname_it_can_be_changeble_stored_in_css_child">
            <form action="Checkdata.php" method="POST" >
                
                      <h3 style="text-align: center;border: 1px solid black;background-color:blanchedalmond;border-radius: 2px">Login Form</h3>
                 <div class="inputbox">
                     <input type ="text" name="usernamefromform" required="">
                     <label>Username</label>
                </div>
             
                <div class="inputbox">
                <input type="password" name="userpasswordfromform" required="">
                <label>Password</label>
                </div>
               
                <input type="Submit" name="loginButton" value="Login">
                
                <h5 style="text-align: center">Not yet Registered? <a href="index.php">Register</a></h5>
            </form>
               </div>
         
    </body>
</html>

              