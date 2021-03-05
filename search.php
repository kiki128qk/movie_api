<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Movie</title>

    <script src="https://kit.fontawesome.com/9e31582c84.js" crossorigin="anonymous"></script>
    <!-- plugin css link -->
    <link rel="stylesheet" href="/movie_api/plugin/lightslider.css" />

    <!-- style css link -->
    <link rel="stylesheet" href="/movie_api/css/reset.css" />
    <link rel="stylesheet" href="/movie_api/css/style.css" />

  </head>
  <body>
    <div class="wrap">
    <header>
        <Section class="header">
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/movie_api/include/header.php';
        ?>
      </header>
    <Section class="searchsmall">
      <div class="search-box">
        <input type="text" / class="searchInput">
        <button type="button"class="sendBtn">
          검색
        </button>
      </div>
    </Section>
    <Section class="outcomeCons">
      <div class="outcomeCon" id="outcomeCon">
      </div>
    </Section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/movie_api/js/search.js"></script>
  </body>
</html>
