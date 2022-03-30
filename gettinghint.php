<?php
require_once ("database.php");
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection();  //connect to the database

// Array with names
$a = [];

$select_shareholder = "SELECT name FROM `shareholders`";
$result = $connection->query($select_shareholder);
while ($row = $result->fetch_assoc()) {
    $a[] = $row['name'];
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
// echo json_encode($a);
$data = array(
  'status' => 200,
  'data' => $a
);

header("Content-type: application/json");
echo json_encode($data);
exit();
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 