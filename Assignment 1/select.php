<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div style="width:70%;margin: 20px 15%;">
        <h1 class="text-center" style="font-size: 26px;" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Music List</h1>
        <a href='./index.php'>Insert Music Here</a>
        <table class="table table-striped table-dark table-hover" style="margin-top: 3%;">
            <thead>
                <tr>
                    <th scope="col">Music Length</th>
                    <th scope="col">Music Name</th>
                    <th scope="col">Music Genre</th>
                    <th scope="col">Music Singer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM music";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    var_dump(mysqli_num_rows($result) > 0);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<th scope='col'>{$row['MusicLength']}</th>";
                        echo "<th scope='col'>{$row['MusicName']}</th>";
                        echo "<th scope='col'>{$row['MusicGenre']}</th>";
                        echo "<th scope='col'>{$row['MusicSinger']}</th>";
                        echo "<td scope='col'><a href='edit.php?MusicName=$row[MusicName]'>Edit</a> | <a href='delete.php?MusicName=$row[MusicName]'>Delete</a></th>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='5'> No Music <a href='./index.php'>Here</a> to Input Matkul Data</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>