<?php 
    include('../scripts/functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if(isAdmin())
    {
        header('location: administration.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itrans – Korisnički profil</title>
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
            <h2>Korisnički profil</h2>
            <p>Poštovani, uspješno ste se prijavili. Ovo je vaš korisnički profil.</p>
		</article>
		
		<div class="profile_info">
		<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['email']; ?></strong>

					<small>
						<i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['id_user']); ?>)</i> 
						<br>
						<a href="profile.php?logout='1'" style="color: red;">odjava</a>
					</small>

				<?php endif ?>
        <div/>

    </main>

    <footer>
        <p>&copy 2019 ivan.ivkovic@etfos.hr</p>
    </footer>

</body>

</html>