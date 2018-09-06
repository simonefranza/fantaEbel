function hideJoin() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById("body-content").style.filter ="blur(0)";
  document.getElementById("body-content").style.webkitFilter ="blur(0)";
  document.getElementById("body-content").style.mozFilter ="blur(0)";
  document.getElementById("body-content").style.oFilter ="blur(0)";
  document.getElementById("body-content").style.msFilter ="blur(0)";
}

function showJoin() {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("body-content").style.filter ="blur(10px)";
  document.getElementById("body-content").style.webkitFilter ="blur(10px)";
  document.getElementById("body-content").style.mozFilter ="blur(10px)";
  document.getElementById("body-content").style.oFilter ="blur(10px)";
  document.getElementById("body-content").style.msFilter ="blur(10px)";
}

function checkWelcome() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.getItem("hideWelcome") == "true") {
      hideJoin();
    }
    else{
      showJoin();
    }
  }
}

function overlayOff() {
  hideJoin();
  if (typeof(Storage) !== "undefined") {
    localStorage.setItem("hideWelcome", "true");
  }
}
