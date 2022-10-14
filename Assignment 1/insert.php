<?php

require('config.php');

// if ($checkdata !== '') {
$MusicLength =  $_REQUEST['MusicLength'];
$MusicName = $_REQUEST['MusicName'];
$MusicGenre =  $_REQUEST['MusicGenre'];
$MusicSinger = $_REQUEST['MusicSinger'];
$sql = "INSERT INTO music  VALUES ('$MusicLength',
            '$MusicName','$MusicGenre','$MusicSinger')";
if (mysqli_query($conn, $sql)) {
    echo "<h3>Music Successfully Added</h3>";
    header('Location: select.php');
} else {
    echo "Error $sql. "
        . mysqli_error($conn);
}
// }


// Close connection
mysqli_close($conn);
