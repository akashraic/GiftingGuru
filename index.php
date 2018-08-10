

<!DOCTYPE html>
<html>
<head>
	<title>Gifting Guru</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script  type="text/javascript" src="selectScript.js"></script>
<!-- 	<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
	<script>
  	// Initialize Firebase
  	var config = {
    	apiKey: "AIzaSyDcR9rrPiTlfTVDZ7HrQDs2CLGnewlE-T4",
    	authDomain: "gifiting-guru.firebaseapp.com",
    	databaseURL: "https://gifiting-guru.firebaseio.com",
    	projectId: "gifiting-guru",
    	storageBucket: "",
    	messagingSenderId: "94782652753"
  	};
  	firebase.initializeApp(config);
	</script> -->
        
</head>
<body>
	<form action="index.php" method="post">
		AgeGroup:<br>
		<select name="ageGroup" required>
			<option value="15-20">15-20</option>
			<option value="20-30">20-30</option>
			<option value="30-45">30-45</option>
			<option value="45 and over">45 and over</option>
		</select>
		<br><br>

                Gender: <br>
		<input type="radio" name="gender" value="male" checked> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
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
                        <option value="Select2">--Select an Item--</option>
			<option value="Creative2">Creative</option>
			<option value="Adventurous2">Adventurous</option>
			<option value="Intellectual2">Intellectual</option>
			<option value="Generous2">Generous</option>
			<option value="Outgoing2">Outgoing</option>
			<option value="Family_Oriented2">Family Oriented</option>
			<option value="Philosophical2">Philosophical</option>
		</select>
                
                <br><br>
                
                Sub-attribute2:<br>
                <select class="sattr2" name="subattributeGroup2" required>
                        <option value="">--Select an Item--</option>
		</select>
                
                <br><br>
                
                Attribute3:<br>
  		<select class=attr3 name="attributeGroup3" required>
                        <option value="Select3">--Select an Item--</option>
			<option value="Creative3">Creative</option>
			<option value="Adventurous3">Adventurous</option>
			<option value="Intellectual3">Intellectual</option>
			<option value="Generous3">Generous</option>
			<option value="Outgoing3">Outgoing</option>
			<option value="Family_Oriented3">Family Oriented</option>
			<option value="Philosophical3">Philosophical</option>
		</select>
                
                <br><br>
                
                Sub-attribute3:<br>
                <select class="sattr3" name="subattributeGroup3" required>
                        <option value="">--Select an Item--</option>
		</select>
                
		<br><br>

		<input type="submit" value="Submit">

	</form>
</body>

</html>



