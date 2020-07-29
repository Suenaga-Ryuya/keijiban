<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>課題</title>

  <!-- CSS -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <?php
  
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson2;host=localhost;", "root", "");
  $stmt = $pdo->query("select * from 4each_keijiban");

  ?>

  <!-- ヘッダー -->
  <header>
    <h1 class="container"><img src="4eachblog_logo.jpg"></h1>
    <nav>
      <div class="container">
        <ul class="menu">
            <li class="menu-item">トップ</li>
            <li class="menu-item">プロフィール</li>
            <li class="menu-item">4eachについて</li>
            <li class="menu-item">登録フォーム</li>
            <li class="menu-item">問い合わせ</li>
            <li class="menu-item">その他</li>
          </ul><!-- menu -->
      </div>
      </nav>
  </header>

  <!-- contents -->
  <main class="layout">
    <div class="container flexbox">

      <!-- 掲示板セクション -->
      <section class="bulletin-board">
        <h2 class="section-title">プログラミングに役立つ掲示板</h2>
        <!-- 入力フォーム -->
        <div class="post-form">

          <form action="insert.php" method="POST">
            <h3 class="form-heading">入力フォーム</h3>
            <!-- ハンドルネーム -->
            <label for="handlename">ハンドルネーム<input id="handlename" class="frame" type="text" name="handlename"></label>
            <!-- タイトル -->
            <label for="title">タイトル<input id="title" class="frame" type="text" name="title"></label>
            <!-- コメント -->
            <label for="comments">コメント<textarea name="comments" id="comments" class="frame" cols="60" rows="6"></textarea></label>
            <!-- 投稿ボタン -->
            <input class="btn" type="submit" value="投稿する">

          </form>

        </div><!-- 入力フォーム -->

        <!-- 投稿記事 -->
        <?php

        foreach ($stmt as $row) {

        echo "<article class='post'>";
        echo "<h3 class='article-title'>" . $row['title'] ."</h3>";
        echo "<p class='article-content'>" . $row['comments'] . "</p>";
        echo "<small>posted by " . $row['handlename'] . "</small>";
        echo "</article>";
        
        }
        
        ?>

        <!-- 投稿記事 -->

      </section><!-- 掲示板セクション -->

      <!-- サイドバー -->
      <div class="category-section">

        <section class="category">
          <h2 class="side-title">人気の記事</h2>
          <div>
            <ul class="side-menu">
              <li class="side-menu-item">PHPオススメ本</li>
              <li class="side-menu-item">PHP MyAdminの使い方</li>
              <li class="side-menu-item">今人気のエディタ Top5</li>
              <li class="side-menu-item">HTMLの基礎</li>
            </ul>
          </div>
        </section>

        <section class="category">
          <h2 class="side-title">オススメリンク</h2>
          <div>
            <ul class="side-menu">
              <li class="side-menu-item">インターノウス株式会社</li>
              <li class="side-menu-item">XAMPPのダウンロード</li>
              <li class="side-menu-item">Eclipseのダウンロード</li>
              <li class="side-menu-item">Bracketsのダウンロード</li>
            </ul>
          </div>
        </section>

        <section class="category">
          <h2 class="side-title">カテゴリ</h2>
          <div>
            <ul class="side-menu">
              <li class="side-menu-item">HTML</li>
              <li class="side-menu-item">PHP</li>
              <li class="side-menu-item">MySQL</li>
              <li class="side-menu-item">JavaScript</li>
            </ul>
          </div>
        </section>

      </div><!-- サイドバー -->

    </div>
  </main>

  <!-- フッター -->
  <footer>
    <p class="copy-right">copyright &copy; internous | 4each blog the which provides A to Z about programming</p>
  </footer>


</body>
</html>
