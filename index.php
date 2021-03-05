<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie APP</title>

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
    <Section class="searchSce">
      <div class="search-box">
        <input type="text" / class="searchInput">
        <button type="button"class="sendBtn">
          검색
        </button>
      </div>
    </Section>
    <Section class="bannerSec">
      <div class="Banner" id="Banner">
      </div>
    </Section>
  
    <div class="numContainer">
       <h3><a href="#">최신 영화</a></h3>
      <div class="loading">
        <img src="/movie_api/data/loading.gif" alt="" />
      </div>
      <div class="container clear"></div>
      <div class="numBtns">
        <button type="button" class="prev arrow"><</button>
        <button type="button" class="pageNum" value="1">1</button>
        <button type="button" class="pageNum" value="2">2</button>
        <button type="button" class="pageNum" value="3">3</button>
        <button type="button" class="pageNum" value="4">4</button>
        <button type="button" class="pageNum" value="5">5</button>
        <button type="button" class="next arrow">></button>
      </div>
    </div> 
    
    </div>

    <Section class="genre">
      <div class="wrap">
        <div class="genre-section">
          <div class="action">
            <span><a href="#">action</a></span>
            <div class="action-contents" id="actionSlide"></div>
          </div>
          <div class="romance">
            <span><a href="#">romance</a></span>
            <div class="romance-contents" id="romanceSlide"></div>
          </div>
          <div class="drama">
            <span><a href="#">drama</a></span>
            <div class="drama-contents" id="dramaSlide"></div>
          </div>
        </div>

    </Section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/movie_api/plugin/lightslider.js"></script>
    <script src="/movie_api/js/genre.js"></script>
    <script src="/movie_api/js/Banner.js"></script>
    <script>
      $(function () {
        function searchMovie() {
          let searchResult = $(".searchInput").val();
          if (!searchResult) {
            alert("검색어를 입력해 주세요.");
            return false;
          }

          location.href = "/movie_api/search.php?key=" + searchResult;
        }

        $(".sendBtn").click(function () {
          searchMovie();
        });

        //press enter
        document.addEventListener("keydown", function (e) {
          const keyCode = e.keyCode;
          if (keyCode == 13) {
            searchMovie();
          }
        });
      });
    </script>
    <script src="/movie_api/js/recent.js"></script>
  </body>
</html>
