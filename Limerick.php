<!DOCTYPE html>
<html>
<title>Limerick - Covid-19 and Designers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>Covid-19 and Designers </b></h1>
    <h6>Welcome to the official page of <span class="w3-tag">Covid-19 and Designers</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img src="img/mainBG_crop.jpg" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
         <br> </br> 
          <p>Celebrated fashion designers, from Masaba Gupta to Ritu Kumar, among many others, shifted their existing resources to non-surgical, three-layered reusable mask production.</p>
        </div>
      </div>
      <hr>

      <!-- Limerick By Abirr N' Nanki -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3><a href="Limerick.php" target="_blank">Limerick By Abirr N' Nanki</a></h3>
        </div>

        <div class="w3-justify">
          <img src="img/limerick.jpg" alt="Limerick" style="width:100%" class="w3-padding-16">
          <p>“Looking at where current scenario was headed, we came up with this idea and decided to combine our technical knowledge and Limerick’s design aesthetic to make reusable masks that are not only protective but also stylish,” says Nanki Papneja, founder at Limerick. Their masks feature four layers of germ-resistant filters that provide protection from over 90 percent germs and microbes. That’s not all — they are also donating 3,000 face masks to Kasturba Hospital in Mumbai as an initiative to help the staff and patients who require these the most.
			<p class="w3-clear"></p>
         </div>
      </div>

      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
        <div class="w3-justify">
          <br></br>
          <center><img src="img/limerickMask.png" alt="Limerick Mask" width="70%"></center>
          <p>Besides this, the brand has also made a charitable donation to a Mumbai-based NGO Dharma Bharathi Mission to raise funds for helping the families of daily wage earners affected the COVID-19 pandemic. Currently, the masks are available for sale, at 50 percent discount on their site— full proceeds from the sale will be donated to the Earth Saviours Foundation.</p>
          <a href="https://www.limerick.in/" target="_blank">Limerick's Official Site</a>
          <p class="w3-clear"></p>
         </div>
        </div> 
      </div>  
      <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="img/aboutUsBG.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4>About Us</h4>
          <p>We are a leading blog generating awareness about various designer brands and their contribution towards the Covid-19 Pandemic.</p>
        </div>
      </div>
      <hr>

      
      <hr>
    <!-- CONNECT WITH US -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Connect With Us</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>


<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Thank you for subscribing to our blog.</p>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

 
</body>
</html>