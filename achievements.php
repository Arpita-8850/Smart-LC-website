<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

 body, html {
   height: 100%;
   margin: 0;
   font-family: Arial, Helvetica, sans-serif;
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
	
  h1 {
   letter-spacing: 5px;
   text-transform: uppercase;
   font: 20px "Lato", sans-serif;
   color: #111;
   }
	
  p {
   font: 400 15px/1.8 "Lato", sans-serif;
   }
   
    #success {
    position: relative;
    } 
    #success img {
    height: 600px;
    width: 600px;
    position: absolute;
    top: -450px;
    left:900px;
    }
	

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: white;
  padding: 50px;
}
.grid-item {
  height:250px;
  width: 400px;
  background-color: white;
  border: 1px solid #CCCCCC;
  padding: 30px;
  }
	

  #color4 {
    padding: 30px;
    background: #EEEEEE;
    background-repeat: no-repeat;
	background-size: 500px 100px;
    }
	
</style>
</head>
<body>

<!-- Start of top navigation code -->
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="working.php">Working</a>
  <a href="benefits.php">Benefits</a>
  <a href="business.php">Business Plan</a>
  <a  class="active"  href="achievements.php">Achivements</a>
  <a href="about.php" >About us</a>
</div>
<!-- End of top navigation code  -->

<br></br>
<br></br>
<br></br>


<!-- Start of achievements information -->
<div style="color:#777; background-color:white; text-align:center; padding:40px; text-align: justify;">
  <h1 style="text-align:left; font-size:35px;"> Our Achievements </h1>
  <p style="font-size: 18px; margin-right: 900px;"> Till now we have achieved to promote our product through various project exhibitions, presentation and online competition.
  We have been to 4 presentation competition, 4 project exhibitions and 7 online competitions, out of which we won 10 competition.
  We really had a very good experience and a lot of learnings from these competitions. some where we failed and lost our self-confidience while some where we won and regained our sel-confidience. 
  Most importantly we learnt how to never quit. We never gave up on any situation. </p>
</div>
<!-- End of achievements information -->

<!-- Start of success photo -->
<div id="success">
	<img src="success.jpg"/>
</div>
<!-- End of success photo -->


<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>


<!-- Start of certificates photo -->
<h1 style="text-align:center; font-size:45px;">Our Certificates !</h1>
<center>
<div class="grid-container">
  <img class="grid-item" src="VPM comp.jpg"/>
  <img class="grid-item" src="I2IT comp.jpg"/>
  <img class="grid-item" src="St.John comp.jpg"/>
  <img class="grid-item" src="KJ Somaiya comp.jpg"/>
  <img class="grid-item" src="pune comp.jpg"/>
  <img class="grid-item" src="universal comp.jpg"/>
  <img class="grid-item" src="VISAI participation.jpg"/>
  <img class="grid-item" src="computer depart comp.jpg"/>
  <img class="grid-item" src="JNK Sakpal comp.jpg"/>
  <img class="grid-item" style="margin-right:-550px;" src="Bharat college participation.jpg"/>
  <img class="grid-item" style="margin-right:-550px;" src="electromania.jpg"/>
</div>
</center>
<!-- End of certificates photo -->


<br><br>
<br><br>


<!-- Start of pie chart -->
<h1 style="text-align:center; font-size:40px;">Pie chart of competitions we participatated</h1>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Competition', 'numbers'],
          ['District level Competition', 5],
          ['State Level Competition',5],
          ['National LevelCompetition', 3],
          ['International Level Competition',2],
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  
<center>
<div id="piechart_3d" style="width: 1100px; height: 700px; margin-top: -35px;"></div>
</center>
<!-- End of pie chart -->





























<!-- Start of powered by section-->	
<div id="color4">
	<center><p>Powered by Government Polytechnic Mumbai</p></center>
</div>
<!-- End of powered by section code  -->

</body>
</html>