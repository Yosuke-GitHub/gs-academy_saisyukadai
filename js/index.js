$(".filter-btn").click(function() {
  $(".memo1").hide();
  $(".memo2").hide();
  $(".memo3").hide();
  $(".memo4").hide();
  $(".memo5").hide();
  if ($("#group1").prop("checked") == true) {
    $(".memo1").show();
    $("#group1").prop("checked", false);
  } else if ($("#group2").prop("checked") == true) {
    $(".memo2").show();
    $("#group2").prop("checked", false);
  } else if ($("#group3").prop("checked") == true) {
    $(".memo3").show();
    $("#group3").prop("checked", false);
  } else if ($("#group4").prop("checked") == true) {
    $(".memo4").show();
    $("#group4").prop("checked", false);
  } else if ($("#group5").prop("checked") == true) {
    $(".memo5").show();
    $("#group5").prop("checked", false);
  } else if ($("#all").prop("checked") == true) {
    $(".memo1").show();
    $(".memo2").show();
    $(".memo3").show();
    $(".memo4").show();
    $(".memo5").show();
    $("#all").prop("checked", false);
  }
});

$(".delete-btn").click(function () {
  
})