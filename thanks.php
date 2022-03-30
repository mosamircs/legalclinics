   <?php

    require_once("header.php");
    require_once ("database.php");
    // require_once("register.php");

    $database_instance = Database::getInstance();
    $connection = $database_instance->getConnection();  //connect to the database
    $formdata = array();
    // global $user_id;
    if (isset($_POST['userid'])) {
        $formdata["userid"] = $_POST['userid'];
    }

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
        $formdata["company_name"] = json_encode($_POST["company_name"]);
    }
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

    if (isset($_POST["shareholder_name"])) {
        $formdata["shareholder_name"] = json_encode($_POST["shareholder_name"]);
    }
    if (isset($_POST["shareholder_nationality"])) {
        $formdata["shareholder_nationality"] = json_encode($_POST["shareholder_nationality"]);
    }
    if (isset($_POST["shareholder_percentage"])) {
        $formdata["shareholder_percentage"] = json_encode($_POST["shareholder_percentage"]);
    }
    if (isset($_POST["personal_id"])) {
        $formdata["personal_id"] = json_encode($_POST["personal_id"]);
    }
    if (isset($_POST["signdate"])){
        $formdata["signdate"] = $_POST["signdate"];
    }
    if(isset($_POST["manager"])){   //boolean for manager or not 
        $formdata["manager"] = $_POST["manager"];
    }
    if(isset($_POST["manager_type"])){   
        $formdata["manager_type"] = $_POST["manager_type"];
    }
    if (isset($_POST["perm1"])){
        $formdata["perm1"] = $_POST["perm1"];
    }
    if(isset($_POST["perm2"])){   
        $formdata["perm2"] = $_POST["perm2"];
    }
    if(isset($_POST["perm3"])){   
        $formdata["perm3"] = $_POST["perm3"];
    }
?>

<?php

    // // $insert_company
    if(isset($formdata["company_type"]) && isset($formdata["company_activity"]) && isset($formdata["company_address"]) && isset($formdata["capital_value"]) && isset($formdata["capital_share"]) &&  isset($formdata["userid"])){
    $insert_company = "INSERT INTO `companies`(`company_type`,`company_name` , `company_address`, `company_activity`, `capital_value`, `capital_share`,`user_id`) VALUES ('".$formdata["company_type"]."','".$formdata["company_name"]."','".$formdata["company_address"]."','".$formdata["company_activity"]."','".$formdata["capital_value"]."','".$formdata["capital_share"]."','".$formdata["userid"]."')";
    $result = $connection->query($insert_company);
    $formdatap["company_id"] = $connection->insert_id;
    if($result){
        echo "company saved";
    }else{
        echo "company not saved";
    }
    }
    // $insert_shareholder 
    if(isset($formdata["shareholder_name"])&&isset($formdata["shareholder_nationality"])&&isset($formdata["shareholder_percentage"])&&isset($formdata["personal_id"])){
        $insert_shareholder = "INSERT INTO `shareholders`(`name`,`nationality` , `percentage`, `personal_id`,`manager`,`manager_type`,`perm1`,`perm2`,`perm3`,`company_id`,`sign_date`) VALUES ('".$formdata["shareholder_name"]."','".$formdata["shareholder_nationality"]."','".$formdata["shareholder_percentage"]."','".$formdata["personal_id"]."','".$formdata["manager"]."','".$formdata["manager_type"]."','".$formdata["perm1"]."','".$formdata["perm2"]."','".$formdata["perm3"]."','".$formdata["company_id"]."','".$formdata["signdate"]."')";
        $result = $connection->query($insert_shareholder);
        if($result){
            echo "manager saved";
        }else{
            echo "manager not saved";
        }
    }
    
?>