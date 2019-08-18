<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel =" stylesheet" href="Style.css">
        
        <style>
            
        </style>
    </head>
    <body style="background: url(bac.jpg);background-size: cover; background-repeat: no-repeat">
        <?php
        // put your code here
        ?>
        <nav>
            <ul>
                <li><a href="Topper.php" style="color: white">HOME</a></li> 
                <li><a href="loginPage.php" style="color: white">LOGIN&nbsp;</a></li> 
            </ul>
        </nav>
          <div class ="anyname_it_can_be_changeble_stored_in_css_child">
              <form action="HelperofDatabase.php" method="post" >
                
            
            <h3 style="text-align: center;border: 1px solid black;background-color:blanchedalmond;border-radius: 2px">Registration Form</h3>
                    <div class="inputbox">
                        <input type ="text" name="usernamefromform" required="" >
                        <label>Username</label>
                    </div>
               
                <div class="inputbox">
                    <input type="text" name="useraddressfromform" required="">
                    <label>Address</label>
                </div>
               
                <div class="inputbox"> 
                    <input type ="text" name="usermobilefromform" required="">
                    <label>Mobile No</label>
                </div>
               
                <div class="inputbox">
                    <input type="password" name="userpasswordfromform" required="">
                    <label>Password</label>
                </div>
                <br><br><br>
                <input type="Submit" name="SubmitButton" value="Registration" style="text-align: center">
                <h5>Already Registered? <a href="loginPage.php">Login</a></h5>
            </form>
         </div>
                
    </body>
</html>
