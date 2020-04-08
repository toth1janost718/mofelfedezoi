var sendData={test:"á"};

var fileone = {};
fileone.url = "hirek/hir1.php";
fileone.method = "post";
fileone.contentType= "application/x-www-form-urlencoded; charset=ISO-8859-2";
fileone.data=sendData;

var filetwo = {};
filetwo.url = "hirek/hir2.php";
filetwo.method = "post";
filetwo.contentType= "application/x-www-form-urlencoded; charset=ISO-8859-2";
filetwo.data=sendData;

var filethree = {};
filethree.url = "hirek/hir3.php";
filethree.method = "post";
filethree.contentType= "application/x-www-form-urlencoded; charset=ISO-8859-2";
filethree.data=sendData;

/*

$.ajax(fileone).then( 
  function (data) {
  	var uri_enc = encodeURIComponent(data);
  	var uri_dec = decodeURIComponent(uri_enc);
    alert(uri_dec);
  });

 */

function timedFade() {

	$.ajax(fileone)

				.done(function(data) {

					$("#newsBox").html(data);

					$("#newsBox").hide();

					$('#newsBox').fadeIn('fast');

					$(".newscube-1").css( {

						borderColor: "red",

					});

			});

	$.ajax(filetwo)

				.done(function(data) {

					$("#newsBox").html(data);

					$("#newsBox").hide();

					$('#newsBox').fadeIn('slow');

			});

	$.ajax(filethree)

				.done(function(data) {

					$("#newsBox").html(data);

					$("#newsBox").hide();

					$('#newsBox').fadeIn('slow');

			});

}

timedFade();

// setInterval(timedFade, 9000);

// var Looper = setInterval(timedFade, 9000);