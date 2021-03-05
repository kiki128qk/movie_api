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

      <div class="detailCon">
          <div class="detailImg">
          </div>
          <div class="detailTxt">
            <h3 class="detailTit"></h3>
            i.detail

          </div>
          <div class="moreVeiw">
            <a href="">더 보기</a>
          </div>
        
      </div>


    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(function () {
        let detailID = document.location.href.split("=")[1];
        //console.log(detailID);

          $.ajax({
            url: "https://yts.mx/api/v2/movie_details.json?movie_id=" + detailID,
            success: function (detailData) {
              console.log(detailData);
              for(let i = 0; i < data.data.movies.length; i++){
            if(data.data.movies[i].title == ''){
              data.data.movies[i].title = 'No Title';
            }
            //이미지 없는 개채 속성 또한 지정해야함
            
            let detailHTML = `<div class="detailCon">
                                <div class="detailImg">
                                ${data.data.movies[i].url}
                                </div>
                                <div class="detailTxt">
                                  <h3 class="detailTit"></h3>

                                </div>
                                <div class="moreVeiw"></div>
                              
                            </div>`;
                            detailDatas += detailHTML;
          }
          $(".detailCon").append(detailDatas);

          },
        });
      });
    </script>
  </body>
</html>
