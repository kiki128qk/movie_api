$(document).ready(function(){
    $(".genbuttons>button").click(function(){
      var index = $(this).index();
      $(".genpanels>.genpanel").hide();
      $(".genpanels>.genpanel").eq(index).show();
    });

    $(".genbuttons>button").eq(0).trigger("click");
  });