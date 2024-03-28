<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Entry_Form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit_entry.css">
</head>
<style>
   .edit-button,
        .delete-button {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 8px 16px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px; 
            margin-right: 8px; 
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s; 
        }

        .edit-button:hover {
            background-color: #45a049;  
        }

        .delete-button:hover {
            background-color: #d32f2f; 
        }
</style>
<body>
<?php
include_once('nav.html') ;
require_once("dbcontact_form.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id = $_POST['id'];
    $first_name = $_POST['fist_name'];
    $last_name = $_POST['last_name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];


    $sql = "UPDATE contact_info SET first_name=?,last_name=?, country=? email=?, phone_number=?, WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssssi", $first_name,$last_name,$country, $email, $phone_number,$id);

    if ($stmt->execute()) {
        
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}

$sql = "SELECT id, first_name,last_name, country, email, phone_number, FROM contact_info";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<h1 class='bg-light-subtle'>Edit Entry</h1>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Country</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["country"] . "</td>

                <td>" . $row["email"] . "</td>
                <td>" . $row["phone_number"] . "</td>

                <td>
                    <form method='POST' action=''>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input type='text' name='name' value='" . $row["first_name"] . "'>
                        <input type='text' name='name' value='" . $row["last_name"] . "'>
                        <input type='text' name='name' value='" . $row["country"] . "'>

                        <input type='text' name='email' value='" . $row["email"] . "'>
                        <input type='text' name='phone' value='" . $row["phone_number"] . "'>

                        <button class='edit-button' type='submit' name='edit'>Edit</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "<h1 class='bg-light-subtle'>Delivery Form Entries</h1>";
    echo "0 results";
    echo "</div>";
}

$connect->close();
?>
</body>
</html>

<footer>
    <p>&copy; 2024 MeDiHub. All rights reserved.</p>
</footer>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>