<html>
       <head>
                   <title> CS415 Final Project</title>
       </head>
                        <body>
Welcome to the DoctorFinder database system! <br>
Authors: Jessie Young and Alan Chancellor


<h4> Find a Doctor by Specialty </h4> 
<form action="results.php" method="post" > 

<select name="specialty">
<option> </option> 
<option> Acupuncturist </option> 
<option> Allergist </option> 
<option> Audiologist</option> 
   <option> Cardiologist </option> 
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
<option> </option> 
<option> Aetna</option> 
<option> Blue Cross Blue Shield </option>
<option> UnitedHealthCare </option>
<option> Alliance PPO </option>
<option> CareFirst Blue Cross Blue Shield </option>
</select><br>
			      Choose a plan: 
<select name="plan">
<option> </option> 
<option> Aetna Choice POS (Aetna HealthFund) </option>
<option> Aetna Choice POS II (Aetna HealthFund) </option>
<option> Aetna Choice POS II (Aetna HealthFund) </option>
<option> Aetna Golden Choice Plan (PPO) </option>
<option> Aetna Golden Medicare Plan (HMO)  </option>
<option> PPO/EPO </option>
<option> UnitedHealthCare Community Plan for Families </option>
<option> Aetna Golden Medicare Plan (HMO) </option>
<option> HMO </option> 
<option> Medicare Plan (HMO/Open Access HMO) </option> 
<option> Open Choice</option> 
<option> Advantage HMO</option> 
<option> Traditional </option> 
<option> BlueChoice HMO </option> 
<option> BlueChoice HMO Open Access </option> 
<option> BluePreferred (PPO) </option> 
<option> CareFirst BlueChoice </option> 
<option> Point of Service (POS) </option> 
<option> Preferred Provider Organization (PPN/PPO) </option> 
<option> Select Preferred Providers (PPO)  </option> 
<option> Traditional Indemnity </option>
<option> Personal Comp </option>

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