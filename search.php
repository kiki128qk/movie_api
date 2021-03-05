<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie APP</title>
  </head>
  <body>
    <div class="wrap">
      <!-- <div class="movie_box">
        <img src="" alt="" />
        <h2>제목 :</h2>
        <p>감독 :</p>
        <p>개봉 :</p>
        <p>평점 :</p>
      </div> -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(function () {
        let searchValue = document.location.href.split("=")[1];
        let decodeValue = decodeURI(searchValue);
        console.log(decodeValue);

        $.ajax({
          type: "POST",
          url: "/movie_api/data/api.php",
          data: {
            search_value: decodeValue,
          },
          success: function (data) {
            let obj = JSON.parse(data);
            //console.log(obj);
            //console.log(obj.items);

            if (obj.items.length == 0) {
              alert("데이터가 없습니다.");
              location.href = "/movie_api/index.html";
            }

            let itemContents = [];
            $.each(obj.items, function (i, item) {
              //console.log(item.title);
              let itemHTML = `<div class="movie_box">
                                <img src="${item.image}" alt="" />
                                <h2>제목 :${item.title}</h2>
                                <p>감독 :${item.director}</p>
                                <p>개봉 :${item.pubDate}</p>
                                <p>평점 :${item.userRating}</p>
                              </div>`;
              itemContents.push($(itemHTML).get(0));
            });
            $(".wrap").append(itemContents);
          },
        });
      });
    </script>
  </body>
</html>
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
   


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/movie_api/plugin/lightslider.js"></script>
    <script src="/movie_api/js/genre.js"></script>
    <script src="/movie_api/js/Banner.js"></script>
    <script>
      $(function () {
        let searchValue = document.location.href.split("=")[1];
        let decodeValue = decodeURI(searchValue);
        console.log(decodeValue);

        $.ajax({
          type: "POST",
          url: "/movie_api/data/api.php",
          data: {
            search_value: decodeValue,
          },
          success: function (data) {
            let obj = JSON.parse(data);
            //console.log(obj);
            //console.log(obj.items);

            if (obj.items.length == 0) {
              alert("데이터가 없습니다.");
              location.href = "/movie_api/index.html";
            }

            let itemContents = [];
            $.each(obj.items, function (i, item) {
              //console.log(item.title);
              let itemHTML = `<div class="movie_box">
                                <img src="${item.image}" alt="" />
                                <h2>제목 :${item.title}</h2>
                                <p>감독 :${item.director}</p>
                                <p>개봉 :${item.pubDate}</p>
                                <p>평점 :${item.userRating}</p>
                              </div>`;
              itemContents.push($(itemHTML).get(0));
            });
            $(".wrap").append(itemContents);
          },
        });
      });
    </script>
    <script src="/movie_api/js/recent.js"></script>
  </body>
</html>
