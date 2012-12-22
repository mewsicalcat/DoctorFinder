<html>
       <head>
                   <title> CS415 Final Project</title>
       </head>
                        <body>
by Jessie Young and Alan Chancellor


<h4> Find a Doctor by Specialty </h4> 
<form action="results.php" method="post" > 
<select name="specialty">
<option> Acupuncturist </option> 
<option> Allergist </option> 
<option> Audiologist</option> 
   <option> Cardiologist (Heart Doctor) </option> 
<option> Chiropractor </option> 
<option> Dermatologist</option> 
<option> Dietitian / Nutritionist</option>
   <option> Ear, Nose &amp; Throat Doctor (ENT)</option>
	<option> Endocrinologist </option>
<option> Eye Doctor</option>
<option> Gastroenterologist </option>
<option> Hearing Specialist</option>
	<option> Hematologist (Blood Specialist)</option>
<option>Infectious Disease Specialist </option>
<option> Infertility Specialist</option>
<option> Naturopathic Doctor</option>
	<option> Nephrologist (Kidney Specialist)</option>
	<option> Neurologist (incl Headache Specialists)</option>
	<option> OB-GYN (Obstetrician-Gynecologist)</option>
<option> Opthalmologist</option>
<option> Optometrist</option>
<option> Orthopedic Surgeon</option>
<option> Pain Management Specialist</option>
<option> Pediatrician</option>
	<option> Physiatrist (Physical Medicine) </option>
<option> Physical Therapist</option>
<option> Plastic Surgeon </option>
	<option> Podiatrist (Foot and Ankle Specialist)</option>
<option> Primary Care Doctor</option>
<option>Psychiatrist </option>
<option> Psychologist</option>
	<option> Pulmonologist (Lung Doctor)</option>
<option>Radiologist </option>
<option> Rheumatologist </option>
<option> Sleep Medicine Specialist</option>
<option> Sports Medicine Specialist</option>
<option> Therapist</option>
<option> Urologist</option>

					     </select> <br>

	Choose an insurance provider: 
<select name="provider">
<option> Aetna</option> 
<option>  
</select><br>
			      Choose a plan: 
<select name="plan">
<option> </option>
</select><br>
   First Name: <input name="firstname" type="text" /><br>
   Last Name: <input name="lastname" type="text" /> <br>
in Zip Code: <input name="zipcode" type="text" /> <br>


<input type="submit" value="Search!"/>
</form> 

			<?php
   echo "Today is ".  date("Y/m/d") . "<br>"; 

			  ?>
                        </body>
</html>
