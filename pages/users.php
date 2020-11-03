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
    <title>Itrans – Korisnici</title>
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
            <h2>Korisnici</h2>
            <p>Ovdje su ispisani svi registrirani korisnici.</p>
        </article>

        <article>
        <table width="300px" border="1px" cellpading="2" cellspacing="2">
                <tr><td><b>Oznaka korisnika</b></td>
                <td><b>E-mail</b></td>
                <td><b>Ime</b></td>
                <td><b>Prezime</b></td>
                <td><b>OIB</b></td>
                <td><b>Telefon</b></td>
                <td><b>Adresa</b></td>
                <td><b>Poštanski broj</b></td>
                <td><b>Mjesto</b></td>
                <td><b>Država</b></td>
                <td><b>Vrsta korisnika</b></td></tr>
            <?php
            $sql = "SELECT id_user, email, user_name, user_surname, user_personal_number, user_telephone, user_address, user_postal_code, user_town, user_country, user_type FROM users";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr><td>'.$row["id_user"].'</td>';
                    echo '<td>'.$row["email"].'</td>';
                    echo '<td>'.$row["user_name"].'</td>';
                    echo '<td>'.$row["user_surname"].'</td>';
                    echo '<td>'.$row["user_personal_number"].'</td>';
                    echo '<td>'.$row["user_telephone"].'</td>';
                    echo '<td>'.$row["user_address"].'</td>';
                    echo '<td>'.$row["user_postal_code"].'</td>';
                    echo '<td>'.$row["user_town"].'</td>';
                    echo '<td>'.$row["user_country"].'</td>';
                    echo '<td>'.$row["user_type"].'</td>';
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