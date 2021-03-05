$(function(){

  function getGenre(gen, box, slideID){
    let getGenres = [];
    $.ajax({
      url : 'https://yts.mx/api/v2/list_movies.json?genre='+gen+'&page=1&limit=15',
      success : function(data){
        console.log(data);
        for(let i = 0; i < data.data.movies.length; i++){
          let genreHMTL = `<div class="slide-box">
                            <div>
                              <img src="${data.data.movies[i].medium_cover_image}" alt="" />
                              <div class="slide-txt">
                                <h3>${data.data.movies[i].title}</h3>
                                <p class="rating">Rating : ${data.data.movies[i].rating}</p>
                              </div>
                             
                              <a href="${data.data.movies[i].url}">Details</a>
                            </div>
                          </div>`;
                          getGenres += genreHMTL;
        }
        $(box).append(getGenres);
  
        $(slideID).lightSlider({
          item:5,
          slideMove:1,
          loop:true,
          speed:400,
        });
      }
    });
  }
  
  getGenre('action', '.action-contents', '#actionSlide');
  getGenre('romance', '.romance-contents', '#romanceSlide');
  getGenre('drama', '.drama-contents', '#dramaSlide');

  $("a.lSPrev").html("<i class='fas fa-angle-left fa-2x'></i>");
  $("a.lSNext").html("<i class='fas fa-angle-right fa-2x'></i>");

});