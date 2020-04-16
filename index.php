<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="60">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./menu.css">
    <title>Welcome to JeonJeon World</title>
  </head>
  <body>

    <div class="sidebar">
      <a class="active" href="index.php?id=home.php">Home</a>
      <a href="index.php?id=time.php">시간표</a>
      <a href="index.php?id=lol.php">롤 티어</a>
      <a href="#about">미정</a>
    </div>

    <div class="contents">
      <div class="header">
        <p>젼젼 세상</p>
      </div>

      <div class="text">
        <?php
        if(isset($_GET['id'])){
          include './menus/'.$_GET['id'];
        }
         ?>
      </div>
    </div>

    <div class="footer">

    </div>

  </body>
</html>
