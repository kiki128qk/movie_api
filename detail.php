<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(function () {
        let detailID = document.location.href.split("=")[1];
        //console.log(detailID);

        $.ajax({
          url: "https://yts.mx/api/v2/movie_details.json?movie_id=" + detailID,
          success: function (detailData) {
            console.log(detailData);
          },
        });
      });
    </script>
  </body>
</html>
