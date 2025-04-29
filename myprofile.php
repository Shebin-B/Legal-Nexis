<?php
session_start(); // Start the session

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, navigate to the correct profile based on user type
    $userId = $_SESSION['user_id'];
    
    // Determine the profile page URL
    switch ($userId) {
        case 0:
            $profilePage = "admin-dashboard.php"; 
            break;
        case 2:
            $profilePage = "client-profile.php"; 
            break;
        case 3:
            $profilePage = "Lawyer-profile .php"; 
            break;
        default:
            $profilePage = "unknown-profile.php"; 
            break;
    }
    
    // Redirect to the profile page
    header("Location: $profilePage");
    exit();
} else {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}
?>