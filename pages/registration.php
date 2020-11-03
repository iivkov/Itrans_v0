<?php include('../scripts/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Registracija</title>
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
            <h2>Registracija</h2>
            <p>Ovdje se možete registrirati.</p>
        </article>

        <div class="user_form">
            <form method="post" action="registration.php">
            <?php echo display_error(); ?>
                <input type="text" class="input" name="user_name" placeholder="Unesite ime">
                <input type="text" class="input" name="user_surname" placeholder="Unesite prezime">
                <input type="text" class="input" name="user_personal_number" placeholder="Unesite OIB">
                <input type="email" class="input" name="email" placeholder="Unesite e-poštu" value="<?php echo $email; ?>">
                <input type="tel" class="input" name="user_telephone" placeholder="Unesite telefonski broj">
                <input type="text" class="input" name="user_address" placeholder="Unesite adresu">
                <input type="text" class="input" name="user_postal_code" placeholder="Unesite poštanski broj">
                <input type="text" class="input" name="user_town" placeholder="Unesite mjesto">
                <input type="text" class="input" name="user_country" placeholder="Unesite državu">
		        <input type="password"  class="input" name="password_1" placeholder="Unesite zaporku">
                <input type="password"  class="input" name="password_2" placeholder="Ponovno unesite zaporku">
		        <button type="submit" class="button" name="register_btn">Registriraj</button>
	            <p>
		            <a href="login.php" class="question">Već ste registrirani? </a>
	            </p>
            </form>
        <div/>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>

</body>

</html>