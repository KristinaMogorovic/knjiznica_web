<?php
   include('obrada_log_in.php');
   session_start();

   if($_SESSION['login_user']==null){
        echo "Morate se ulogirati kako biste rezervirali knjigu";
        header("Location: SveKnjige.php");
   }
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id_clan from RWAclan where id_clan = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id_clan'];
   
   if(!isset($_SESSION['login_user'])){
        
      die();
   }
?>