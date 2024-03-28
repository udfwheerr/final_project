<?php
require_once("dbcontact.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    
    $sql = "UPDATE contact_info SET first_name=?, last_name=?, country=?,email=?, phone_number=? WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssii", $first_name, $last_name, $country, $email, $phone_number, $id);

    if ($stmt->execute()) {
        header("Location:display_data.php");
    } else {
        echo "Error updating entry: " . $stmt->error;
    }

    $stmt->close();
}

$connect->close();
?>