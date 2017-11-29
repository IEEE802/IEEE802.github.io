var xhr = new XMLHttpRequest();
xhr.responseType = 'blob';

xhr.onload = function() {

  var reader = new FileReader();

  reader.onloadend = function() {
    var byteCharacters = atob(reader.result.slice(reader.result.indexOf(',') + 1));
    var byteNumbers = new Array(byteCharacters.length);

    for (var i = 0; i < byteCharacters.length; i++) {
      byteNumbers[i] = byteCharacters.charCodeAt(i);
    }

    var byteArray = new Uint8Array(byteNumbers);
    var blob = new Blob([byteArray], {
      type: 'video/mp4'
    });
    var url = URL.createObjectURL(blob);

    document.getElementById('_video').src = url;
  }
  reader.readAsDataURL(xhr.response);

};

var cookies = document.cookie.split(";").
map(function(el) {
  return el.split("=");
}).
reduce(function(prev, cur) {
  prev[cur[0]] = cur[1];
  return prev
}, {});

cookies["MyCookie"] // value set with php.


xhr.open('GET', video);
xhr.send();

$(document).ready(function() {
  $('#_video').bind('contextmenu', function() {
    return false;
  });
});
