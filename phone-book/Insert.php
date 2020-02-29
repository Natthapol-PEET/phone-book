<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

try {
    $sql = "INSERT INTO phone (phone, name)
    VALUES ('$phone','$name')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header('location:index.php')

?>