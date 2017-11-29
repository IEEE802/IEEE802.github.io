<html>
  <head>
    <title>Anmeldung</title>
<!--
   <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

-->

          <script src="/script/jquery.js"></script>
  <!--    		<script src="/script/ext/jquery.scrollify.js"></script> -->
    <script language="javascript" type="/text/javascript" src="script/test.js"></script>
        <link rel="stylesheet" href="/css/loading.css">

<script>
$(document).ready(function(){


  $.fn.textWidth = function(){
      var self = $(this),
          children = self.children(),
          calculator = $('<span style="display: inline-block;">'),
          width;

      children.wrap(calculator);
      width = children.parent().width();
      return width;
  };

  $(function(){
  var welcome = $("#welcome");
  var len = welcome.textWidth();
  var lenfinal = len - 40; // damit es schöner aussieht noch paar pixel abziehen
  $("#welcomeunderline").css("width", lenfinal);
  var bodymin = len + 10;
  $("#body").css("min-width", bodymin);
  });


  $(function(){
  var titel = $(".titel");
  var titellen = titel.textWidth();
  var titellenfinal = titellen - 40;
  $(".titelunderline").css("width", titellenfinal);

  });



  setTimeout(
    function()
    {
    $(".underline").css("opacity", "1").css("transition", "all 0.3s ease-in-out 0s").css("transform", "scaleX(1)");
  }, 300);
  // https://www.mediengestalter.info/forum/10/div-beim-scrollen-ein-bzw-ausblenden-152250-1.html
$(window).scroll(function(){
  var height = $('.underline').offset();
  var current = $(window).scrollTop();
  if( current < height.top ){
  $(".underline").css("opacity", "1").css("transition", "all 0.3s ease-in-out 0s").css("transform", "scaleX(1)");
  } else {
    $(".underline").css("transition", "all 0.3s ease-in-out 0s").css("opacity", "0");
   $(".underline").css("transition", "all 0.0s ease-in-out 0s").css("transform", "scaleX(0)");
  }
});


$(window).scroll(function(){
  var height = $('.underline2').offset();
  var current = $(window).scrollTop();
  if( current < height.top ){
  $(".underline2").css("opacity", "1").css("transition", "all 0.3s ease-in-out 0s").css("transform", "scaleX(1)");
  } else {
    $(".underline2").css("transition", "all 0.3s ease-in-out 0s").css("opacity", "0");
   $(".underline2").css("transition", "all 0.0s ease-in-out 0s").css("transform", "scaleX(0)");
  }
});



});

</script>

    <style>
    @import url('http://fonts.googleapis.com/css?family=Roboto');
    body {
      font-family: Roboto;
      margin: 0; padding: 0;
      min-width: 500px;
      min-width: 500px;
    }


    .welcome {
      margin: 0 auto;
      min-height: 0;
    }
        .underline {
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        background-color: #4285f4;
        bottom: -2px;
        height: 2px;
        left: 0;
        margin: 0;
        padding: 0;
        position: absolute;
        width: 100%;
        top: 14px;
        position: relative;
        display: flex;
        }
        .underline2 {
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        background-color: #4285f4;
        bottom: -2px;
        height: 2px;
        left: 0;
        margin: 0;
        padding: 0;
        position: absolute;
        width: 100%;
        top: 7px;
        position: relative;
        display: flex;
        }
        #welcomeunderline {
width: 300;
margin: auto;

        }

        .titelunderline {
width: 300;
float: left;

        }

.btn-login {


width: 450px;
height: 50px;
margin: 0 auto;
min-height: 0;

background-color: blue;
line-height: 25px;
color: white;
}

.buttonholder {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  position: relative;

}

    </style>

    <?php
    $name = "Nicolas";
    ?>
    <script>
      $(function() {
        $.scrollify({
          section : ".section-class-name",
          sectionName : "section-name"
        });
      });



    </script>
  </head>
      <body id="body">

      <div class="section-class-name" data-section-name="welcome">
        <div clas="space" style="height: 30%;"></div>
        <div class="buttonholder">
        <div class="welcome">
        <div id="welcome" style="text-align: center;">
                <?php
                echo "<h1 style='margin-bottom: -7px; margin-top:0px;'>Willkommen, ".$name."!</h1>";
                ?>
              </div>
              <div id="welcomeunderline">
                <div class="underline"></div>
              </div></div>
<div style="height: 100px;"></div>
<button class="btn-login"><img src="https://image.flaticon.com/icons/svg/95/95454.svg" style="height: 30%">Anmelden<br>LOL</button>
</div>
            </div>
      <div class="section-class-name" data-section-name="about">
        <br>
        <div class="titel">
        <h1 style="margin-bottom: 0px;">Kannst du das Video finden? :)</h1></div>
        <div class="titelunderline">
          <div class="underline2"></div>
        </div><br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.

At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.

Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.

Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p>
</div>
      <div class="section-class-name" data-section-name="about2"><p>test</p></div>
        </body>



</html>
