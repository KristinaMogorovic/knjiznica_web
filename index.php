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
        <a href="index.php" class="w3-bar-item w3-button"> <b> Početna </b></a> <!-- izbornik na vrhu-->
        <a href="registracija_knjiga.php" class="w3-bar-item w3-button"> Sve Knjige </a>
        <a href="oNama.html" class="w3-bar-item w3-button"> O nama </a>
        <a href="kontakt.html" class="w3-bar-item w3-button"> Kontakt </a>
        <a href="korisnik.php" class="w3-bar-item w3-button">Log in </a>
        <a href="Log_out.php" class="w3-bar-item w3-button"  >Odjava </a>

    </div>

    <div class="w3-container w3-center w3-brown">
        <img src="Spomen-dom.jpg" alt="Spomen dom Pazin" width="100%">
        <h1> Gradska Knjižnica Pazin </h1>
    </div>

    <div> &nbsp;</div>
    <div> &nbsp;</div>
    <div> &nbsp;</div>


    <table style="width:100%">
        <!--1 red-->
        <tr style="height:200px">
            <td> </td>
            <td class="w3-brown w3-hover-shadow w3-center" width="30%">
                <p>
                    Radno vrijeme knjižnice: <br>
                    pon-pet: 9.30-19.30 <br>
                    sub: 8.00-13.00 <br>
                    (pauza 10.30-11.00)
                </p>
            </td>

            <td> </td>

            <td class="w3-brown w3-hover-shadow w3-center" width="30%">
                <a href="https://www.ibiblos.com/" target="_blank"> <!-- poveznica  stranice za više informacija -->
                    <p>E-knjige </p>
                    <img src="https://www.knjiznicaporec.hr/wp-content/uploads/2019/07/ibiblos.jpg"
                        alt="logo: E-knjige" width="53%">
                </a>
            </td>

            <td> </td>

            <td class="w3-brown w3-hover-shadow w3-center" width="30%">
                <a href="https://dbi.hr/" target="_blank"> <!-- poveznica  stranice za više informacija -->
                    <p>Društvo bibliotekara Istre</p>
                    <img src="https://dbi.hr/wp-content/uploads/2019/07/dbi_logo_200-200x270.png"
                        alt="logo: Društvo bibliotekara Istre" width="33%">
                </a>
            </td>
            <td> </td>
        </tr>

        <!--2 red-->
        <tr style="height: 50px;"> </tr>

    </table>


    <table style="width:100%">
        <tr style="height:200px">
            <td> </td>
            <td class="w3-brown w3-hover-shadow w3-center" width="30%">
                <a href="https://www.citajmi.info/naslovna/" target="_blank">
                    <!-- poveznica  stranice za više informacija -->
                    <p>Čitaj mi! </p>
                    <img src="https://www.citajmi.info/media/flatpages/materials/logo.jpg"
                        alt="logo: Čitaj mi!" width="53%">
                </a>
            </td>

            <td> </td>

            <td class="w3-brown w3-hover-shadow w3-center" width="30%">
                <a href="https://www.nsk.hr/" target="_blank"> <!-- poveznica  stranice za više informacija -->
                    <p> Nacionalna i sveučilišna <br> knjižnica Zagreb</p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAAC1CAMAAACtbCCJAAAA6lBMVEX///+BAAOFAAN2AACIAAN7AAH///7mz9D7+PiRAAeKAASGAARvAAB2AAGCAACNREWXAAj68fKEPT7q1dWfAgv16uukREWjZ2fEd3mvXmCMAADu2tzr0c+gAAD7+frfwcCWGBeoDQ3NnZ6WTE3EkJDAe3y/dXWTAACVTU+kWFuBGRqiUFJ6GRqHGhqdPUK/iozfsrGlAACmbnFnAACRPkB9BxCLNDbImJqpQEnQnZ+lOEGqTVLFh4qWJyilR0aaNziuV1meLjPCgYPSlZTAXVzFa2nHdXTSioqmHR2rKSuwOT22SEm5VVXcra3A1JZjAAAGk0lEQVR4nO2de1/TSBSGmza33oZWaLcEtwVEdEUE1FURENzSIl6+/9fZmUnSnJlMU1h2t0z6Pv7wD08nzjx5z6TQtFQqAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAY8df9gTuRrgV/E9sheL/s0RL7+2TNcoTlTWN+1S1A7/dssUJZ2vtXYvy/jeFP5Vi64Na/aBWX6nV90rx3ZpVWl62au1aSvv1brcbdjPetNqk6h31SK3bOyLFWrv1Bx0adj++puXWS9u01KiWIa0OdS0hrYZ7NVWLMjbcfU2qtdYz67S0Y6QWdeFci1i6/GuOlnaKQUs7roqHCS0Va7bcXFpmCxcLkFoK0uLVaB4WpqXiW2JFaKFrM6UlrXs1XcvRAi2k6MkmskkLiYPaRL7QQrMktJCF8bQU7y2KtLiJLCFLCw+Dl09L2/Nm9VpeC4mD185r8ZJxHMu0PBMLT9G1DN8oVYMWUs5r8Wi1tFq8VdXiCS1kXwyLtRwpxXJpoSd8kZa9Ii21FdKiVB09LY6qRR1ruZZsbY73Kq/FcWZVpu8tzKODeVoULa+yquPULNPCpzzDoIVUHaY/y2V0cC2nhQ61WYuT06JUi7Xk00LHlkrLpwVaaFVqIdUSa1mUFl0LrZZYy4K00GKxFubZpeXgIWmpKlo2i9LiHUCLrGppsVcLk1oIq5uWZx7dN3Ut/fto0feWQ+bMjm1bWhZpYdnaGNvTtZCxzKTF5rSIhSd/Dk1aHCdWw/JpiYfFY3NNdJgOZTampZri5LWIvUWU5HlnrkFLXBcPMWjJjly1TMuBV2UZehN98tKKCIurN1GTDDVpmWFdWg74cpOzyqq5tPCnc1VRjr/MWpLBZi1p0T4t1QyDFkaquSZq0mpBE4k+slaLKS2KNENaSNWBlri65yoLL6kWUxM9QMtpubSQl0TDT3Rl99MyLFla/iUtWhMxy7Sw5t216FciRQsr0tK0Toub0mwKLb6qxW3Oym6U00LJa8lqTdc6Lc0MV2rJqiItpBrlmsglgw1aaNU2LdnkXYOWplugpSGK8mtOWuJxtmoRnZKmpaJqcd1kXfwxjXOTlrSuaznNmqhpYRPR/cGkJaORT0vB3kK08KGWa1Ff6+nfR8uVWUujYaMWt+HK1TXmpKUhFiZwTXtLWuTlgrTwsm1aGD3lh+frCp9JWpqL0nKmjj0/VKqWaUniIKfO2EWf8KW/TVdmTkvGdl/hgh8uiYqFTcSkDuZG2xeXXw42VS7voCVx6rqX2uCrL5cX21F8dOvSUr+4PNvcP/+4ezwKtnoawZkbNWa7R76JZkU3cs8CffRWMPq1u3e+v3nWv4is0hIGUkY3HJrrwot7By3CivnO9WHYlYKC0JZ7lSvJPfhFN1cHV7O8RPO1RO7memXBHf0WWamI2Rbfcr6+GSWLj+q5Z7lpJYqtGA/k22ZEIqZcIMYXeUm1aHdazrS4V4F87NzjWOglPp8FE396yYq1sP56fBwrV//P4EsN+rKP8lrq8p+j/pzdVjlIyfBFH50JL2YtUcSvQZWh7xc1UemIFxpccS9SC0Fqifi+4lfKmIdi4vWOrsxaoohbWZ2QEJK88D7KXaDrsZWlTOsxwJce9N36WNfifg6WNaXlE1/AR1/VbxX9cC/6OlrapB4J4no0lq8iJfC0iO+DVreFkrUPn56OFE6Dob9ylyCCH1+Cu8+3Ff7qLntij4LefqTwvLfsGT0KuJY6BVok0GKkt/8CWvIgLUagxQi0GIEWI3zL7dQ7CfUOtMQILZ00Kh1oSUi0dNBEClILAVokqpYX0BKjaUETxUCLEewtRnoDaDEALUagxQi0GIEWIzkt+Mm/QNcygBZBb9BBWvKgiYz0Bhsb0JIDWoyoWjagJUZoIeB5S4ymZQNpkcgmommBFgHSYgRajOha8ORfAi1GoMUItBjpTaHFwAprKbr7eLWbKP68H8M7gO+mxTzWanzxy9zCedXuYGcnk7KzczMnLX4lFL8crjxyuuPryXRwczMen/46Ph49VRlNuJadGRsT7QGj0fHxr9Pxzc3NYDq5HpenxXrXv2ecnJzsqJz8rpArn9AHXJfnxw696bfb2+8/fvz4eT2ZTKfTgcL+YAHT6WRy/ZMP/357+21aHi3hSPQO74118SkU3XsjPm9iPemmUVieN9UMh77/4K3S55cicZTSvQXrgeuJP9CifFqAAk7vf4fvr+YbxgEAAAAAAAAAAAAAAAAAAAAAAAAAVpi/Ac6XMcSHjAuMAAAAAElFTkSuQmCC"
                        alt="logo: nacionalna i sveučilišna knjižnica zagreb" width="67%">
                </a>
            </td>
            <td> </td>
        </tr>
    </table>

    <div> &nbsp;</div>
    <div> &nbsp;</div>
    <div> &nbsp;</div>



    <div class="w3-container w3-center">
        <h1 class="w3-white" style="text-shadow:2px 2px 0 #9f9898"><b>Aktualne knjige </b></h1>
    </div>



    <?php
    $server = "student.veleri.hr";
    $database = "kmogorovi";
    $username = "kmogorovi";
    $password ="6929";

    $conn = mysqli_connect($server, $username, $password, $database) or 
        die("Konekcija nije uspješna");
    $query = "select * from RWAknjiga order by id_knjiga desc limit 5"; //uzima samo 5 knjiga iz baze
    $res = mysqli_query($conn, $query);
    
?>
<div class="w3-container w3-responsive">
<table border="1px"  class="w3-table-all table1">
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
                echo "<a href='".$row['vanjska_poveznica']."' target='_blank'> <img src='".$row['slika']."' alt='' width='200'></a>";
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


            
        echo "</tr>";                     
    }
    mysqli_close($conn);
    ?>
</table>
</div>



    <div> &nbsp;</div>
    <div> &nbsp;</div>
    <div> &nbsp;</div>
</body>

</html>