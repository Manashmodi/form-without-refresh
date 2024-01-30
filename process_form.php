<?php
include('form.php');

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['image']['name'];

    // Basic validation
    if (empty($name) || empty($email) || empty($address) || empty($mobile) || empty($image)) {
        // Return an error message if any field is empty
        echo "Please fill in all fields.";
        http_response_code(400); // Bad request
        exit();
    }

    // Perform additional validation if needed (e.g., email format)

    // Process form data (you can perform database operations, send emails, etc.)
    // For demonstration purposes, just echoing a success message
    echo "Form submitted successfully!";
    exit();
} else {
    // If the form is not submitted via POST, return an error
    echo "Method not allowed.";
    http_response_code(405); // Method Not Allowed
    exit();
}
?>

