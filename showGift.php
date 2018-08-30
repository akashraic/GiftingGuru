<html>
    <body>
        <?php
        require 'database.php';
        require 'saveInfo.php';
 
        $conn = OpenCon();
        
        Save();

        $newInput = mysqli_query($conn,"SELECT * FROM answer WHERE inputId = (SELECT MAX(inputId) FROM answer)") or die("Error :" . mysqli_error($conn));
        $result = mysqli_fetch_array($newInput);

        $arr = array();
        $arr = array_unique($arr);


        $loopCounter = mysqli_query($conn, "SELECT * FROM gift_recommendation") or die("Error :" . mysqli_error($conn));

        while($loop = mysqli_fetch_array($loopCounter))
        {
            if($result['gender'] == $loop['gender'] && $result['ageGroup'] == $loop['ageGroup']) {
                $arr[] = $loop;
            }


        }


       // print_r($arr);

        foreach($arr as $teams) {
            foreach ($teams as $team) {
                echo $team;
                echo "<br>";
            }
        }
        ?>
            
            
     
    </body>
</html>
