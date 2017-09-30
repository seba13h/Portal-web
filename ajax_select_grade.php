<?php 
    
    require_once("managers/student_manager.php");
    
    $grade = $_POST['curso'];

    StudentManager::findStudentsByCurse($grade);
    $response = array(
        "curso"=>$grade
    );

    
    echo json_encode($response);
    header("Location: admin.php");

?>