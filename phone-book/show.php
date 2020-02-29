<?php
$search = $_POST['sname'];

try {
    $stmt = $conn->prepare("SELECT id_phone, phone, name FROM phone WHERE name like '%$search%'  ");
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

class TableRows extends RecursiveIteratorIterator
{
        function __construct($it)
        {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current()
        {
            return "<td>" . parent::current() . "</td>";
        }

        function beginChildren()
        {
            echo "<tbody><tr>";
        }

        function endChildren()
        {
            echo "</tr></tbody>" . "\n";
        }
}
