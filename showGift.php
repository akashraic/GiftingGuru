<html>
    <body>
        <?php
        include 'database.php';
 
        $conn = OpenCon();

        $sql="SELECT * FROM giftrecommendation WHERE attribute='Creative'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
            
?>
            <a href="<?php echo $row['url']?>" target="_blank"a><img src = "<?php echo $row['gift']?>" /></a>
            
     
    </body>
</html>
