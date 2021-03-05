$(function(){

  function getGenre( box, slideID){
    let getGenres = [];
    $.ajax({
      url : 'https://yts.mx/api/v2/list_movies.json?sort_by=year&order_by=desc',
      success : function(data){
        console.log(data);
        for(let i = 0; i < data.data.movies.length; i++){
          let genreHMTL = `<div class="slide-box">
                            <div>
                              <img src="${data.data.movies[i].medium_cover_image}" alt="" />
                            
                            </div>
                          </div>`;
                          getGenres += genreHMTL;
        }
        $(box).append(getGenres);
  
        $(slideID).lightSlider({
          item:5,
          slideMove:1,
          auto:true,
          loop:true,
          speed:600,
        });
      }
    });
  }
  
  getGenre( '.Banner', '#Banner');
  });