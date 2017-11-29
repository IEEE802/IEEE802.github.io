/*function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

var cookie = readCookie('T57cKVprvMxUGRFC');*/
//var decodedString = window.atob(cookie);



/*



String.prototype.reverse = function () {
    return reverse(this);
}

function reverse(str) {
    var result = '';
    for (var i = str.length - 1; i >= 0; i--) {
        result += str[i]
    }
    return result;
}

var hallo = "hallo";

var reverse = hallo.reverse(); // outputs 'riay'

alert(reverse)
*/

// var path = "https://www.w3schools.com/html/mov_bbb.mp4";

/*
var dataurlraw = btoa(encodeURIComponent(escape('video.mp4')));
var data1 = "data:image/mp4;base64," + dataurlraw;

var file = new File(["C:/xampp/htdocs/video.mp4"], "C:/xampp/htdocs/video.mp4");
var reader = new FileReader();

reader.onloadend = function() {
  console.log(reader.result);
}
var lol = reader.readAsDataURL(file);
console.log(data1);

var dataURLx = canvas.toDataURL();
alert(dataURLx.todataurl());

*/

;


const data1 = "testvideo.mp4";2





getBlobURL(data1, "video/mp4", function(url, blob) {
    var source = $("<source>");
    source[0].src = url;

    $("#video").append(source);

    /*
     $("#video").on("canplaythrough", function() {
        URL.revokeObjectURL(url);
        source[0].src = url;

        $("#video").append(source);
        console.log("revoke successfully created");
     });
    */

    /*
     $("#video").on("waiting", function() {

       getBlobURL(data1, "video/mp4", function(url, blob) {
         $("#video").detach(source);
         var source = $("<source>");
         source[0].src = url;
    console.log(url);
         $("#video").append(source);
             console.log("new blob url");

     });
     });
     */


    /*
    $(document).ready(function(){

    video.addEventListener("progress", function() {
      // When buffer is 1 whole video is buffered
      if (Math.round(video.buffered.end(0)) / Math.round(video.seekable.end(0)) === 1) {
        console.log("FERTIG???");
     }
    }, false);

    });
    */



    /*

    var buffered = function() {
        var bufferedPercent =
            $("#video").duration > 0 && vid.buffered.length > 0 ?
            $("#video").buffered.end(0) / vid.duration * 100 :
            0;
        return 'buffered ' + bufferedPercent.toFixed(0) + '%';
    };

      $("#video").on("oncanplay", function() {
    console.log('canplaythrough: ' + buffered());
      });
    */

    /*
    durationLeft = $("#video").attr("duration") – $("#video").attr("buffered");
    if (durationLeft == 0) {
    alert("durch gebuffert");
    }

    }

    */
    /*
      $(function(){
        //"use strict"
        $("#video").on("canplaythrough", function() {


          if (Math.round(video.buffered.end(0)) / Math.round(video.seekable.end(0)) === 1) {
            alert("fertig gedonwload");
            URL.revokeObjectURL(url);
            source[0].src = url;
            $("#video").append(source);
            console.log("revoke successfully created");
         };

        });
      });
      */



    /*
    setTimeout(function() {
      source[0].src = "";
      $("#_video").append(source);
    }, 0);
    */
});




function getBlobURL(url, mime, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("get", url);
    xhr.responseType = "arraybuffer";

    xhr.addEventListener("load", function() {

        var arrayBufferView = new Uint8Array(this.response);
        var blob = new Blob([arrayBufferView], {
            type: mime
        });
        var url = null;


        if (window.URL) {
            url = window.URL.createObjectURL(blob);
        } else if (window.URL && window.URL.createObjectURL) {
            url = window.URL.createObjectURL(blob);
        }

        // console.log("blob successfully created.");
        callback(url, blob);

    });

    xhr.onprogress = function(e) {
        if (e.lengthComputable) {
            var percentComplete = ((e.loaded / e.total) * 100 | 0) + '%';
            console.log('progress: ', percentComplete);
        }
    };

    xhr.send();
}