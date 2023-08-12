<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          
          </nav>
          
        <header class="py-5 mb-4" id="myHeader">
  <div class="container">
    <div class="d-flex align-items-center justify-content-center my-5">
      <div class="w-50 text-center">
        <h1 class="fw-bolder" id="header-text">Welcome to Meme Blog</h1>
        <p class="lead mb-0">Find the latest and funniest memes.</p>
      </div>
      <div class="w-50" style="position: relative;">
        <img src="src/Untitled.jpg" alt="" class="img-fluid rounded shadow-lg" id="header-img">
      </div>
    </div>
  </div>
</header>
          
          

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  var header = document.getElementById("myHeader");
  var navbar = document.querySelector(".navbar");
  var headerText = document.getElementById("header-text");
  var headerImg = document.getElementById("header-img");
  
  if (window.pageYOffset > header.offsetTop) {
    navbar.classList.add("fixed-top");
    navbar.classList.remove("bg-dark");
    header.style.backgroundColor = "#000000";
    header.style.color = "#ffffff";
    headerText.innerHTML = "Dark comedy humor based on your pain";
    headerImg.src = "https://i.pinimg.com/originals/5a/e9/35/5ae935e3a9fdd02e1cfebf114e0cafeb.jpg";
  } else {
    navbar.classList.remove("fixed-top");
    navbar.classList.add("bg-dark");
    header.style.backgroundColor = "#f8f8f8";
    header.style.color = "#000000";
    headerText.innerHTML = "Welcome to Meme Blog";
    headerImg.src = "https://ih1.redbubble.net/image.2231070264.0611/pp,840x830-pad,1000x1000,f8f8f8.jpg";
  }
}
</script>