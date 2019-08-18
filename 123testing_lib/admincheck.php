<?php
session_start();
  if(($_SESSION['NAME'])== null)
    {
         header("Location:loginPage.php");
    }

  else
  	{
  		header("Location:admin_login.php");
  	}
?>