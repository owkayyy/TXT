<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TXT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <link href="./menu.css" rel="stylesheet" />
    <link rel="stylesheet" href="/TXT/styles/style.css" >
  </head>

  <body>
    <button class="burger" onclick="toggleMenu()"></button>
    <div class="background"></div>
    <div class="menu">
      <nav>
        <a style="animation-delay: 0.2s" href="/TXT/about.php">About</a>
        <a style="animation-delay: 0.2s" href="/TXT/album/album.php">Album</a>
        <a style="animation-delay: 0.2s" href="/TXT/single/single.php">Single</a>
        <a style="animation-delay: 0.2s" href="/TXT/ep/ep.php">EP</a>
        <a style="animation-delay: 0.2" href="/TXT/cover/cover.php">Cover</a>
      </nav>
    </div>

    <script type="text/javascript">
      const toggleMenu = () => document.body.classList.toggle("open");
    </script>

    <div class="wrapper">
      <div class="card">
        <img src="/TXT/images/yeonjun.jpg" >
        <div class="info">
          <h2>Yeonjun<br>연준</h2>
          <p></p>
          <a href="/TXT/profile/yeonjun.php" class="btn">Read More</a>
        </div>
      </div>


      <div class="card">
        <img src="/TXT/images/taehyun.jpg" >
        <div class="info">
          <h2>Taehyun<br>태현</h2>
          <p></p>
          <a href="/TXT/profile/taehyun.php" class="btn">Read More</a>
        </div>
      </div>

      <div class="card">
        <img src="/TXT/images/beomgyu.jpg" >
        <div class="info">
          <h2>Beomgyu<br>범규</h2>
          <p>Visual</p>
          <a href="/TXT/profile/beomgyu.php" class="btn">Read More</a>
        </div>
      </div>
      <div class="card">
        <img src="/TXT/images/hueningkai.jpg" >
        <div class="info">
          <h2>Huening Kai<br>휴닝카이</h2>
          <p>Maknae</p>
          <a href="/TXT/profile/hueningkai.php" class="btn">Read More</a>
        </div>
      </div>

      <div class="card">
        <img src="/TXT/images/soobin.jpg" >
        <div class="info">
          <h2>Soobin<br>수빈</h2>
          <p>Leader</p>
          <a href="/TXT/profile/soobin.php" class="btn">Read More</a>
        </div>
      </div>
    </div>

</div>

  </body>
</html>