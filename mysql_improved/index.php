<?php
/*
This connection is the creation of database in tradintional way of PP
include ('includes/dbconnect.inc.php');
*/

/*
this db commenction includes creating a databae on the go without using PHPmyadmin
include ('includes/dbconnect2.inc.php');
*/

//this is the connection to database using OOPs to create a object of mysqli class
include('includes/dbconnectoops.inc.php');



/*
        $sql= "SELECT * FROM product_db";
        $result = mysqli_query($conn, $sql);  // return the object for query on the database
        
        if(mysqli_num_rows($result)>0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo " ".$row['productId'];
                echo " ".$row['productName'];
                echo " ".$row['productPrice'];
                echo " ".$row['productType'];
                echo "<br>";
            }
        }
        else{
            echo "NO RECORDS ARE FOUND";
        }
   */ 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect using MYSQLI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h3>    This is the second connection to new</h3>
<!-- this section is for fetching the data from the database -->
<?php
include('includes/insert.inc.php');
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<!-- THis is the code for inserting the data into the database -->
<?php

$sql = "INSERT INTO product_db(productName, productPrice, productType)VALUES('Acer Aspire7',56000.00,'Budget Laptop')";

if ($conn->query($sql)===TRUE)
{
    echo "Record inserted successfully";
}
else
{
    echo "Unable to insert data";
}

$conn->close();
?>

