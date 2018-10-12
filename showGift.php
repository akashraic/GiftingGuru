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
        $stmt = $conn->prepare('SELECT * FROM gift_recommendation WHERE Age = ? AND Gender = ? AND Budget = ? AND Attribute = ? AND Sub_attribute = ?');
        $stmt->bind_param('sssss', $age, $gender, $budget, $attributeGroup, $subattributeGroup); 

        $stmt->execute();

        $result = $stmt->get_result();

        //TODO: different attributes filtering
        echo "<div>";
        while ($row = $result->fetch_assoc()) {

            for ($i = 1, $j = 1; $i <= 5, $j <= 5; $i++, $j++){
                $imageID = ($row['ID'] - 1) * 5 + $i;
                $path = 'pictures/' . $row['Attribute'] . '/' . $imageID;

                if(file_exists( $path . ".jpg" )) $path .= ".jpg";
                else if (file_exists( $path . ".png" )) $path .= ".png";
                else if (file_exists( $path . ".jpeg" )) $path .= ".jpeg";
                else $path = "";

                if ($j == 1) echo "<a href=\"" . $row['Gift_1'] . "\"><img src=\"". $path ."\"/></a>";
                if ($j == 2) echo "<a href=\"" . $row['Gift_2'] . "\"><img src=\"". $path ."\"/></a>";
                if ($j == 3) echo "<a href=\"" . $row['Gift_3'] . "\"><img src=\"". $path ."\"/></a>";
                if ($j == 4) echo "<a href=\"" . $row['Gift_4'] . "\"><img src=\"". $path ."\"/></a>";
                if ($j == 5) echo "<a href=\"" . $row['Gift_5'] . "\"><img src=\"". $path ."\"/></a>";
            }
        }
        echo "</div>";

        ?> 
     
    </body>
</html>
