<?php
if(isset($_POST["tertor"])) {
    require_once 'dbhandler.php';

    $aID = $_POST['aruID'];

    $sql = "DELETE FROM Aruk WHERE Aru_ID = '$aID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}

?>