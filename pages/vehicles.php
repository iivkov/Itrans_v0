<?php include('../scripts/functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Vozila</title>
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
            <h2>Vozila</h2>
            <p>Ovdje su ispisana naša vozila koja možete naručiti. 
                Podsjećamo da je za naručivanje vozila potrebno biti registriran i prijavljen.</p>
        </article>

        <article>
        <table width="300px" border="1px" cellpading="2" cellspacing="2">
                <tr><td><b>Reg. oznaka</b></td>
                <td><b>Tip</b></td>
                <td><b>Nadogradnja</b></td>
                <td><b>Duljina [m]</b></td>
                <td><b>Širina [m]</b></td>
                <td><b>Visina [m]</b></td>
                <td><b>Nosivost [t]</b></td></tr>
            <?php
            $sql = "SELECT id_vehicle, type, set_up, length, width, height, capacity FROM vehicles";
            $result = mysqli_query($db, $sql);
            
            if (mysqli_num_rows($result) > 0) { 
                while($row = mysqli_fetch_assoc($result)) { 
                    echo '<tr><td>'.$row["id_vehicle"].'</td>';
                    echo '<td>'.$row["type"].'</td>';
                    echo '<td>'.$row["set_up"].'</td>';
                    echo '<td>'.$row["length"].'</td>';
                    echo '<td>'.$row["width"].'</td>';
                    echo '<td>'.$row["height"].'</td>';
                    echo '<td>'.$row["capacity"].'</td>';
                    echo '<td><a href="order.php?id_vehicle='.$row["id_vehicle"].'">Naruči</a></td>';
                    if(isAdmin())
                    {
                        echo '<td><a href="delete.php?id_vehicle='.$row["id_vehicle"].'">Obriši</a></td>';
                    }
                    '</tr>';
                }
            }
            echo '</table>';

            if(isAdmin())
            {
                echo '<td><a href="add.php">Dodaj vozilo</a></td>';
            }
        
            $db->close();
            ?>
            
        </article>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>
</body>

</html>