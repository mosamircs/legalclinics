<?php
       require_once("header.php");
       require_once ("database.php");
       global $formdata;

       $formdata = array();

       if (isset($_POST["username"])) {
           $formdata["username"] = $_POST["username"];
       }
       if (isset($_POST["email"])) {
           $formdata["email"] = $_POST["email"];
       }
       if (isset($_POST["phone"])) {
           $formdata["phone"] = $_POST["phone"];
       }
    $database_instance = Database::getInstance();
    $connection = $database_instance->getConnection();  //connect to the database
    if (isset($formdata["username"])&&isset($formdata["email"])&&isset($formdata["phone"])) {
      
        $insert_user = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('".$formdata["username"]."', '".$formdata["email"]."', '".$formdata["phone"]."')";
    
        $result = $connection->query($insert_user);

        $select_user_id = "SELECT `id` FROM `users` WHERE `email` = ".$formdata['email'];
      
        $user_id = $connection->query($select_user_id);
    }
?>