$(document).ready(function() {


  $('.inputemail').focus(function() {
    $(".greytextinform").css("transform", "scale(.75) translateY(-39px)").css("color", "#4285f4");
    $(".underanimation").css("opacity", "1").css("transition", "all 0.3s ease-in-out 0s").css("transform", "scaleX(1)");
  });

  $('.inputemail').focusout(function() {
    if ($('.inputemail').val() == '') {
      $(".greytextinform").css("transform", "scale(1) translateY(0px)").css("color", "#757575");
      $(".underanimation").css("transition", "all 0.3s ease-in-out 0s").css("opacity", "0")
      setTimeout(
        function() {
          $(".underanimation").css("transition", "all 0.0s ease-in-out 0s").css("transform", "scaleX(0)");
        }, 300);
    }
  });



  $('.inputemail').focusout(function() {
    $(".greytextinform").css("color", "#757575");
    $(".underanimation").css("transition", "all 0.3s ease-in-out 0s").css("opacity", "0");
    setTimeout(
      function() {
        $(".underanimation").css("transition", "all 0.0s ease-in-out 0s").css("transform", "scaleX(0)");
      }, 300);
  });


  $('.inputemail2').focus(function() {
    $(".greytextinform2").css("transform", "scale(.75) translateY(-39px)").css("color", "#4285f4");
    $(".underanimation2").css("opacity", "1").css("transition", "all 0.3s ease-in-out 0s").css("transform", "scaleX(1)");
  });

  $('.inputemail2').focusout(function() {
    if ($('.inputemail2').val() == '') {
      $(".greytextinform2").css("transform", "scale(1) translateY(0px)").css("color", "#757575");
      $(".underanimation2").css("transition", "all 0.3s ease-in-out 0s").css("opacity", "0")
      setTimeout(
        function() {
          $(".underanimation2").css("transition", "all 0.0s ease-in-out 0s").css("transform", "scaleX(0)");
        }, 300);
    }
  });



  $('.inputemail2').focusout(function() {
    $(".greytextinform2").css("color", "#757575");
    $(".underanimation2").css("transition", "all 0.3s ease-in-out 0s").css("opacity", "0");
    setTimeout(
      function() {
        $(".underanimation2").css("transition", "all 0.0s ease-in-out 0s").css("transform", "scaleX(0)");
      }, 300);
  });




  $('.funktionnichtda').click(function() {
    alert('Diese Funktion ist noch nicht da :)');
  });



});
