<?php
    include("php/obrada_log_in.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knjiznica</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- vanjski css-->

    <script>
        function prikaziPoruku(){
            //vezano za file obrada_log_in.php

            const br_iskaznica = document.getElementById("iskaznica").value;
            const pin = document.getElementById("pin").value;


            const httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function(){
                if(httpRequest.readyState==4) { //4 znaci da je odgovor servera dosao
                    document.getElementById("prikaz").innerHTML = httpRequest.responseText;
                }//if zagrada

            } //httpRequest zagrada

            httpRequest.open("GET", "php/obrada_log_in.php?iskaznica=" + br_iskaznica + "&pin=" + pin); //pozivamo preko GET obrada_log_in.php
            httpRequest.send("");

            document.getElementById("prikaz").innerHTML = pin;
            alert("ulogirani ste.");
            

        }//function zagrada
        

    </script>


</head>
<body>
    <!--navigacija-->
    <div class="w3-bar w3-black">
        <a href="pocetna.php" class="w3-bar-item w3-button">Početna </a> <!-- izbornik na vrhu-->
        <a href="sve_knjige.php" class="w3-bar-item w3-button"> Sve Knjige </a>
        <a href="oNama.html" class="w3-bar-item w3-button"> O nama </a>
        <a href="kontakt.html" class="w3-bar-item w3-button"> Kontakt </a>
        <a href="logIn.html" class="w3-bar-item w3-button"> <b>Log in </b></a>
   
    </div>

    <div class="w3-container w3-brown"> 
        <h1> Log in </h1>
    </div>
    
    <div> &nbsp;</div>

     <!--obrazac-->
     <div class="w3-container w3-brown">
        <h2> Registracija članova knjižnice</h2>
    </div>

    <table> 
        <tr>
            <td> </td>
            <td>
                <form class="w3-container"> 
                    <label class="w3-text-brown"><b>Broj iskaznice:</b></label>
                    <input name="iskaznica" class="w3-input w3-border w3-light-grey" type="text">
                </form>
            </td>
            <td> </td>
        </tr>
         
        <tr>
            <td> </td>
            <td>
                <form class="w3-container">
                    <label class="w3-text-brown"><b>Pin:</b></label>
                    <input required name="pin" class="w3-input w3-border w3-light-grey" type="password" >
                </form>
            </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <button onclick="prikaziPoruku()" class="w3-btn w3-brown">Log in</button>
            </td>
        </tr>

    </table> 

    <div id="prikaz"> </div>
    
</body>
</html>