<?php include('../scripts/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Dodavanje vozila</title>
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
            <h2>Dodavanje vozila</h2>
            <p>Unesi podatke o novom vozilu.</p>
        </article>

        <div class="user_form">
            <form method="post" action="add.php">
            <?php echo display_error(); ?>
                <input type="text" class="input" name="id_vehicle" placeholder="Unesite registracijsku oznaku vozila" value="<?php echo $id_vehicle; ?>">
                <input type="text" class="input" name="type" placeholder="Unesite tip vozila">
                <input type="text" class="input" name="set_up" placeholder="Unesite nadogradnju vozila">
                <input type="number" step ="0.01" class="input" name="length" placeholder="Unesite duljinu vozila (u metrima)">
                <input type="number" step ="0.01" class="input" name="width" placeholder="Unesite širinu vozila (u metrima)">
                <input type="number" step ="0.01" class="input" name="height" placeholder="Unesite visinu vozila (u metrima)">
                <input type="number" class="input" name="capacity" placeholder="Unesite nosivost vozila (u tonama)">
		        <button type="submit" class="button" name="add_btn">Dodaj</button>
            </form>
        <div/>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>

</body>

</html>