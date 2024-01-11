<?php
   include('obrada_log_in.php');
   session_start();

   
   // Get the current page URL
   $current_page = $_SERVER['REQUEST_URI'];
   
   // Check if the user clicked on the registracija_knjiga.php page
   if (strpos($current_page, 'registracija_knjiga.php') !== false) {
      if($_SESSION['login_user']==null){
         //echo "Ulogirajte se!";
         header("Location: SveKnjige.php");
       }
   } elseif (strpos($current_page, 'korisnik.php') !== false) {
      if($_SESSION['login_user']==null){
         echo "Ulogirajte se!";
         header("Location: Log_in.php");
       }
   } else {
       // Handle other pages if needed
       echo ' ';
   }
   

/*
   if($_SESSION['login_user']==null){
        echo "Ulogirajte se!";
        header("Location: SveKnjige.php");
   }*/
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id_clan from RWAclan where id_clan = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id_clan'];
   
   if(!isset($_SESSION['login_user'])){
        
      die();
   }
?>