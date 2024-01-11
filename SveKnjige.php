<?php
include("php/obrada_log_in.php");
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
    <div class="w3-bar w3-black">
        <a href="pocetna.php" class="w3-bar-item w3-button">Početna </a> <!-- izbornik na vrhu-->
        <a href="sveKnjige.php" class="w3-bar-item w3-button"> <b>Sve Knjige </b></a>
        <a href="oNama.html" class="w3-bar-item w3-button"> O nama </a>
        <a href="kontakt.html" class="w3-bar-item w3-button"> Kontakt </a>
        <a href="Log_in.php" class="w3-bar-item w3-button">Log in </a>
        <a href="Log_out.php" class="w3-bar-item w3-button"  >Odjava </a>
    </div>

    <div class="w3-container w3-brown"> 
        <h1> Popis svih knjiga </h1>
    </div>
    &nbsp;

        <?php
            $query = "SELECT * FROM RWAknjiga";
            $res = mysqli_query($db, $query);
            
        ?>
    <div>
        <table border="1px"  class="w3-table-all">
                <thread>
                <!--zaglavlje-->
                <tr class="w3-brown">
                    <th><b> Slika </b></th>
                    <th> <b> Osnovne informacije</b></th>
                    <th> <b> Opis </b></th>
                </tr>

            <?php
            while ($row = mysqli_fetch_array($res)){
                echo "<tr>";

                    //slika
                    echo "<td>";
                        echo "<div>";
                        echo "<img src='".$row['slika']."' alt='' width='200'>";
                        echo "</div>";
                    echo "</td>";

                    //osnovne info
                    echo "<td>";
                        echo "<b>".$row['naziv']."</b>";
                        echo "<div>&nbsp</div>";
                        echo "<div> <b>Godina izdanja:</b> " .$row['godina_izdanja'] . "</div>";
                        echo "<div> <b>Nakladnik: </b>" .$row['nakladnik'] . "</div>";
                        echo "<div> <b> ISBN: </b>" .$row['isbn'] . "</div>";
                        echo "<div> <b>Jezik:</b>" .$row['jezik'] . "</div>";
                    echo "</td>";

                    //opis
                    echo "<td>";
                        echo "<div>" .$row['opis'] . "</div>";
                    echo "</td>";

                    
                echo "</tr>";                     
            }
            
            mysqli_close($db);
            ?>
        </table>
    </div>
</div>

</body>

</html>