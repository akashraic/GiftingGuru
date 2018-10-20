<html>
<body>
<?php

//include 'database.php';
//
function Save(){
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


    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO answer (ageGroup, gender, budgetGroup, attribute, subAttribute, attribute2, subAttribute2, attribute3, subAttribute3)
    VALUES ('$age', '$gender' , '$budget', '$attributeGroup', '$subattributeGroup' , '$attributeGroup2' , '$subattributeGroup2' , '$attributeGroup3' , '$subattributeGroup3')";

        mysqli_query($conn,$sql);
        echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
?>



</body>
</html>




