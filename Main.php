<?php
require_once 'files/login.php';
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal error");
$query = "SELECT * FROM classics";
$result = $conn->query($query);
if (!$result) die ("Fatal error");

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
 {
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo 'Author: ' .htmlspecialchars($row['author']) ."\n";
    echo 'Title: ' .htmlspecialchars($row['title']) ."\n";
    echo 'Category: ' .htmlspecialchars($row['category']) ."\n";
    echo 'Year: ' .htmlspecialchars($row['year']) ."\n";
    echo 'ISBN: ' .htmlspecialchars($row['isbn']) ."\n\n";
}

$result->close();
$conn->close();
/*
class A
{
   static function askuser() {
define("NUM_1",1);
$factor = 5;
echo "Where do you want to live?\n1:Big City\n2:Small City\n3:SubUrban\n";
$a=readline(""); 
echo "Where do you want to live?\n1:Big City\n2:Small City\n3:SubUrban\n";
$b=readline(""); 
A::comparing($a,$b,$factor);

    }

    static function comparing($a,$b,$factor) {
        //echo $a, $b, $factor;
if ($a == $b) {
    $factor_1 = 2;
    $c = NUM_1*$factor*$factor_1;
    echo $c;
} elseif (--$a == $b || ($a += 2) == $b) {
    $factor_1 = 1;
    $c = NUM_1*$factor*$factor_1;
    echo $c;
} else {
    echo 0;
}
    }
}

A::askuser();
*/
?>