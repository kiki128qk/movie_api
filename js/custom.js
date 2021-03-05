$(document).ready(function(){
  $(".mobileMenu").click(function(){
      $(".mobileMenu").toggleClass("rotate");
     
      if($(".mobileMenu").hasClass("rotate")){
        $("header .gnb").slideDown("fast");
        //console.log ("가지고 있음,");
      } else{
       
        //console.log ("안 가지고 있음");
        $("header .gnb").slideUp("fast");
      }
  });

//버튼 클릭하면 해당 버튼의 패널이 나타나는 명령
  $(".buttons>button").click(function(){
    //1.boutton의 index값 불러와서 저장
    var index = $(this).index();
    //2. 전체 패널 삭제
    $(".panels>.panel").hide();
    //3. 삭제된 패널 중 index번째 패널만 보임
    $(".panels>.panel").eq(index).show();
  });
  
  //첫 번째 탭 강제 클릭 (새로고침하면 첫번째버튼의 내용을 표시하기 위함)
  $(".buttons>button").eq(0).trigger("click");
});