console.log("ok");
var keyword = document.getElementById("keyword");
var tombolcari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

keyword.addEventListener("keyup", function () {
  //object ajax
  var xhr = new XMLHttpRequest();

  //cek ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };
  //eksekusi ajak
  xhr.open("GET", "ajax/mobil.php?keyword=" + keyword.value, true);
  xhr.send();
});
