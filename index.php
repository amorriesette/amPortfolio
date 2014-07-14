<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>A. Morriesette | UI Dev & Designer</title>
	<meta name="title" content="A. Morriesette | UI Developer & Designer" />
	<meta name="description" content="" />

	<meta content="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" property="og:url" />
	<meta content="http://www.thepetedesign.com/images/onepage_scroll_image.png" property="og:image" />
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<meta name="author" content="Angelica Morriesette">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Great+Vibes|Pacifico' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
  <script "js/portfolio.pack.min.js"></script>
  <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>

  <link rel='stylesheet' href='css/onepage-scroll.css' type='text/css'>
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
  <link rel="stylesheet" href="css/style.css" type="text/css" /> <!--Social Media Icons -->
  <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" /><!-- Portfolio Overlays -->

  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">

  <link rel="stylesheet" type="text/css" href="css/reset.css">


<style>
    html {
      height: 100%;
    }
    body {
      /*background: #E2E4E7;*/
      background: url(img/bg2.jpg) no-repeat;
      background-size: 100%;
      padding: 0;
      text-align: center;
      font-family: 'Lato', sans-serif;
      font-size: 14pt;
      position: relative;
      margin: 0;
      height: 100%;
      -webkit-font-smoothing: antialiased;
      min-width: 100%;
    }
    
    .wrapper {
      height: 100% !important;
      height: 100%;
      margin: 0 auto; 
      overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 100px;
      color: #000;
      margin-bottom: 5px;
      font-size: 70px;
      letter-spacing: -4px;
      font-weight: 100;
    }

    h2 {
      color: #6D461D;
      font-weight: 100;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #9b59b6;
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      margin-top: 15px;
    }
    

  .scroll {
  position: fixed;
  top: 90%;
  left: 94%;
  -webkit-transform: translateX(-70%) translateY(-90%);
  -moz-transform: translateX(-70%) translateY(-90%);
  transform: translateX(-70%) translateY(-90%);
  letter-spacing: 1px;
  font-weight: 700;
  font-size: 2em;
  line-height: 2;
  width: 3em;
  text-align: center;
  height: 2em;
  color: #e74c3c;
  background: #fff;
  font-style: normal;
  -moz-border-radius: 80px;
  -webkit-border-radius: 80px;
  border-radius: 80px; /* future proofing */
  -khtml-border-radius: 80px; /* for old Konqueror browsers */
  border: 2px solid black;
}


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
    }
    
    .main h1 {
      padding:150px 50px;
      float: left;
      width: 100%;
      font-size: 45px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      color: white;
      margin: 0;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
   
    
    .clear {
      width: auto;
    }
    
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(255, 255, 255, 0.25);
      font-weight: bold;
      font-size: 13px;
      color: #000;
      -webkit-transition: all 500ms ease-in-out;
      -moz-transition: all 500ms ease-in-out;
      -o-transition: all 500ms ease-in-out;
      transition: all 500ms ease-in-out;
    }
    .back:hover {
      color: black;
      background: rgba(255, 255, 255, 0.5);
    }
    
    header {
      position: relative;
      z-index: 10;
    }
    .main section .page_container {
      position: relative;
      top: 25%;
      margin: 0 auto 0;
      max-width: 1250px;
      z-index: 3;
    }
    .main section  {
      overflow: hidden;
    }
    
    .main section > img {
      position: absolute;
      max-width: 100%;
      z-index: 1;
    }
    
    .main section.page1 {
      
    }
    .main section.page1 h1 {
      text-align: center;
      padding: 0;
      margin-bottom: 15px;
      font-size: 70px;
      color: white;
    }
    
    .main section.page1 h2 {
      color: rgba(0,0,0,0.85);
      text-align: center;
      width: 435px;
      line-height: 160%;
    }
    
    .main section.page2 {
      background: url(img/LogoStrip.png) no-repeat;
      background-size: 100%;
    }
    
    .main section.page2 .page_container
   {
      position: relative;
      top: 10.5%;
      margin: 10px auto 0;
      max-width: 100%;
      min-height: 30%;
      z-index: 3;
    }
    .main section.page2 h1 {
      text-align: center;
      padding: 0;
      margin-bottom: 0px;
      font-size: 50px;
      letter-spacing: -1px;
    }
    .main section.page2 h2 {
      text-align: center;
      line-height: 160%;
      font-weight: 100;
    }

    #space{
       margin-right: 45px;
    }

    .main section.page2 .portfolioContainer img.icon{
      width:100%;
    }

    .main section.page2 .portfolioContainer img.skillIcon{
      width: 20%;
    }

    .main section.page2 .portfolioContainer{
      -webkit-column-count: 3;
      -moz-column-count: 3;
      column-count: 3;
    }

    
    #portText{
      position:relative; 
      max-height: 40%;
      width: 30%;
    }

    .viewing-page-2 .back{
      background: rgba(0, 0, 0, 0.25);
      color: #FFF;
      }
    
    .clear{
      clear: both;
     }

    .main section.page3 {
     }
    .main section.page3 .page_container {
      /*width: 1500px;
      height: 100%;
      right: 25px;
      top: 25px;*/

      position: relative;
      top: 10.5%;
      margin: 10px auto 0;
      max-width: 100%;
      min-height: 30%;
      z-index: 3;
    }

    .main section.page3 h2 {
      color: rgba(0,0,0,0.85);
      text-align: left;
      line-height: 160%;
      font-weight: 100;
      font-size: 21px;
    }

    .main section.page3 p{
           text-align: left;
           font-size: 16pt;
           line-height: 110%;
           position:relative;
           left:60%;
           top:60%;
           width:35%;
    }

    .main section.page3 img{
      width:50%;
      position: relative;
      left:-300px;
    }

    .main section.page4{
  
    }
    .main section.page4 .page_container {
      /*overflow: hidden;*/
      width: 500px;
      /*right: -120px;*/
    }
    .main section.page4 h1 {
      text-align: left;
      padding: 0;
      margin-bottom: 0;
      font-size: 70px;
      letter-spacing: -1px;
      color: black;
    }
    .main section.page4 h2 {
      color: rgba(0,0,0,0.85);
      text-align: left;
      line-height: 160%;
      font-weight: 100;
      font-size: 21px;
    }

    .main section.page4 .page_container img{
      position:relative;
      top:-140px;
      right:300px;
    }
    
    body.disabled-onepage-scroll .onepage-wrapper  section {
      min-height: 100%;
      height: auto;
    }
    
    body.disabled-onepage-scroll .main section .page_container, body.disabled-onepage-scroll .main section.page3 .page_container  {
      padding: 10px;
      margin-top: 150px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    
    body.disabled-onepage-scroll  section .page_container h1{
      text-align: center;
      font-size: 50px;
    }
    body.disabled-onepage-scroll section .page_container h2, body.disabled-onepage-scroll section .page_container .credit, body.disabled-onepage-scroll section .page_container .btns{
      text-align: center;
      width: 100%;
    }
    
    body.disabled-onepage-scroll .main section.page1 > img {
      position: absolute;
      width: 80%;
      left: 10%;
    }
    
    body.disabled-onepage-scroll .main section > img {
      position: relative;
      max-width: 80%;
      bottom: 0;
    }
    body.disabled-onepage-scroll code {
      width: 95%;
      margin: 0 auto 25px;
      float: none;
      overflow: hidden;
    }
    
    body.disabled-onepage-scroll .main section.page3 .page_container {
      width: 90%;
      margin-left: auto;
      margin-right: auto;
      right: 0;
    }

</style>
<script type="text/javascript">
$(document).ready(function(){

  $('#slideShim').cycle({ 
      fx:     'fade',
      speed:  1500,
      timeout: 4000,
      prev:   '#back',
      next:   '#forward',
      pause:  1,
      pager:  '#pager'
    });

$('#slideShim2').cycle({ 
      fx:     'fade',
      speed:  1500,
      timeout: 4000,
      prev:   '#back',
      next:   '#forward',
      pause:  1,
      pager:  '#pager2'
    });

  $('#slideShim3').cycle({ 
      fx:     'fade',
      speed:  1500,
      timeout: 4000,
      prev:   '#back',
      next:   '#forward',
      pause:  1,
      pager:  '#pager3'
    });

});
</script>
</head>
<body>

  <div class="wrapper">
	  <div class="main">

      <section class="page1" id="home">
        <div class="page_container"><img src="img/headerName.png" width="100%">
         </div>
      </section>

      <section class="page2" id="portfolio">
        <div class="page_container">
        <img id="portText" src="img/portfolioText.png" width="35%" style="top:30px; right:30%">
          <div class="portfolioContainer">
            <div class="portfolioCol1">
              <a class="sn_open"><img class="icon" src="img/sites/sn/logo.png"></a><br /><h2>Sarina Nicole</h2><img class="skillIcon"src="img/HTML5icon.png"><img class="skillIcon" src="img/JQueryicon.png">
            </div> 
            <div class="portfolioCol2">
              <a class="sn_open"><img class="icon" src="img/sites/psc/logo.png"></a><br /><h2>IBM PureSystems Centre</h2><img class="skillIcon" src="img/HTML5icon.png">
            </div>
            <div class="portfolioCol3">
              <a class="sn_open"><img class="icon" src="img/sites/sn2/logo.png"></a><br /><h2>Sarina Nicole Redesign</h2><img class="skillIcon" src="img/HTML5icon.png">
            </div>   
          </div>  
        <div id="sn">
        <!-- Beginning of the slider markup -->
          <div id="metaContainer">
  
          <!-- The sliderr works with virtually any HTML element (div, span etc) but for the sake of simplicity I have used images in this demo -->
          <div id="slideContainer">
            <div id="slideShim">
              <a href="#"><img src="img/sites/sn/SN1.png" width="100%" alt="" /></a>
              <a href="#"><img src="img/sites/sn/SN2.png" width="100%" alt="" /></a>
              <a href="#"><img src="img/sites/sn/SN3.png" width="100%" alt="" /></a>
            </div>
          </div>
    
          <div id="pager" class="clear"></div>
        </div>
         <!-- End of the slider markup -->
         <!-- Add an optional button to close the popup -->
         <!-- button class="my_popup_close">Close</button -->
      </div>
                <div id="sn2">
                  <!-- Beginning of the slider markup -->
                  <div id="metaContainer">
  
                    <!-- The sliderr works with virtually any HTML element (div, span etc) but for the sake of simplicity I have used images in this demo -->
                    <div id="slideContainer">
                      <div id="slideShim2">
                        <a href="#"><img src="img/sites/sn2/SN1.png" width="100%" alt="" /></a>
                        <a href="#"><img src="img/sites/sn2/SN2.png" width="100%" alt="" /></a>
                        <a href="#"><img src="img/sites/sn2/SN3.png" width="100%" alt="" /></a>
                        <a href="#"><img src="img/sites/sn2/SN4.png" width="100%" alt="" /></a>
                        <a href="#"><img src="img/sites/sn2/SN5.png" width="100%" alt="" /></a>
                      </div>
                    </div>
    
                    <div id="pager2" class="clear"></div>
                  </div>
                  <!-- End of the slider markup -->
                </div>
                <div id="psc">
                  <!-- Beginning of the slider markup -->
                  <div id="metaContainer">
  
                    
                    <!-- The sliderr works with virtually any HTML element (div, span etc) but for the sake of simplicity I have used images in this demo -->
                    <div id="slideContainer">
                      <div id="slideShim3">
                        <a href="#"><img src="img/sites/psc/PSC1.png" width="90%" alt="" /></a>
                        <a href="#"><img src="img/sites/psc/PSC2.png" width="90%" alt="" /></a>
                        <a href="#"><img src="img/sites/psc/PSC3.png" width="90%" alt="" /></a>
          
                      </div>
                    </div>
    
                    <div id="pager3" class="clear"></div>

                  <!-- End of the slider markup >
                </div --> 
              </div>
      </section>

	    <section class="page3" id="about">
	      <div class="page_container">
           <!-- img src="img/aboutMeCollage.png" / -->
            <img src="img/aboutmeText.png" style="position:relative; left: 20%;top:30%;"/>
          <p > 
            I am a 26 year old front-end developer who loves my wonderful family, amazing food, playing competitive volleyball and everything about technology.<br />

            I graduated from Clark Atlanta University with a BS in Computer Science in 2010. I relocated to Austin, Texas from Atlanta, GA and began my new career. After working in the corporate world since then, I have come to realize that my skills would be best utilized in a dual role as a developer and designer.<br />
            I have a broad knowlege of UI development, creating interactive mock-ups/prototypes and I always welome any way for me to gain more knowledge in UI/UX Design. <br />
            If you are interested in working with me you can get in touch with me through email or by following me on social media.

            </p>
          
        </div>
      </section>

      <section class="page4" id="contact">
        <div class="page_container">
          
          <a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
          <a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
          <a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
          <a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
          <a href="http://github.com" class="icon-button github"><i class="icon-github"></i><span></span></a>
          <a href="afmorriesette@genvelope-alt.com" class="icon-button envelope-alt"><i class="icon-envelope-alt"></i><span></span></a>
          
          <form action="contact.php" method="post">
            <label>Name</label>
            <input name="name" placeholder="Type Here">

            <label>Email</label>
            <input name="email" type="email" placeholder="Type Here">

            <label>Message</label>
            <textarea name="message" placeholder="Type Here"></textarea>

            <input id="submit" name="submit" type="submit" value="Submit">
          </form>

          
          <script src='http://codepen.io/assets/libs/fullpage/none.js'></script>
          <script src="js/index.js"></script>

          
        </div>
      </section>
      
    </div>

<script>
    $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: false,
        easing: "ease",
        animationTime: 1500,
        pagination: false,
        updateURL: true,
        beforeMove: null,
        afterMove: null,
        keyboard: true,
        direction: "vertical"
        });
      });
  </script>
<!-- jQuery library -->
<script src="http://vast-engineering.github.io/jquery-popup-overlay/jquery.popupoverlay.js"></script>
<script type="text/javascript" src="js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
  $(function() {
    $('#ei-slider').eislideshow({
      easing    : 'easeOutExpo',
      titleeasing : 'easeOutExpo',
      titlespeed  : 1200
    });
  });
</script>
<script>
    $(document).ready(function() {

      // Initialize the plugin
      $('#sn').popup({
        opacity:0.3,
        transition:'all 0.6s'});
       $('#sn2').popup({
        opacity:0.3,
        transition:'all 0.6s'});
         $('#psc').popup({
        opacity:0.3,
        transition:'all 0.6s'});

    });
  </script>

  




</body>
</html>