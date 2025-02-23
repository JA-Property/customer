<?php
// index.php - Entry point for the staff portal

// Include Composer's autoloader (handles PSR-4 autoloading)
require_once __DIR__ . '/vendor/autoload.php';

// Load environment variables from the .env file
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Before starting the session, configure cookie parameters
session_set_cookie_params([
    'lifetime' => 0,                // Session cookie persists until the browser is closed
    'path'     => '/',
    'domain'   => '.japropertysc.com', // Notice the leading dot for subdomain sharing
    'secure'   => true,             // Only send cookie over HTTPS
    'httponly' => true,             // Prevent JavaScript access to the cookie
    'samesite' => 'Lax'             // Adjust based on your needs (None, Lax, Strict)
]);

session_start();


// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Instead of invoking LoginController, redirect to the authentication portal
    header('Location: https://auth.japropertysc.com');
    exit;
}

// If logged in, check if the user is a customer
if (isset($_SESSION['user']['role']) && $_SESSION['user']['role'] === 'customer') {
    // Redirect customers to the customer portal
    header('Location: https://customer.japropertysc.com');
    exit;
}

// Otherwise, assume the user is a staff member and load the portal

// Retrieve the request URI (path only)
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route handling for the staff portal
switch ($request) {
    case '/':
    case '/dashboard':
        // Load the staff dashboard
        require __DIR__ . '/views/dashboard.php';
        break;
        
    case '/profile':
        // Load the staff profile page
        require __DIR__ . '/views/profile.php';
        break;
        
    case '/settings':
        // Load the staff settings page
        require __DIR__ . '/views/settings.php';
        break;
        
    default:
        // For undefined routes, send a 404 response
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>
