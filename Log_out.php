<?php
   session_start();
   
   if(session_destroy()) {

      header("Location: Log_in.php");
 
   }
?>