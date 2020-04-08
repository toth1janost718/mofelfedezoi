// for home.php

/* old

document.getElementById('news1').onclick = function() {

	document.getElementById('hirek').innerHTML = "Hírek #1"

}

document.getElementById('news2').onclick = function() {

	document.getElementById('hirek').innerHTML = "Hírek #2"

}

document.getElementById('news3').onclick = function() {

	document.getElementById('hirek').innerHTML = "Hírek #3"

}

*/

/* clearInterval(Looper); ... this line was used at the beginig of each .click function in order to automate a news feed. 

it worked, but it was flawed at the same time */

/*

$("#nCone").click(function(){

  $("#newsBox").load("hirek/hir1.php", function(){
  
  $("#newsBox").hide();

  $('#newsBox').fadeIn('slow');

  $(".newscube-1").css( {

    borderColor: "red",

  });

    $(".newscube-2").css( {

      borderColor: "#0a73de",

    });

      $(".newscube-3").css( {

        borderColor: "#0a73de",

    });

      });

});

$("#nCtwo").click(function(){

  $("#newsBox").load("hirek/hir2.php", function(){
  
  $("#newsBox").hide();

  $('#newsBox').fadeIn('slow');

  $(".newscube-1").css( {

    borderColor: "#0a73de",

  });

    $(".newscube-2").css( {

      borderColor: "red",

    });

      $(".newscube-3").css( {

        borderColor: "#0a73de",

    });

      });

});

$("#nCthree").click(function(){

  $.ajax("hirek/hir3.php")

        .done(function(data) {

          $("#newsBox").html(data);

          $("#newsBox").hide();

          $('#newsBox').fadeIn('slow');

          $(".newscube-3").css( {

            borderColor: "red",

          });

          $(".newscube-1").css( {

            borderColor: "#0a73de",

          });

          $(".newscube-2").css( {

            borderColor: "#0a73de",

          });

      });

});

*/

 /*      
        window.onscroll = function() {dragMenu()};
        
        var header = document.getElementById("links");
        var dragstart = document.getElementById("links");
        var sticky = dragstart.offsetTop;
        
        function dragMenu() {
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        } 



        var header = document.getElementById("links");
        var btns = header.getElementsByClassName("a");
        
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName(" visited");
            current[0].className = current[0].className.replace(" visited", "active");
            this.className += " active";
          });
        }
*/