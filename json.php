<?php
$username="root";
$passwd="";
$db =new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

// Returns: ["Apple","Banana","Pear"]
$one=array("Apple", "Banana", "Pear");
echo json_encode($one);

echo '</br>';
// Returns: {"4":"four","8":"eight"}
echo json_encode(array(4 => "four", 8 => "eight"));

echo '</br>';
// Returns: {"apples":true,"bananas":null}
echo json_encode(array("apples" => true, "bananas" => null));
echo '</br>';

?>