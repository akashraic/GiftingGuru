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

        $offsets = array(
            'Creative' => 0,
            'Adventurous' => 145,
            'Family_oriented' => 253,
            'Generous' => 289,
            'Intellectual' => 361,
            'Outgoing' => 433,
            'Philosophical' => 505
        );

        //Fetching the matching records from the database
        $result = $conn->query("
            SELECT ID, Attribute,
                (CASE WHEN Gift_1 <> '-' AND Gift_1 IS NOT NULL THEN '+' ELSE '-' END) AS Gift_1_State,
                (CASE WHEN Gift_2 <> '-' AND Gift_2 IS NOT NULL THEN '+' ELSE '-' END) AS Gift_2_State,
                (CASE WHEN Gift_3 <> '-' AND Gift_3 IS NOT NULL THEN '+' ELSE '-' END) AS Gift_3_State,
                (CASE WHEN Gift_4 <> '-' AND Gift_4 IS NOT NULL THEN '+' ELSE '-' END) AS Gift_4_State,
                (CASE WHEN Gift_5 <> '-' AND Gift_5 IS NOT NULL THEN '+' ELSE '-' END) AS Gift_5_State
            FROM gift_recommendation;
        ");

        $pictureCount = 0;
        $first = true;
        $currentAttribute = 'Creative';

        while ($row = $result->fetch_assoc()) {

            $paths = array();

            echo "Record: " . $row['ID'] . ", " . $row['Gift_1_State'] . ", " . $row['Gift_2_State'] . ", " .$row['Gift_3_State'] . ", " .$row['Gift_4_State'] . ", " .$row['Gift_5_State'] . "</br>";

            if (!$first) $pictureCount--;
            $first = false;

            if ($currentAttribute != $row['Attribute']) {
                $currentAttribute = $row['Attribute'];
                $pictureCount = 1;
            }

            for ($i = 1; $i <= 5; $i++){

                $column = 'Gift_' . $i .'_State';

                if ($row[$column] == '+') {
                    $paths[$i] = 'pictures/' . $row['Attribute'] . "/" . ($row['ID'] - $offsets[$row['Attribute']] + $pictureCount);
    
                    if(file_exists( $paths[$i] . ".jpg" )) $paths[$i] .= ".jpg";
                    else if (file_exists( $paths[$i] . ".png" )) $paths[$i] .= ".png";
                    else if (file_exists( $paths[$i] . ".jpeg" )) $paths[$i] .= ".jpeg";
                    else $path = "";
    
                    $pictureCount++;
                } else $paths[$i] = "";
            }

            echo "Result: " . $paths[1] . " | " . $paths[2] . " | " . $paths[3] . " | " . $paths[4] . " | " . $paths[5] . "</br></br>";

            $stmt = $conn->prepare("UPDATE gift_recommendation SET Gift_Picture_1 = ?, Gift_Picture_2 = ?, Gift_Picture_3 = ?, Gift_Picture_4 = ?, Gift_Picture_5 = ? WHERE ID = ?");
            $stmt->bind_param('sssssi', $paths[1], $paths[2], $paths[3], $paths[4], $paths[5], $row['ID']); 
            $stmt->execute();

            if ($stmt->errno) {
                echo "Failed to insert </br>" . $stmt->error;
            }
            else echo "Updated {$stmt->affected_rows} rows </br>";
            
            $stmt->close();
        }


        ?> 
     
        </body>
    </html>