<?php
include("php/obrada_log_in.php");
//include('php/session.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $myusername = mysqli_real_escape_string($db, $_POST['iskaznica']);
    $mypassword = mysqli_real_escape_string($db, $_POST['pin']);

    $sql = "SELECT id_clan FROM RWAclan WHERE email='$myusername' AND lozinka='$mypassword'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['login_user'] = $row['id_clan'];

        header("location: korisnik.php");
        
    } else {
        $error = "Your Login Name or Password is invalid";
        echo '<script type="text/javascript">
        window.onload = function () { alert("Unijeli ste krivi E-mail ili lozinku."); } 
        </script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knjiznica</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- vanjski css-->

</head>
<body>
    <!--navigacija-->
    <div class="w3-bar w3-black">
        <a href="index.php" class="w3-bar-item w3-button">Početna </a> <!-- izbornik na vrhu-->
        <a href="registracija_knjiga.php" class="w3-bar-item w3-button"> Sve Knjige </a>
        <a href="oNama.html" class="w3-bar-item w3-button"> O nama </a>
        <a href="kontakt.html" class="w3-bar-item w3-button"> Kontakt </a>
        <a href="korisnik.php" class="w3-bar-item w3-button">Log in </a>
        <a href="Log_out.php" class="w3-bar-item w3-button"  >Odjava </a>
   
    </div>

    <div class="w3-container w3-brown"> 
        <h1> Log in </h1>
    </div>
    
    <div> &nbsp;</div>

     <!--obrazac-->
     <div class="w3-container w3-brown">
        <h2> Registracija članova knjižnice</h2>
    </div>

<div class="w3-display-middle">
    <div class="w3-container w3-responsive">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table> 
        
         
        <tr>
            <td> </td>
            <td>
                <form class="w3-container" action="" method="POST">
                    <label class="w3-text-brown"><b>E-mail:</b></label>
                    <input id="iskaznica" name="iskaznica" class="w3-input w3-border w3-light-grey" type="text">

                    <br/>
                    <label class="w3-text-brown"><b>Pin:</b></label>
                    <input required id="pin" name="pin" class="w3-input w3-border w3-light-grey" type="password" >

                    <br/>
                    <input type = "submit" value = " Prijava "  class="w3-btn w3-brown" /><br />

                </form>
            </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                
            </td>
        </tr>

    </table> </div>

    <div id="prikaz"> </div>
</div>
</body>
</html>