// document.getElementById('nav').style.opacity="0.4";
document.getElementById('enter').style.opacity="0.4";

function unblur(){
  document.getElementById('nav').style.opacity="1";
  document.getElementById('enter').style.opacity="1";
  document.getElementById('popup').style.display="none";
  document.getElementById('html').style.backgroundImage = "url('../images/gradgrey.png')";
}

function gotohome(){
  window.location="home.php"
  // console.log("campus.html");
  console.log("hello");
}

function showpop() {
  var x = document.getElementById("popout");
  if (x.style.visibility === "hidden") {
    x.style.visibility = "visible";
  } else {
    x.style.visibility = "hidden";
  }
}