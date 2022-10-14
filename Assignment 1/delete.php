<?php

require('config.php');

$MusicName = $_GET['MusicName'];

$sql = "DELETE FROM music WHERE MusicName='$MusicName'";

if (mysqli_query($conn, $sql)) {

    header('Location: index.php');
} else {
    echo "Error $sql. "
        . mysqli_error($conn);
}
