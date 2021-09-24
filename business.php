<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

 body, html {
   height: 100%;
   margin: 0;
   font: 400 15px/1.8 "Lato", sans-serif;
   color: #777;
   }
   
 .topnav {
   overflow: hidden;
   background-color: #333;
   } 

 .topnav a {
   float: left;
   color: #f2f2f2;
   text-align: center;
   padding: 18px 16px;
   text-decoration: none;
   font-size: 20px;
   } 

 .topnav a:hover {
   background-color: #FFC20B;
   color: white;
   } 

  .topnav a.active {
    background-color: #FF2C2C;
    color: white;
    }

 .img-1, .img-2 {
   position: relative;
   opacity: 0.65;
   background-attachment: fixed;
   background-position: fixed;
   background-repeat: no-repeat;
   background-size: cover;
   }
   
 .img-1 {
   background-image: url("girl.jpg");
   min-height: 90%;
   }

 .img-2 {
   background-image: url("universal.jpg");
   min-height: 460px;
   }

 .caption {
   position: absolute;
   left: 0;
   top: 50%;
   width: 100%;
   text-align: center;
   }

 .caption span.border {
   background-color: black;
   color: #fff;
   padding: 18px;
   font-size: 25px;
   letter-spacing: 10px;
   }

 h1 {
   letter-spacing: 5px;
   text-transform: uppercase;
   font: 20px "Lato", sans-serif;
   color: #111;
   }

 /* Turn off parallax scrolling for tablets and phones */
 @media only screen and (max-device-width: 480px) {
  .img-1, .img-2 {
   background-attachment: scroll;
  }
  }
</style>
</head>
<body>

<!-- Start of top navigation code -->
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="working.php">Working</a>
  <a href="benefits.php">Benefits</a>
  <a class="active"  href="business.php" >Business Plan</a>
  <a href="achievements.php">Achivements</a>
  <a href="about.php">About us</a>
</div>
<!-- End of top navigation code  -->


<!-- Start of image & 1st caption.-->
<div class="img-1">
  <div class="caption">
  <span class="border">BUSINESS PLAN</span>
  </div>
</div>
<!-- End of image & 1st caption.-->


<!-- Start of paragraph.-->
<div style="color: #777;background-color:white;padding:50px 80px;text-align: justify;">
  <h1 style="text-align:center; font-size:22px;">Future Plan</h1>
  <p style="font-size:17px;">Currently we are improving our project to advance level and looking for some funding. Our main financing source is bootstraping, since our initial requirements is small. Our second option for funding will be government programs and investors. We expect to create a start-up by next year, if we collect appropriate funding. We will start the company in partnership. Our type of business model will be B2A. The main objective of our business is procurement of required parts, buying metal structures from metal fabricator and programming the software according institute's criteria.We will sell the product on both offline and online market. We will also provide maintenance service. After evaluating all the conditions like manufacturing cost and production cost, our selling price will be approximately Rs. 40,000 (531.24 USD) in India. We guarantee that for a few decades our product will work, until all universities and institute provide only soft copy of documents.</p>
</div>
<!-- End of paragraph.-->


<!-- Start of 2nd image & caption.-->
<div class="img-2">
   <div class="caption">
   <span class="border" style="background-color:transparent;font-size:25px;color: white;"><b>TEAM ASAAN</b></span>
   </div>
</div>
<!-- End of 2nd image & caption.-->

<!-- Start of small sentence.-->
<div style="position:relative;">
   <div style="color:#ddd;background-color:#282E34;text-align:center;padding:45px 80px;text-align: justify;">
   <p style="font-size:23px;text-align:center;">Upto 10 years full garantee along with 5 years of maintainance service.</p>
   </div>
</div>
<!-- End of small sentence.-->


<!-- Start of 3rd image & caption.-->
<div class="img-1">
   <div class="caption">
   <span class="border">THANKS FOR READING!</span>
   </div>
</div>
<!-- End of 3rd image & caption.-->

</body>
</html>