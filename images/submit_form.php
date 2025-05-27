<?php
// Include the database connection
include 'db_connection.php';

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = $_POST['dob'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $emergencyPhone = $_POST['emergencyPhone'];
    $relationship = mysqli_real_escape_string($conn, $_POST['relationship']);
    $altPhone = $_POST['altPhone'];

    $membershipType = $_POST['membershipType'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $paymentMethod = $_POST['paymentMethod'];

    $healthCondition = mysqli_real_escape_string($conn, $_POST['healthCondition']);
    $medications = mysqli_real_escape_string($conn, $_POST['medications']);
    $fitnessGoals = mysqli_real_escape_string($conn, $_POST['fitnessGoals']);

    // SQL query to insert data
    $sql = "INSERT INTO members (
                name, dob, address, phone, email,
                emergency_phone, relationship, alt_phone,
                membership_type, start_date, end_date, payment_method,
                health_condition, medications, fitness_goals
            ) VALUES (
                '$name', '$dob', '$address', '$phone', '$email',
                '$emergencyPhone', '$relationship', '$altPhone',
                '$membershipType', '$startDate', '$endDate', '$paymentMethod',
                '$healthCondition', '$medications', '$fitnessGoals'
            )";

    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost/car/index.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
