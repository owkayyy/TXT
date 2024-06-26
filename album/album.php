<!DOCTYPE html>
<html>
    <head>
        <title>Album</title>
        <link rel="stylesheet" href="/TXT/styles/navigation.css">
        <link rel="stylesheet" href="/TXT/styles/song.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
        
</head>

<body>
    <section class="section-home">
    <div class="song-background">
    <?php include("../includes/navigation.php") ?>
    <?php include("../includes/search.php") ?>
        <h1>Album</h1>
            <table border="0" class="song-table">
                <tbody>
                    <tr>
                        <td><a href="/TXT/album/album1.php"><img src="/TXT/images/album1.png" style="width: 250px; height: 200px;"></a></td>
                        <td><a href="/TXT/album/album2.php"><img src="/TXT/images/album2.png" style="width: 250px; height: 200px;"></a></td>
                        <td><a href="/TXT/album/album3.php"><img src="/TXT/images/album3.png" style="width: 250px; height: 200px;"></a></td>
                        <td><a href="/TXT/album/album4.php"><img src="/TXT/images/album4.jpg" style="width: 250px; height: 200px;"></a></td>
                    </tr>

                    <tr>
                        <td><a href="/TXT/album/album1.php">The Dream Chapter: MAGIC</a></td>
                        <td><a href="/TXT/album/album2.php">STILL DREAMING</a></td>
                        <td><a href="/TXT/album/album3.php">The Chaos Chapter: Freeze</a></td>
                        <td><a href="/TXT/album/album4.php">The Chaos Chapter: Fight or Escape</a></td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>
</html>