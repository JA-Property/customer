<?php
// Start output buffering
ob_start();
?>

<!-- View-specific content -->
<div class="flex flex-col p-4">
  <h1 class="text-2xl font-bold">This is the Individual View</h1>
  <p class="mt-2">This is some dynamic content for the view.</p>
</div>

<?php
// Capture the buffered content into a variable
$content = ob_get_clean();

// Set dynamic header and page title values
$headerIcon = 'fa-tachometer-alt'; // Example: Dashboard icon
$headerTitle = 'Dashboard'; // Example: Dashboard title
$pageTitle = 'Dashboard - MyApp'; // Example: Page title for the browser tab

// Include the global layout file and pass the content and variables to it
include __DIR__ . '/Layouts/Staff.php';
?>