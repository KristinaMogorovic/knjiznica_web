<?php
    $id_knjiga = $_GET['id_knjiga'];

    $server = "student.veleri.hr";
    $database = "kmogorovi";
    $username = "kmogorovi";
    $password ="6929";

    $conn = mysqli_connect($server, $username, $password, $database) or 
        die("Konekcija nije uspješna");
    
    $query = "SELECT ukupan_broj-rezervirani-posudeni AS slobodni FROM RWAknjiga WHERE id_knjiga=".$id_knjiga;

    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($res)){
        if ($row['slobodni'] <= 0) {
            echo "Nema slobodnih knjiga";
            mysqli_close($conn);
            exit();
        }
    }

    $query1 = "UPDATE RWAknjiga SET rezervirani=rezervirani+1 WHERE id_knjiga =".$id_knjiga;
    $res1 = mysqli_query($conn, $query1);
    if ($res1) {
        echo "Knjiga je uspješno ažurirana. ";
    } else {
        echo $query1;
    }
    
    $query2 = "INSERT INTO RWArezervacija (id_rezervacija, id_clan, datum_rezervacije, id_knjiga) VALUES (NULL, 3322 ,'2023/12/07', ".$id_knjiga.")";
    $res2 = mysqli_query($conn, $query2);
    if ($res2) {
        echo "Rezervacija je dodana. ";
    } else {
        echo $query2;
    }
    
    mysqli_close($conn);

?>
