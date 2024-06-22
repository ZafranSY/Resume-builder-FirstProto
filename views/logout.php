<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the index.php or any other page after logout
header("Location: ../index.php");
exit;
?>
