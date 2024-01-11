<?php
   include('php/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knjiznica</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- vanjski css-->
    
    <script>
        function rezerviraj(id_knjiga){
            //alert(id);

            const httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function(){
                if (httpRequest.readyState == 4){
                     //document.getElementById("prikaz1").innerHTML = httpRequest.responseText;
                    alert (httpRequest.responseText);
                }
            }
            httpRequest.open("GET","php/rezerviraj.php?id_knjiga="+id_knjiga);
            httpRequest.send();

        }
    </script>
</head>

<body>
<div class="w3-bar w3-black">
        <a href="pocetna.php" class="w3-bar-item w3-button">Početna </a> <!-- izbornik na vrhu-->
        <a href="sveKnjige.html" class="w3-bar-item w3-button"> <b>Sve Knjige </b></a>
        <a href="oNama.html" class="w3-bar-item w3-button"> O nama </a>
        <a href="kontakt.html" class="w3-bar-item w3-button"> Kontakt </a>
        <a href="logIn.php" class="w3-bar-item w3-button">Log in </a>
        <a href="Log_out.php" class="w3-bar-item w3-button">Odjava </a>
    </div>

    <div class="w3-container w3-brown"> 
        <h1> Popis svih knjiga </h1>
    </div>
    &nbsp;

        <?php
            $server = "student.veleri.hr";
            $database = "kmogorovi";
            $username = "kmogorovi";
            $password ="6929";
        
            $conn = mysqli_connect($server, $username, $password, $database) or 
                die("Konekcija nije uspješna");
            $query = "SELECT * FROM RWAknjiga";
            $res = mysqli_query($conn, $query);
            
        ?>
    <div>
        <table border="1px"  class="w3-table-all table1">
                <thread>
                <!--zaglavlje-->
                <tr class="w3-brown">
                    <th><b> Slika </b></th>
                    <th> <b> Osnovne informacije</b></th>
                    <th> <b> Opis </b></th>
                    <th> <b> Rezerviraj </b></th>
                </tr>

            <?php
            while ($row = mysqli_fetch_array($res)){
                echo "<tr>";

                    
                    echo "<td>";
                        echo "<div>";
                        echo "<img src='".$row['slika']."' alt='' width='200'>";
                        echo "</div>";
                    echo "</td>";

                
                    echo "<td>";
                        echo "<b>".$row['naziv']."</b>";
                        echo "<div>&nbsp</div>";
                        echo "<div> <b>Godina izdanja:</b> " .$row['godina_izdanja'] . "</div>";
                        echo "<div> <b>Nakladnik: </b>" .$row['nakladnik'] . "</div>";
                        echo "<div> <b> ISBN: </b>" .$row['isbn'] . "</div>";
                        echo "<div> <b>Jezik:</b>" .$row['jezik'] . "</div>";
                    echo "</td>";


                    echo "<td>";
                        echo "<div>" .$row['opis'] . "</div>";
                    echo "</td>";


                    echo "<td>";
                    if ($row['ukupan_broj']<= $row['rezervirani']+$row['posudeni']) {
                        echo "<button disabled>Rezerviraj</button>";
                    }
                    else {
                        //echo "<a href='rezerviraj.php?id=".$row['id']."'><button onclick='rezerviraj()'>Rezerviraj</button></a>";
                        echo "<button class='w3-brown' onclick='rezerviraj(".$row['id_knjiga'].")'>Rezerviraj</button>";
                    }
                    echo "</td>";
                echo "</tr>";                     
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
</div>

</body>

</html>