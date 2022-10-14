<!DOCTYPE html>
<html lang="en">

<head>
    <title>SpotifQ</title>
</head>

<body>
    <center>
        <div style="width: 500px; margin-top: 70px;">
            <div style="background-color: grey; margin:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;">
                <h1>Insert Music to Database</h1>
                <form action="insert.php" method="post">
                    <p>
                        <label for="MusicLength">Music Length:</label>
                        <input type="text" name="MusicLength" id="MusicLength">
                    </p>
                    <p>
                        <label for="MusicName">Music Name:</label>
                        <input type="text" name="MusicName" id="MusicName">
                    </p>
                    <p>
                        <label for="MusicGenre">Music Genre:</label>
                        <input type="text" name="MusicGenre" id="MusicGenre">
                    </p>
                    <p>
                        <label for="MusicSinger">Music Singer:</label>
                        <input type="text" name="MusicSinger" id="MusicSinger">
                    </p>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>


    </center>
</body>

</html>