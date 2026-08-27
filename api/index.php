<?php
// Check if cURL is enabled and test a request
if (function_exists('curl_version')) {
    echo "✅ cURL is enabled! Version: " . curl_version()['version'] . "\n";
    
    // Example: Make a test request to a public API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.github.com/zen");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Vercel-PHP-Setup');
    
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);
    
    if ($response) {
        echo "Test API call successful: " . $response;
    } else if ($error) {
        echo "cURL error: " . $error;
    }
} else {
    echo "❌ cURL is NOT enabled.";
}
