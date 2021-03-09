$(function(){



      let getDatas = [];
      $.ajax({
        url:'https://yts.mx/api/v2/list_movies.json?sort_by=year&order_by=desc&limit=15',
        success:function(data){
          //console.log(data.data.movies[0].title);
          for(let i = 0; i < data.data.movies.length; i++){
            if(data.data.movies[i].title == ''){
              data.data.movies[i].title = 'No Title';
            }
            let recentHTML = `<div class="latest-movie-wrap">
                              <div class="latest-movies">
                                <a href="${data.data.movies[i].url}">
                                <div class="latest-img">
                                  <img src="${data.data.movies[i].medium_cover_image}" alt="" />
                                </div>
                                <span class="overlay">
                                <div class="show-more">
                                  <div class="moreRating">평점 : ${data.data.movies[i].rating}</p>
                                  <a class="moreview" href="${data.data.movies[i].url.link}">자세히 보기</a>
                                </div>
                                </span>
                              
                                <h3 class="latest-title">
                                  ${data.data.movies[i].title}
                                </h3>
                                </a>
                              </div>
                            </div>`;
                            getDatas += recentHTML;
          }
          $(".latestCon").append(getDatas);
        }
      });
      //console.log(typeof(currentPage));

  

  
    function goToPrevNext(a, b){
      if(currentPage == a){
        return false;
      } else {
        $(".recent-movie-wrap").remove();
        getData(b);
        $(".loading").show();
       
      }
    }
  
    $(document).ajaxComplete(function(){
      $(".loading").hide();
    });
  
  });

//   var listElm = document.querySelector('#infinite-list');

// // Add 20 items.
// var nextItem = 1;
// var loadMore = function() {
//   for (var i = 0; i < 20; i++) {
//     var item = document.createElement('li');
//     item.innerText = 'Item ' + nextItem++;
//     listElm.appendChild(item);
//   }
// }

// // Detect when scrolled to bottom.
// listElm.addEventListener('scroll', function() {
//   if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
//     loadMore();
//   }
// });

// // Initially load some items.
// loadMore();