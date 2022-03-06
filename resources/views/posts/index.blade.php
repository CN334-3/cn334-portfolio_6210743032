<!DOCTYPE html>
<html>
<title>Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url(/a.jpg);
  min-height: 100%;
}
</style>
<body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
    <a href="#education" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Education</a>
    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
  </div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Rattima Wanikorn</b></h1>
    <p>Software Engineer</p>
    <img src="/w3images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
    <img src="/w3images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">
  </header>

  <!-- Education Section -->
  <div class="w3-padding-32 w3-content w3-text-grey" id="education">
    <h2 class="w3-text-grey">Education</h2>
    <hr class="w3-opacity">
 
    <p>3rd year student of Software Engineering,</p>
    <p>Thammasat University.</p>
  </div> 

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <h2>About</h2>
    <hr class="w3-opacity">
    <p>Extremely motivated to constantly develop my skills, learn something new and grow professionally.</p>
    <p>I am  interested in learning more about Software testing.</p>

    <h3 class="w3-padding-16">My Skills</h3>
    <p>- Programming languages such as Python, JavaScript, Java, HTML, SQL, PHP.</p>
    <p>- Object-Oriented Analysis and Design (OOAD) & Software design pattern.</p>
    <p>- Basic knowledge of Computer Server Configuration, Network.</p>
    <p>- Experience of using React Native for development.</p>
    <p>- The ability to follow instructions and deliver. quality results.</p>
    <p>- The ability to work under pressure and multi-task.</p>
    <p>- Exceptional communication skills.</p>
    <p>- Work well with others.</p>

    <h3 class="w3-padding-16">My Projects</h3>
    <p> - Tongchana Mobile Application</p>
    <p> - Alert Birthday Mobile Application</p>
    <p> - NOSLIM Website</p>
    <p> - Lone wolf Mobile Application</p>
    <p> (Front-end development)</p>
  </div>

  <div class="w3-content w3-justify w3-text-grey" class="Activities">
    <div class="w3-row-padding">
    <div class="w3-half">
        <h3 class="w3-padding-16">My Activities</h3>
    </div>
    <div class="w3-half w3-margin-bottom w3-padding-10">
        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Activities</a>
    </div>

    @foreach($posts as $post)
        <article class="mb-2">
            <a href="/posts/{{ $post->id }}/edit" class="w3-content w3-justify w3-text-grey w3-padding-16">{{ $post->title }}</a>
            <p class="w3-content w3-justify w3-text-grey">{{ $post->content }}</p>

            <hr class="mt-2">
        </article>
    @endforeach
  </div>


  <!-- Contact Section -->
  <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <h2>Contact Me</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>151/8 Moo 1 Rangsit - Pathumthani Road, BanKlang Sub-district, Mueangpathumthani District, Pathumthani Province, 12000</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i>0863875426</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i>rattima.ww@gmail.com</p>
      <p><i class="fa fa-facebook-official fa-fw w3-xxlarge w3-margin-right"> </i>Rattima Wanikorn</p>
    </div>
  </div>  
  
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>


