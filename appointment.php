<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    // Process the form data (e.g., save to database, send email, etc.)
    
    // Send a response back to the AJAX request
    echo "Form submitted successfully.";
} else {
    // Handle invalid access
    echo "Invalid request.";
}
?>
