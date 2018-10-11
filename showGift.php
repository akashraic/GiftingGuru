<html>
    <head>
        <link rel="stylesheet" type="text/css" href="showGift.css" />
    </head>
    <body>
    <h1>Your Recommendations</h1>
    <p>the following are your recommendations:</p>

        <?php
        require 'database.php';
        require 'saveInfo.php';
 
        $conn = OpenCon();
        
        Save();

        $newInput = mysqli_query($conn,"SELECT * FROM answer WHERE inputId = (SELECT MAX(inputId) FROM answer)") or die("Error :" . mysqli_error($conn));
        $result = mysqli_fetch_array($newInput);

        $arr = array();


        $loopCounter = mysqli_query($conn, "SELECT * FROM gift_recommendation") or die("Error :" . mysqli_error($conn));

        while($loop = mysqli_fetch_array($loopCounter))
        {
            if ($result['gender'] == $loop['gender']
                && $result['ageGroup'] == $loop['ageGroup']
                && $result['budgetGroup'] == $loop['budgetGroup'])
            {
                if (($result['attribute'] == $loop['attribute'] && $result['subAttribute'] == $loop['subAttribute'])
                || ($result['attribute2'] == $loop['attribute'] && $result['subAttribute2'] == $loop['subAttribute'])
                || ($result['attribute3'] == $loop['attribute'] && $result['subAttribute3'] == $loop['subAttribute'])) {
                    //if (array_intersect($result, $loop)){
                    $arr[] = $loop;
                    // $arr[] = array_intersect($result, $loop);
                    //echo $loop['budgetGroup'];
                    //echo $result['budgetGroup'];
                }
            }
        }


       // print_r($arr);

        foreach($arr as $teams) {
                echo "<a href=\"" . $teams['giftURL']. "\"><img src=\"".$teams['giftPicture']."\"/></a>";
                echo "<br><br>";
        }
        ?>
            
            
     
    </body>
</html>
