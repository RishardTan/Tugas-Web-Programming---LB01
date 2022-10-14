<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $MusicLength =  $_REQUEST['MusicLength'];
    $MusicName = $_REQUEST['MusicName'];
    $MusicGenre =  $_REQUEST['MusicGenre'];
    $MusicSinger = $_REQUEST['MusicSinger'];

    // update user data
    $result = mysqli_query($conn, "UPDATE music SET MusicLength='$MusicLength',MusicGenre='$MusicGenre',MusicSinger='$MusicSinger' WHERE MusicName='$MusicName'");

    // Redirect to homepage to display updated user in list
    header("Location: select.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$MusicName = $_GET['MusicName'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM music WHERE MusicName='$MusicName'");

while ($row = mysqli_fetch_array($result)) {
    $MusicLength = $row['MusicLength'];
    $MusicName = $row['MusicName'];
    $MusicGenre = $row['MusicGenre'];
    $MusicSinger = $row['MusicSinger'];
}
?>
<html>

<head>
    <title>Edit Music Data</title>
</head>

<body>
    <center>
        <div style="width: 500px; background-color: grey; margin:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;">
            <a href="select.php">Home</a>
            <br /><br />

            <form name="update_music" method="post" action="edit.php">
                <table border="0">
                    <tr>
                        <td>Music Singer</td>
                        <td><input type="text" name="MusicSinger" value=<?php echo $MusicSinger; ?>></td>
                    </tr>
                    <tr>
                        <td>Music Length</td>
                        <td><input type="text" name="MusicLength" value=<?php echo $MusicLength; ?>></td>
                    </tr>
                    <tr>
                        <td>Music Genre</td>
                        <td><input type="text" name="MusicGenre" value=<?php echo $MusicGenre; ?>></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="MusicName" value=<?php echo $_GET['MusicName']; ?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>

    </center>
</body>

</html>