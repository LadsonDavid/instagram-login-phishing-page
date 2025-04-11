<?php
// This file is just to test if the image is loading correctly
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Test</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        img {
            max-width: 100%;
            border: 1px solid #ccc;
            margin: 20px 0;
        }
        .debug-info {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            width: 100%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <h1>Image Test Page</h1>
    
    <h2>Direct Image Test</h2>
    <img src="assets/instagram-phones.png" alt="Instagram phones">
    
    <div class="debug-info">
        <h3>File Information:</h3>
        <?php
        $file = 'assets/instagram-phones.png';
        if (file_exists($file)) {
            echo "<p>✅ File exists</p>";
            echo "<p>File size: " . filesize($file) . " bytes</p>";
            echo "<p>File type: " . mime_content_type($file) . "</p>";
            echo "<p>Last modified: " . date("F d Y H:i:s", filemtime($file)) . "</p>";
        } else {
            echo "<p>❌ File does not exist</p>";
        }
        ?>
    </div>
    
    <p><a href="index.php">Return to login page</a></p>
</body>
</html> 