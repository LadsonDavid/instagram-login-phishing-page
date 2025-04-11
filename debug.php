<?php
// Debug page for testing image loading
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug Images</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            color: #262626;
        }
        .image-test {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
        }
        .image-container {
            margin: 10px 0;
        }
        img {
            max-width: 100%;
            border: 1px dashed #ccc;
            padding: 5px;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .failure {
            color: red;
            font-weight: bold;
        }
        pre {
            background: #f5f5f5;
            padding: 10px;
            overflow: auto;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Image Loading Debug Page</h1>
    <p>This page tests various images used in the Instagram login page to ensure they load correctly.</p>
    
    <div class="image-test">
        <h2>Instagram Logo</h2>
        <div class="image-container">
            <p>Direct URL:</p>
            <img src="https://static.cdninstagram.com/rsrc.php/v3/y-/r/yXM3FgMdVNX.png" alt="Instagram Logo (Direct URL)">
        </div>
    </div>
    
    <div class="image-test">
        <h2>Google Play Badge</h2>
        <div class="image-container">
            <p>Direct URL:</p>
            <img src="https://static.cdninstagram.com/rsrc.php/v3/yt/r/Yfc020c87j0.png" alt="Google Play Badge (Direct URL)">
        </div>
    </div>
    
    <div class="image-test">
        <h2>Microsoft Store Badge</h2>
        <div class="image-container">
            <p>Direct URL:</p>
            <img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Microsoft Store Badge (Direct URL)">
        </div>
    </div>
    
    <div class="image-test">
        <h2>Instagram Phones Image</h2>
        <div class="image-container">
            <p>Local path:</p>
            <img src="assets/instagram-phones.png" alt="Instagram Phones" onerror="this.nextElementSibling.style.display='block'; this.style.display='none';">
            <p style="display:none;" class="failure">❌ Local image failed to load. Using fallback image instead:</p>
            <img src="https://www.instagram.com/static/images/homepage/phones/home-phones.png/1dc085cdb87d.png" alt="Instagram Phones (Fallback)">
        </div>
    </div>
    
    <h2>Browser Information</h2>
    <pre id="browserInfo">JavaScript is disabled or not supported.</pre>
    
    <script>
        // Display browser information
        document.getElementById('browserInfo').textContent = 
            'User Agent: ' + navigator.userAgent + '\n' +
            'Browser: ' + navigator.appName + '\n' +
            'Version: ' + navigator.appVersion + '\n' +
            'Platform: ' + navigator.platform;
            
        // Function to check image loading
        function checkImageLoading() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.onload = function() {
                    const status = document.createElement('p');
                    status.className = 'success';
                    status.textContent = '✓ Image loaded successfully';
                    this.parentNode.appendChild(status);
                };
                img.onerror = function() {
                    if (!this.getAttribute('onerror')) {
                        const status = document.createElement('p');
                        status.className = 'failure';
                        status.textContent = '❌ Image failed to load';
                        this.parentNode.appendChild(status);
                    }
                };
            });
        }
        
        window.onload = checkImageLoading;
    </script>
    
    <p><a href="index.php">Return to Login Page</a></p>
</body>
</html> 