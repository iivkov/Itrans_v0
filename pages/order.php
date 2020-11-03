<?php 
    include('../scripts/functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Narudžba vozila</title>
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
            <h2>Narudžba vozila</h2>
        </article>

        <div class="user_form">
        <?php
        if(!isset($_POST['order_btn']))
        {
            ?>
            <form method="post" action="order.php"> <div><?php echo $_GET["id_vehicle"];?></div>
                <input type="date" class="input" name="departure_date" placeholder="Unesite nadnevak polaska">
                <input type="text" class="input" name="departure_place" placeholder="Unesite mjesto polaska">
                <input type="date" class="input" name="arrival_date" placeholder="Unesite nadnevak dolaska">
                <input type="text" class="input" name="arrival_place" placeholder="Unesite mjesto dolaska">
                <input type="text" class="input" name="order_info" placeholder="Unesite dodatne informacije o prijevozu">
                <input type="hidden" name="id_vehicle" value="<?php echo $_GET["id_vehicle"]; ?>">
                <button type="submit" class="button" name="order_btn">Naruči</button>
            </form>
            <?php
        }
        else{
            $dbservername = "localhost";
            $dbusername   = "root";
            $dbpassword   = "";
            $dbname   = "itrans";
            
            $db = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
            
            if($db->connect_error) {   
                die("Error: " . $db->connect_error);
            }
            $id_vehicle = $_POST['id_vehicle'] ?? '';
            $departure_date=$_POST['departure_date'] ?? '';
            $departure_place=$_POST['departure_place'] ?? '';
            $arrival_date=$_POST['arrival_date'] ?? '';
            $arrival_place=$_POST['arrival_place'] ?? '';
            $order_info=$_POST['order_info'] ?? '';
            $id_user=$_SESSION['user']['id_user'];
            $sql_form = "INSERT INTO orders(id_vehicle, departure_date, departure_place, arrival_date, arrival_place, order_info, id_user)
                VALUES('$id_vehicle', '$departure_date', '$departure_place', '$arrival_date', '$arrival_place', '$order_info', '$id_user')";
            if (mysqli_query($db, $sql_form))
            {
                echo "Uspješno ste naručili vozilo.";
            } 
            else
            {
                echo "Dogodila se pogrješka: " . $sql_form . "" . mysqli_error($db);
            }
        }
        ?>
        <div/>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>

</body>

</html>