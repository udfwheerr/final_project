<?php
require_once("dbcontact.php");


if(isset($_POST["first_name"], $_POST["last_name"], $_POST["country"], $_POST["email"], $_POST["phone_number"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];

    $query = "INSERT INTO contact_info (first_name, last_name, country, email, phone_number) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($connect, $query)) {
        mysqli_stmt_bind_param($stmt, "sssss", $first_name, $last_name, $country, $email, $phone_number);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ./display_data.php");
        } else {
            die("Execute failed: " . mysqli_error($connect));
        }

        mysqli_stmt_close($stmt); 
    } else {
        die("Prepare failed: " . mysqli_error($connect));
    }
} else {
    echo "All form fields are required.";
}

mysqli_close($connect);
?>