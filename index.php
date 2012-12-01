<html>
       <head>
                   <title> CS415 Final Project</title>
       </head>
                        <body>
by Jessie Young and Alan Chancellor
<h4> Select attribute from doctor </h4> 
<form action="results.php" method="post"> 
<select> 
<option> DFName </option> 
<option> DLName </option> 
<option> DId</option> 
<option> Specialty </option> 
<option> DStreetNum </option> 
</select> <br>
   First Name: <input name="firstname" type="text" /><br>
   Last Name: <input name="lastname" type="text" /> <br>
Zip Code: <input name="zipcode" type="text" /> <br>
<input type="submit" value="Search!"/>
</form> 

			<?php
   echo "Today is ".  date("Y/m/d") . "<br>"; 

			  ?>
                        </body>
</html>
