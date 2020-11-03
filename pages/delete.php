<?php
    include('../scripts/connect.php');

    $id_vehicle = $_GET['id_vehicle'];
    $sql = "DELETE from vehicles WHERE id_vehicle='$id_vehicle'";
    mysqli_query($db, $sql);
    ?>