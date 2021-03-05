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
        // location.href = "/movie_api/index.php";
        history.go(-1);
      }

      let itemContents = [];
      $.each(obj.items, function (i, item) {
        //console.log(item.title);
        let itemHTML = `<div class="movie_box">
                          <div class="imgCon">
                            <img src="${item.image}" alt="" />
                          </div>

                          <div class="TextCon">
                            <h2>제목 :${item.title}</h2>
                            <p>감독 :${item.director}</p>
                            <p>개봉 :${item.pubDate}</p>
                            </div>
                          <div class="show-more">
                            <p>평점 :${item.userRating}</p>
                            <a href="${item.link}">더보기</a>
                          </div>
                        </div>`;
        itemContents.push($(itemHTML).get(0));
      });
      $(".outcomeCon").append(itemContents);
    },
  });
});