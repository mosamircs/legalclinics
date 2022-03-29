   <?php
    require_once("header.php");
    require_once ("database.php");
    require_once("register.php");
    global $user_id;
   if (isset($_POST['company_type'])) {
    $company_radio = $_POST['company_type'];
    if ($company_radio == 'option1') {
        $formdata["company_type"] = "شركة ذات مسئولية محدودة";
    } elseif ($company_radio == 'option2') {
        $formdata["company_type"]  = "شركة مساهمة مصري";
    } elseif ($company_radio == 'option3') {
        $formdata["company_type"]  = "شركة شخص واحد ذات مسئولية محدودة";
    } elseif ($company_radio == 'option4') {
        $formdata["company_type"]  = "المنشاة الفردية";
    } elseif ($company_radio == 'option5') {
        $formdata["company_type"]  = "شركة التضامن";
    } elseif ($company_radio == 'option6') {
        $formdata["company_type"]  = "شركة التوصية البسيطة";
    }
    }
         if (isset($_POST["company_name"])) {
             $company = 0;
             foreach ($_POST["company_name"] as $key => $value) {
                 $formdata["company_name"][$company] = $value;
                 $company++;
             }
         }
         $formdata["company_name"] = serialize($formdata["company_name"]);

         // company form data from the form
         if (isset($_POST["company_activity"])) {
             $formdata["company_activity"] = $_POST["company_activity"];
         }
         if (isset($_POST["company_address"])) {
             $formdata["company_address"] = $_POST["company_address"];
         }
         if (isset($_POST["capital_value"])) {
             $formdata["capital_value"] = $_POST["capital_value"];
         }
         if (isset($_POST["capital_share"])) {
             $formdata["capital_share"] = $_POST["capital_share"];
         }
         //shareholders form data
         if (isset($_POST["shareholder_name"])) {
             $formdata["shareholder_name"] = $_POST["shareholder_name"];
         }
         if (isset($_POST["shareholder_nationality"])) {
             $formdata["shareholder_nationality"] = $_POST["shareholder_nationality"];
         }
         if (isset($_POST["shareholder_percentage"])) {
             $formdata["shareholder_percentage"] = $_POST["shareholder_percentage"];
         }
         if (isset($_POST["personal_id"])) {
             $formdata["personal_id"] = $_POST["personal_id"];
         }
?>

<?php

    // // $insert_company
    if(isset($formdata["company_type"])&&isset($formdata["company_activity"])&&isset($formdata["company_address"])&&isset($formdata["capital_value"])&&isset($formdata["capital_share"])){
        $insert_company = "INSERT INTO `companies`(`company_type`,`company_name` , `company_address`, `company_activity`, `capital_value`, `capital_share`,`user_id`) VALUES ('".$formdata["company_type"]."','".$formdata["company_name"]."','".$formdata["company_address"]."','".$formdata["company_activity"]."','".$formdata["capital_value"]."','".$formdata["capital_share"]."','".$user_id."')";
        $result = $connection->query($insert_company);
        if($result){
            echo "company inserted";
        }else{
            echo "company not inserted";
        }
    }
    // $insert_shareholder 
    if(isset($formdata["shareholder_name"])&&isset($formdata["shareholder_nationality"])&&isset($formdata["shareholder_percentage"])&&isset($formdata["personal_id"])){
        $insert_shareholder = "INSERT INTO `shareholders`(`shareholder_name`,`shareholder_nationality` , `shareholder_percentage`, `personal_id`) VALUES ('".$formdata["shareholder_name"]."','".$formdata["shareholder_nationality"]."','".$formdata["shareholder_percentage"]."','".$formdata["personal_id"]."')";
        $result = $connection->query($insert_shareholder);
        if($result){
            echo "shareholder inserted";
        }else{
            echo "shareholder not inserted";
        }
    }

?>