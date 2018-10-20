<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="showGift.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
        <h1>Your Recommendations Are Here!</h1>

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
            echo "<p>Insertion Failed <br/> Some Fields are Blank....!</p>";
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


        echo $age . "; " . $gender . "; " . $budget . "; " . $attributeGroup . "; " . $subattributeGroup . "; " . $attributeGroup2 . "; " . $subattributeGroup2 . "; " . $attributeGroup3 . "; " . $subattributeGroup3 ."</br>";


        //------------ Randomized

        //TODO: different attributes filtering
        $results = array();
        $index = 0;

        while ($row = $result->fetch_assoc()){
            if (isset($row['Gift_1']) && $row['Gift_1'] != '-') $results[$index++] = array('url' => $row['Gift_1'], 'image' => $row['Gift_Picture_1']);
            if (isset($row['Gift_2']) && $row['Gift_2'] != '-') $results[$index++] = array('url' => $row['Gift_2'], 'image' => $row['Gift_Picture_2']);
            if (isset($row['Gift_3']) && $row['Gift_3'] != '-') $results[$index++] = array('url' => $row['Gift_3'], 'image' => $row['Gift_Picture_3']);
            if (isset($row['Gift_4']) && $row['Gift_4'] != '-') $results[$index++] = array('url' => $row['Gift_4'], 'image' => $row['Gift_Picture_4']);
            if (isset($row['Gift_5']) && $row['Gift_5'] != '-') $results[$index++] = array('url' => $row['Gift_5'], 'image' => $row['Gift_Picture_5']);

            //echo "---> " . $index . "</br>";
        }
        //print_r($results);

        echo "<div>";
        for ($i = 0; $i < sizeof($results); $i++){
            
            //$id = rand(1,5);
            echo "<div class='circular'><a href=\"" . $results[$i]['url'] . "\"><img src=\"". $results[$i]['image'] ."\"/></a></div>";
        }
        echo "</div>";

        //------- Non-randomized
        /*
        echo "<div>";
        while ($row = $result->fetch_assoc()) {

            if (isset($row['Gift_1']) && $row['Gift_1'] != '-') echo "<a href=\"" . $row['Gift_1'] . "\"><img src=\"". $row['Gift_Picture_1'] ."\"/></a>";
            if (isset($row['Gift_2']) && $row['Gift_2'] != '-') echo "<a href=\"" . $row['Gift_2'] . "\"><img src=\"". $row['Gift_Picture_2'] ."\"/></a>";
            if (isset($row['Gift_3']) && $row['Gift_3'] != '-') echo "<a href=\"" . $row['Gift_3'] . "\"><img src=\"". $row['Gift_Picture_3'] ."\"/></a>";
            if (isset($row['Gift_4']) && $row['Gift_4'] != '-') echo "<a href=\"" . $row['Gift_4'] . "\"><img src=\"". $row['Gift_Picture_4'] ."\"/></a>";
            if (isset($row['Gift_5']) && $row['Gift_5'] != '-') echo "<a href=\"" . $row['Gift_5'] . "\"><img src=\"". $row['Gift_Picture_5'] ."\"/></a>";
        }
        echo "</div>";
        */

        ?> 
<!--        stars rating-->
        <div class="rate-wrapper">
            <h2>How did we do?</h2>
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="5 Stars">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="4 Stars">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="3 Stars">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="2 Stars">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="1 Star">1 star</label>
            </div>
        </div>

<!--        go home or gift page-->
        <div style="display:block;">
            <button class="gift_button border"><a style="text-decoration: none; color: white; margin:0 auto; justify-content: center;" href="gift.php">New Recommendation</a></button>
            <button class="gift_button border"><a style="text-decoration: none; color: white; margin:0 auto; justify-content: center;" href="index.php">Return Home</a></button>
        </div>


    </body>
</html>
