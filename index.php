
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/movie_api/include/header.php';
        ?>

    <Section class="searchSce">
      <div class="search-box">
        <input type="text" / class="searchInput"placeholder="영화 제목을 입력해 주세요".>
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
       <h3>
        <a href="/movie_api/latest.php">최신 영화</a>
        <a href="/movie_api/latest.php">더 보기</a>
       </h3>
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
            <span>
              <a href="#">action</a>
              <a href="#">더 보기</a>
            </span>
            <div class="action-contents" id="actionSlide"></div>
          </div>
          <div class="romance">
            <span>
            <a href="#">romance</a>
            <a href="#">더 보기</a>
            </span>
            <div class="romance-contents" id="romanceSlide"></div>
          </div>
          <div class="drama">
            <span>
              <a href="#">drama</a>
              <a href="#">더 보기</a>
            </span>
            <div class="drama-contents" id="dramaSlide"></div>
          </div>
        </div>

    </Section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/movie_api/include/footer.php';
    ?>
