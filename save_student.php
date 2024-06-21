



<?php
$servername = "localhost";
$username = "root";
$password = "yourpassword";
$dbname = "PIS"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (first_name, last_name, date_of_birth, gender, email, phone_number, address, city, state, zipcode, country, college_name, major, year_of_study, gpa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssisid", $first_name, $last_name, $date_of_birth, $gender, $email, $phone_number, $address, $city, $state, $zipcode, $country, $college_name, $major, $year_of_study, $gpa);

// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
$college_name = $_POST['college_name'];
$major = $_POST['major'];
$year_of_study = $_POST['year_of_study'];
$gpa = $_POST['gpa'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
