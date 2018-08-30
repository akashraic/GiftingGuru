

<!DOCTYPE html>
<html>
<head>
	<title>Gifting Guru</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script  type="text/javascript" src="selectScript.js"></script>
</head>
<body>

    <form action="showGift.php" method="post">
		AgeGroup:<br>
		<select name="ageGroup" required>
			<option value="15-20">15-20</option>
			<option value="20-30">20-30</option>
			<option value="30-45">30-45</option>
			<option value="45 and over">45 and over</option>
		</select>
		<br><br>

                Gender: <br>
		<input type="radio" name="gender" value="Male" checked> Male<br>
		<input type="radio" name="gender" value="Female"> Female<br>
		<input type="radio" name="gender" value="Neutral"> Neutral<br><br>
                
                Budget:<br>
  		<select name="budgetGroup" required>
			<option value="25-50">$25-50</option>
			<option value="50-100">$50-100</option>
			<option value="100-150">$100-150</option>
		</select>
		<br><br>

  		Attribute1:<br>
  		<select class=attr1 name="attributeGroup" required>
                        <option value="Select">--Select an Item--</option>
			<option value="Creative">Creative</option>
			<option value="Adventurous">Adventurous</option>
			<option value="Intellectual">Intellectual</option>
			<option value="Generous">Generous</option>
			<option value="Outgoing">Outgoing</option>
			<option value="Family_Oriented">Family Oriented</option>
			<option value="Philosophical">Philosophical</option>
		</select>
                <br><br>
            
                Sub-attribute1:<br>
                <select class="sattr1" name="subattributeGroup" required>
                        <option value="">--Select an Item--</option>
		</select>
                
                <br><br>
                   
                Attribute2:<br> 
  		<select class=attr2 name="attributeGroup2" required>
                        <option value="Select">--Select an Item--</option>
			<option value="Creative">Creative</option>
			<option value="Adventurous">Adventurous</option>
			<option value="Intellectual">Intellectual</option>
			<option value="Generous">Generous</option>
			<option value="Outgoing">Outgoing</option>
			<option value="Family_Oriented">Family Oriented</option>
			<option value="Philosophical">Philosophical</option>
		</select>
                
                <br><br>
                
                Sub-attribute2:<br>
                <select class="sattr2" name="subattributeGroup2" required>
                        <option value="">--Select an Item--</option>
		</select>
                
                <br><br>
                
                Attribute3:<br>
  		<select class=attr3 name="attributeGroup3" required>
                        <option value="Select">--Select an Item--</option>
			<option value="Creative">Creative</option>
			<option value="Adventurous">Adventurous</option>
			<option value="Intellectual">Intellectual</option>
			<option value="Generous">Generous</option>
			<option value="Outgoing">Outgoing</option>
			<option value="Family_Oriented">Family Oriented</option>
			<option value="Philosophical">Philosophical</option>
		</select>
                
                <br><br>
                
                Sub-attribute3:<br>
                <select class="sattr3" name="subattributeGroup3" required>
                        <option value="">--Select an Item--</option>
		</select>
                
		<br><br>

                <input class="submit" name="submit" type="submit" value="submit">

	</form>
</body>

</html>



