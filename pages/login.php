<?php include('../scripts/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Prijava</title>
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
            <h2>Prijava</h2>
            <p>Ovdje se možete prijaviti koristeći svoju adresu e-pošte i zaporku.</p>
        </article>

        <div class="user_form">
            <form method="post" action="login.php">
            <?php echo display_error(); ?>
		        <input type="email" class="input" name="email" placeholder="Unesite e-poštu">
		        <input type="password"  class="input" name="password" placeholder="Unesite zaporku">
		        <button type="submit" class="button" name="login_btn">Prijava</button>
                <p>
		            <a href="password_reset.php" class="question">Zaboravili ste zaporku? </a>
	            </p>
	            <p>
		            <a href="registration.php" class="question">Niste se registrirali? </a>
	            </p>
            </form>
        <div/>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>

</body>

</html>