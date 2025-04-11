<?php
// Start session to handle data
session_start();

// Define title for the page
$title = "Instagram";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="main-container">
        <div class="login-section">
            <div class="promo-image-container">
                <!-- Primary image with fallback -->
                <img src="assets/instagram-phones.png" alt="Instagram on mobile devices" class="promo-image" 
                     onerror="this.onerror=null; this.src='assets/instagram-logo-text.png';">
            </div>
            
            <div class="login-container">
                <?php include 'content.php'; ?>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
    </div>
</body>
</html> 