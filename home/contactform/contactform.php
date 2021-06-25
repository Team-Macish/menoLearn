<?php
   if( $_GET["name"] || $_GET["email"]|| $_GET["subject"]|| $_GET["message"] ) {
      echo "Welcome ". $_GET['name'].;
      echo "You are ". $_GET['email']. "years old."; 
      echo "Welcome ". $_GET['subject'].;
      echo "Welcome ". $_GET['message'].;
      exit();
   }
?>
