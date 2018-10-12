<html>
    <head>
        <link rel="stylesheet" type="text/css" href="showGift.css" />
    </head>
    <body>
        <h1>Your Recommendations</h1>
        <p>the following are your recommendations:</p>

        <?php
        require 'database.php';

        $conn = OpenCon();

        $age = $_POST["ageGroup"];
        $gender = $_POST["gender"];
        $budget = $_POST["budgetGroup"];
        $attributeGroup = $_POST["attributeGroup"];
        $subattributeGroup = $_POST["subattributeGroup"];
        $attributeGroup2 = $_POST["attributeGroup2"];
        $subattributeGroup2 = $_POST["subattributeGroup2"];
        $attributeGroup3 = $_POST["attributeGroup3"];
        $subattributeGroup3 = $_POST["subattributeGroup3"];


        //Recording the current query in database
        if(isset($_POST['submit']))
        {
            $sql = "INSERT INTO answer (ageGroup, gender, budgetGroup, attribute, subAttribute, attribute2, subAttribute2, attribute3, subAttribute3) 
                VALUES ('$age', '$gender' , '$budget', '$attributeGroup', '$subattributeGroup' , '$attributeGroup2' , '$subattributeGroup2' , '$attributeGroup3' , '$subattributeGroup3')";
            mysqli_query($conn,$sql);
        }
        else{
            echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }

        //Fetching the matching records from the database
        $stmt = $conn->prepare('
            SELECT * FROM gift_recommendation WHERE 
            Age = ? AND Gender = ? AND Budget = ? AND 
            (Attribute = ? AND Sub_attribute = ? OR 
            Attribute = ? AND Sub_attribute = ? OR 
            Attribute = ? AND Sub_attribute = ?)
        ');

        $stmt->bind_param('sssssssss', $age, $gender, $budget, 
            $attributeGroup, $subattributeGroup,
            $attributeGroup2, $subattributeGroup2,
            $attributeGroup3, $subattributeGroup3
        ); 
        $stmt->execute();
        $result = $stmt->get_result();

        echo $attributeGroup . "; " . $subattributeGroup . "; " . $attributeGroup2 . "; " . $subattributeGroup2 . "; " . $attributeGroup3 . "; " . $subattributeGroup3 ."</br>";


        //TODO: different attributes filtering
        echo "<div>";
        while ($row = $result->fetch_assoc()) {

            //if ()
   
            echo "<a href=\"" . $row['Gift_1'] . "\"><img src=\"". $row['Gift_Picture_1'] ."\"/></a>";
            echo "<a href=\"" . $row['Gift_2'] . "\"><img src=\"". $row['Gift_Picture_2'] ."\"/></a>";
            echo "<a href=\"" . $row['Gift_3'] . "\"><img src=\"". $row['Gift_Picture_3'] ."\"/></a>";
            echo "<a href=\"" . $row['Gift_4'] . "\"><img src=\"". $row['Gift_Picture_4'] ."\"/></a>";
            echo "<a href=\"" . $row['Gift_5'] . "\"><img src=\"". $row['Gift_Picture_5'] ."\"/></a>";
        }
        echo "</div>";

        ?> 
     
    </body>
</html>
