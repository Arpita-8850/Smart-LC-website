<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}	
  
  .fontsize {
	font-size: 200%;
    color: #FF2C2C;
	}
	
.subfont {
	font-size: 130%;
	}
	 
	 hr {
		   border-radius: 4px;
	 }
	
input[type=text], select, textarea {
     width: 40%;
     padding: 18px;
     border: 1px solid #ccc;
     box-sizing: border-box;
     margin-top: 6px;
     margin-bottom: 16px;
     resize: vertical;
     }

input[type=submit] {
  font-size: 150%;
  background-color: #FF2C2C;
  color: white;
  padding: 18px 30px;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

	</style>
	</head>
	<body>
	
	
<h3 class="fontsize" style="margin-left: 670px">Contact Us.</h3>
<hr style="width:80px; border:5px solid red; margin-left: 670px;">
<p class="subfont" style="margin-left: 400px"> Want to know more about the product, feel free to contact us We love to meet new people!</p>
<br></br>


  <label class="subfont" style="margin-left: 510px" for="name">Name</label>
  <center>
  <input type="text" id="name" name="name">
  </center>


  <label class="subfont" style="margin-left: 510px" for="email">Email</label>
  <center><input type="text" id="email" name="email"></center>


  <label class="subfont" style="margin-left: 510px" for="phone">Phone no.</label>
  <center><input type="text" id="phone" name="phone"></center>
   

  <label  class="subfont" style="margin-left: 510px" for="subject">Message</label>
  <center><textarea id="message" name="message" style="height:200px"></textarea></center>

  <center><input type="submit" value="Send Message"></center>
	



	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>