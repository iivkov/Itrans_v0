<?php 
    include('../scripts/functions.php');
    if (!isAdmin()) {
        $_SESSION['msg'] = "Pristup odbijen.";
        header('location: vehicles.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Narudžbe</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <header>
        <h1>Itrans</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../index.html">Početna</a></li>
            <li><a href="about.html">O nama</a></li>
            <li><a href="vehicles.php">Vozila</a></li>
            <li><a href="profile.php">Korisnik</a></li>
        </ul>
    </nav>

    <main>

        <article>
            <h2>Narudžbe</h2>
            <p>Ovdje su ispisane tekuće narudžbe.</p>
        </article>

        <article>
        <table width="300px" border="1px" cellpading="2" cellspacing="2">
                <tr><td><b>Oznaka narudžbe</b></td>
                <td><b>Nadnevak polaska</b></td>
                <td><b>Mjesto polaska</b></td>
                <td><b>Nadnevak dolaska</b></td>
                <td><b>Mjesto dolaska</b></td>
                <td><b>Podatci narudžbe</b></td>
                <td><b>Oznaka korisnika</b></td>
                <td><b>Oznaka vozila</b></td></tr>
            <?php
            $sql = "SELECT id_order, departure_date, departure_place, arrival_date, arrival_place, order_info, id_user, id_vehicle FROM orders";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr><td>'.$row["id_order"].'</td>';
                    echo '<td>'.$row["departure_date"].'</td>';
                    echo '<td>'.$row["departure_place"].'</td>';
                    echo '<td>'.$row["arrival_date"].'</td>';
                    echo '<td>'.$row["arrival_place"].'</td>';
                    echo '<td>'.$row["order_info"].'</td>';
                    echo '<td>'.$row["id_user"].'</td>';
                    echo '<td>'.$row["id_vehicle"].'</td>';
                    '</tr>';
                }
            }
            echo '</table>';
        
            $db->close();
            ?>
            
        </article>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>
</body>

</html>