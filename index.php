

<!DOCTYPE html>
<html>
<head>
	<title>Gifting Guru</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script  type="text/javascript" src="selectScript.js"></script>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <header id="header" class="container alt">
            <div class="col-sm-12 text-center" id="how">
                <h1>How It Works</h1>
            </div>
    </header>

    <form action="showGift.php" method="post">
        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center ageArea">
                <label for="age">What age group is your giftee in?</label>
                <select name="ageGroup" class="form-control" required>
			        <option value="15-20">15-20</option>
			        <option value="20-30">20-30</option>
			        <option value="30-45">30-45</option>
			        <option value="45 and over">45 and over</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center genArea" >
                <label for="gen">What is your giftee's gender?</label> <br>
		        <input type="radio" name="gender" value="Male" checked> Male<br>
                <input type="radio" name="gender" value="Female"> Female<br>
		        <input type="radio" name="gender" value="Neutral"> Neutral<br>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center budgetArea">
                <label for="budget">What is your budget range?</label> <br>
                <select name="budgetGroup" class="form-control" required>
			        <option value="25-50">$25-50</option>
			        <option value="50-100">$50-100</option>
			        <option value="100-150">$100-150</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center attrArea_1">
                <label for="Attribute_1">Pick the first attribute from below to describe your giftee</label> <br>
                <select class="form-control attr1" name="attributeGroup"  required>
                    <option value="Select">--Select an Item--</option>
                    <option value="Creative">Creative</option>
                    <option value="Adventurous">Adventurous</option>
                    <option value="Intellectual">Intellectual</option>
                    <option value="Generous">Generous</option>
                    <option value="Outgoing">Outgoing</option>
                    <option value="Family_Oriented">Family Oriented</option>
                    <option value="Philosophical">Philosophical</option>
                </select>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center subattrArea_1">
                <label for="subAttribute_1">Pick one sub attribute from below to describe your giftee</label> <br>
                <select class="form-control sattr1" name="subattributeGroup" required>
                        <option value="">--Select an Item--</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center attrArea_2">
                <label for="Attribute_2">Pick the second attribute from below to describe your giftee</label> <br>
  		        <select class="form-control attr2" name="attributeGroup2" required>
                    <option value="Select">--Select an Item--</option>
			        <option value="Creative">Creative</option>
			        <option value="Adventurous">Adventurous</option>
			        <option value="Intellectual">Intellectual</option>
			        <option value="Generous">Generous</option>
			        <option value="Outgoing">Outgoing</option>
			        <option value="Family_Oriented">Family Oriented</option>
			        <option value="Philosophical">Philosophical</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center subattrArea_2">
                <label for="subAttribute_2">Pick one sub attribute from below to describe your giftee</label> <br>
                <select class="form-control sattr2" name="subattributeGroup2" required>
                        <option value="">--Select an Item--</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center attrArea_2">
                <label for="Attribute_3">Pick the second attribute from below to describe your giftee</label> <br>
  		        <select class="form-control attr3" name="attributeGroup3" required>
                    <option value="Select">--Select an Item--</option>
			        <option value="Creative">Creative</option>
			        <option value="Adventurous">Adventurous</option>
			        <option value="Intellectual">Intellectual</option>
			        <option value="Generous">Generous</option>
			        <option value="Outgoing">Outgoing</option>
			        <option value="Family_Oriented">Family Oriented</option>
			        <option value="Philosophical">Philosophical</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6 form-group text-center subattrArea_3">
                <label for="subAttribute_3">Pick one sub attribute from below to describe your giftee</label> <br>
                <select class="form-control sattr3" name="subattributeGroup3" required>
                        <option value="">--Select an Item--</option>
		        </select>
            </div>
            <div class="col-3"></div>
        </div>

        <input class="submit" name="submit" type="submit" value="submit">

	</form>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>



