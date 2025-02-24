<?php
// index.php - Entry point for the staff portal


require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use App\Session\MySQLSessionHandler;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


// This must happen before session_start()
$cookieParams = session_get_cookie_params();
session_set_cookie_params([
    'lifetime' => $cookieParams['lifetime'],
    'path'     => '/',
    'domain'   => '.example.com', // <--- note the leading dot
    'secure'   => $cookieParams['secure'],
    'httponly' => $cookieParams['httponly'],
    // Optional, but if you’re doing cross-site requests, you may need SameSite=None
    'samesite' => 'None',         
]);

session_name('MYSESSIONID'); // Make sure both apps use the same session name
session_start();

// Check if the user is logged in (i.e. if the 'user' key exists in the session)
if (!isset($_SESSION['user'])) {
    // Redirect to the authentication portal if not logged in
    header('Location: https://auth.japropertysc.com');
    exit;
}

// If logged in, check if the user is admin or staff and redirect accordingly
if (
    isset($_SESSION['user']['role']) && 
    (
        $_SESSION['user']['role'] === 'admin' || 
        $_SESSION['user']['role'] === 'staff'
    )
) {
    header('Location: https://backoffice.japropertysc.com');
    exit;
}


// Retrieve the request URI (path only)
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route handling for the staff portal
switch ($request) {
    case '/':
    case '/dashboard':
        require __DIR__ . '/app/Views/CustomerDashboardView.php';
        break;

    // If you still want /profile and /settings routes, either create those files 
    // OR point them to the same or other custom views:
    case '/profile':
        require __DIR__ . '/app/Views/CustomerDashboardView.php';
        break;

    case '/settings':
        require __DIR__ . '/app/Views/CustomerDashboardView.php';
        break;
        
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}

?>
