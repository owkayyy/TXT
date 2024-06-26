
<!DOCTYPE html>
<head>
    <title>Tomorrow X Together</title>
    <link rel="stylesheet" href="../styles/navigation.css">
    <link rel="stylesheet" href="../styles/song.css">
    <link rel="stylesheet" href="../styles/button.css" >
    <link rel="stylesheet" href="../styles/slider.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="script.js" defer></script>
</head>

<body>
    <section class="section-home">
    <?php include("../includes/navigation.php") ?>
    <?php include("../includes/search.php") ?>
        <h2>Tomorrow X Together<br>
        <img src="../images/txt.jpg" ></h2>
        <h5>TXT (투모로우바이투게더), also known as TOMORROW X TOGETHER, is a 5-member boy group formed by Big Hit Music 
            (part of HYBE Labels).
            <br>The group consists of (from left to right): Yeonjun, Taehyun, Beomgyu, Huening Kai and Soobin. 
            <br>They debuted on March 4th, 2019 with their first mini-album 'The Dream Chapter: STAR'. 
            <br>There are no set positions within the group, it changes each comeback/song.
        </h5>
        <div class="container">
            <a href="../profile/yeonjun.php"><span>Yeonjun</span></a>
            <a href="../profile/taehyun.php"><span>Taehyun</span></a>
            <a href="../profile/beomgyu.php"><span>Beomgyu</span></a>
            <a href="../profile/hueningkai.php"><span>Huening Kai</span></a>
            <a href="../profile/soobin.php"><span>Soobin</span></a>
        </div>

         <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <img src="../images/txt3.jpeg" alt="img" draggable="false">
                <img src="../images/txt4.jpeg" alt="img" draggable="false">
                <img src="../images/txt5.jpeg" alt="img" draggable="false">
                <img src="../images/txt6.jpeg" alt="img" draggable="false">
                <img src="../images/txt7.jpg" alt="img" draggable="false">
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>

</body>
</html>
