<?php
// Start output buffering
ob_start();
?>

    <!-- PAGE TITLE + WELCOME -->
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-green-800">Dashboard</h1>
        <!-- Example: Quick Link to Profile -->
        <a
          href="#"
          class="inline-flex items-center text-sm text-green-700 hover:underline"
        >
          <i class="fa-solid fa-user mr-1"></i>Profile Settings
        </a>
      </div>
      <p class="text-gray-600">
        Welcome to your JJ Turfs customer portal. Here you can manage your lawn care schedules,
        track billing, and more. Your role(s) determine what features you can access below.
      </p>

      
  
<!-- ADDITIONAL DASHBOARD SECTIONS (All Users) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-start">
    <!-- 1) BILLING & AGING SUMMARY -->
    <div class="bg-white p-4 rounded shadow border border-green-200 h-full flex flex-col">
      <h2 class="text-xl font-bold text-green-800 mb-4">Billing & Aging Summary</h2>
  
      <!-- Two-Column Layout on MD+ screens -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 flex-1">
        <!-- Left Column: Basic Billing Overview -->
        <div>
          <h3 class="text-lg font-semibold text-green-800 mb-2">Billing Overview</h3>
          <div class="flex items-center justify-between text-sm text-gray-700 mb-2">
            <span>Outstanding Balance:</span>
            <span class="font-bold text-red-600">$125.00</span>
          </div>
          <div class="flex items-center justify-between text-sm text-gray-700 mb-2">
            <span>Next Invoice Date:</span>
            <span class="font-bold">Mar 1, 2025</span>
          </div>
          <div class="flex items-center justify-between text-sm text-gray-700">
            <span>Last Payment:</span>
            <span>Feb 1, 2025 - <em class="text-green-600">Processed</em></span>
          </div>
        </div>
  
        <!-- Right Column: Aging Summary -->
        <div>
          <h3 class="text-lg font-semibold text-green-800 mb-2">Aging Details</h3>
          <div class="space-y-2 text-sm">
            <div class="flex items-center justify-between">
              <span class="font-medium text-gray-700">Outstanding Balance:</span>
              <span class="font-bold text-blue-600">$0.00</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="font-medium text-gray-700">Paid:</span>
              <span class="font-bold text-green-600">$0.00</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="font-medium text-gray-700">Credit:</span>
              <span class="font-bold text-purple-600">$0.00</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="font-medium text-gray-700">Past Due:</span>
              <span class="font-bold text-red-600">$0.00</span>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Single Set of Action Buttons for Both Columns -->
      <div class="mt-4 flex flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0">
        <button
          class="flex-1 py-2 bg-green-700 text-white rounded-md hover:bg-green-800 transition-colors
                 text-sm flex items-center justify-center"
        >
          <i class="fa-solid fa-credit-card mr-2"></i>Make Payment
        </button>
        <button
          class="flex-1 py-2 bg-gray-100 text-green-700 border border-green-700 rounded-md
                 hover:bg-gray-200 transition-colors text-sm flex items-center justify-center"
        >
          <i class="fa-solid fa-file-invoice mr-2"></i>View Statement
        </button>
      </div>
    </div>
    <!-- END BILLING & AGING SUMMARY -->
  
    <!-- 2) UPCOMING JOBS & VISITS -->
    <div class="bg-white p-4 rounded shadow border border-green-200 h-full flex flex-col">
      <h2 class="text-xl font-bold text-green-800 mb-4">Upcoming Jobs & Visits</h2>
      <ul class="space-y-3 text-sm text-gray-700 flex-1">
        <li class="flex items-center justify-between border-b pb-2">
          <div>
            <span class="block font-medium text-green-800">Mowing</span>
            <span class="text-gray-600">Mar 10, 2025 • 9:00 AM</span>
          </div>
          <button class="text-green-700 hover:underline">
            Details
          </button>
        </li>
        <li class="flex items-center justify-between border-b pb-2">
          <div>
            <span class="block font-medium text-green-800">Fertilizer Application</span>
            <span class="text-gray-600">Mar 15, 2025 • 11:00 AM</span>
          </div>
          <button class="text-green-700 hover:underline">
            Reschedule
          </button>
        </li>
        <li class="flex items-center justify-between">
          <div>
            <span class="block font-medium text-green-800">Weed Treatment</span>
            <span class="text-gray-600">Mar 20, 2025 • 2:00 PM</span>
          </div>
          <button class="text-green-700 hover:underline">
            Details
          </button>
        </li>
      </ul>
      <div class="mt-4 text-right">
        <a
          href="#"
          class="inline-block py-2 px-4 bg-green-700 text-white rounded-md hover:bg-green-800 transition-colors text-sm"
        >
          View All Visits
        </a>
      </div>
    </div>
    <!-- END UPCOMING JOBS -->
  
    <!-- 3) MESSAGES & NOTICES (Takes 2 columns on MD+ screens) -->
    <div class="bg-white p-4 rounded shadow border border-green-200 h-full flex flex-col md:col-span-2">
      <h2 class="text-lg font-semibold text-green-800 mb-2">Messages &amp; Notices</h2>
      <ul class="space-y-2 text-sm text-gray-700 flex-1">
        <li class="border-b pb-2">
          <span class="font-medium text-green-800">Feb 25:</span>
          Lawn fertilization service is being rescheduled due to weather conditions.
        </li>
        <li class="border-b pb-2">
          <span class="font-medium text-green-800">Feb 20:</span>
          Reminder: Rent due March 1 for in-house tenants.
        </li>
      </ul>
      <a
        href="#"
        class="text-green-700 hover:underline mt-2 inline-block text-sm"
      >
        View All Messages
      </a>
    </div>
  </div>
  
  
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

<!-- A single lawn-care property card (place within a grid if needed) -->
<div class="group relative bg-white rounded-md shadow border border-green-200 flex flex-col overflow-hidden w-72">
    <!-- Top: Fixed-Height Container -->
    <div class="relative w-full h-40 bg-gray-100 overflow-hidden">
      <!-- Real Image (if available) -->
      <!--
      <img 
        src="https://via.placeholder.com/400x200" 
        alt="Property Image" 
        class="w-full h-full object-cover"
      />
      -->
  
      <!-- Fallback Icon if no image -->
      <div class="absolute inset-0 flex items-center justify-center">
        <i class="fa-solid fa-house text-green-600 text-6xl"></i>
      </div>
  
      <!-- HOVER OVERLAY: White cover with additional actions/info -->
      <div
        class="absolute inset-0 bg-white bg-opacity-0 
               opacity-0 group-hover:bg-opacity-90 group-hover:opacity-100
               transition duration-300 ease-in-out flex flex-col justify-center items-center space-y-2 px-4 text-center"
      >
        <p class="text-green-800 text-sm font-semibold">
          <i class="fa-solid fa-seedling mr-1"></i>
          Fertilizer Program Active
        </p>
        <p class="text-green-800 text-sm">
          <i class="fa-solid fa-tractor mr-1"></i>
          Edging &amp; Weed Control
        </p>
        <div class="flex space-x-3 mt-3">
          <a
            href="#"
            class="bg-green-700 text-white px-3 py-2 rounded-md text-xs 
                   hover:bg-green-800 transition-colors flex items-center"
          >
            <i class="fa-solid fa-leaf mr-1"></i> Modify Service
          </a>
          <a
            href="#"
            class="border border-green-700 text-green-700 px-3 py-2 rounded-md text-xs 
                   hover:bg-green-50 transition-colors flex items-center"
          >
            <i class="fa-solid fa-ban mr-1"></i> Cancel Visit
          </a>
        </div>
      </div>
    </div>
  
    <!-- Middle: Property Details -->
    <div class="p-4 flex-1 flex flex-col">
      <h3 class="text-lg font-semibold text-green-800">1234 Green Street</h3>
      <p class="text-gray-600 text-sm mt-1">
        Service: <strong>Weekly Mowing</strong>
      </p>
      <p class="text-gray-600 text-sm">
        Next Visit: <strong>Mar 10, 2025 @ 9:00 AM</strong>
      </p>
    </div>
  
    <!-- Bottom: Quick Actions -->
    <div
      class="border-t border-green-100 p-4 transition-colors
             bg-white group-hover:bg-green-50 flex space-x-4 items-center"
    >
      <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
        <i class="fa-solid fa-eye mr-1"></i>View
      </a>
      <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
        <i class="fa-solid fa-handshake-angle mr-1"></i>Request Service
      </a>
    </div>
  </div>
     <!-- LANDLORD MANAGEMENT CARD -->
     <div class="group relative bg-white rounded-md shadow border border-green-200 flex flex-col overflow-hidden">
        <!-- Top: Icon or Image (fixed height) -->
        <div class="relative w-full h-40 bg-gray-100 flex items-center justify-center">
          <!-- Icon fallback -->
          <i class="fa-solid fa-user-tie text-green-600 text-6xl"></i>
          <!-- If you have an image, swap out the above <i> for:
          <img 
            src="some-landlord-image.jpg" 
            alt="Landlord Management" 
            class="absolute inset-0 w-full h-full object-cover"
          />
          -->
          <!-- Hover Overlay -->
          <div
            class="absolute inset-0 bg-white bg-opacity-0 
                   opacity-0 group-hover:bg-opacity-90 group-hover:opacity-100
                   transition duration-300 ease-in-out flex flex-col justify-center items-center space-y-2 px-4 text-center"
          >
            <p class="text-green-800 text-sm font-semibold">
              <i class="fa-solid fa-user-friends mr-1"></i> Manage Tenants
            </p>
            <p class="text-green-800 text-sm">
              <i class="fa-solid fa-chart-line mr-1"></i> View Property Analytics
            </p>
            <div class="flex space-x-3 mt-3">
              <a
                href="#"
                class="bg-green-700 text-white px-3 py-2 rounded-md text-xs 
                       hover:bg-green-800 transition-colors flex items-center"
              >
                <i class="fa-solid fa-calendar-check mr-1"></i> Schedule Maintenance
              </a>
              <a
                href="#"
                class="border border-green-700 text-green-700 px-3 py-2 rounded-md text-xs 
                       hover:bg-green-50 transition-colors flex items-center"
              >
                <i class="fa-solid fa-coins mr-1"></i> Rent &amp; Billing
              </a>
            </div>
          </div>
        </div>
        <!-- Middle: Brief Description -->
        <div class="p-4 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-green-800">Landlord Management</h3>
          <p class="text-gray-600 text-sm mt-1">
            Manage tenant details, schedule property maintenance, and view property analytics.
          </p>
        </div>
        <!-- Bottom: Quick Actions -->
        <div
          class="border-t border-green-100 p-4 transition-colors
                 bg-white group-hover:bg-green-50 flex flex-wrap gap-4 items-center"
        >
          <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
            <i class="fa-solid fa-user-friends mr-1"></i> View Tenant List
          </a>
          <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
            <i class="fa-solid fa-calendar-check mr-1"></i> Schedule Maintenance
          </a>
          <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
            <i class="fa-solid fa-coins mr-1"></i> Rent &amp; Billing
          </a>
          <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
            <i class="fa-solid fa-chart-line mr-1"></i> Property Analytics
          </a>
        </div>
      </div>
 
  
    <!-- IN-HOUSE TENANT CARD -->
    <div class="group relative bg-white rounded-md shadow border border-green-200 flex flex-col overflow-hidden">
      <!-- Top: Icon or Image (fixed height) -->
      <div class="relative w-full h-40 bg-gray-100 flex items-center justify-center">
        <!-- Icon fallback -->
        <i class="fa-solid fa-user-house text-green-600 text-6xl"></i>
        <!-- If you have an image, swap the above <i> for:
        <img 
          src="some-inhouse-tenant-image.jpg" 
          alt="In-House Tenant" 
          class="absolute inset-0 w-full h-full object-cover"
        />
        -->
        <!-- Hover Overlay -->
        <div
          class="absolute inset-0 bg-white bg-opacity-0 
                 opacity-0 group-hover:bg-opacity-90 group-hover:opacity-100
                 transition duration-300 ease-in-out flex flex-col justify-center items-center space-y-2 px-4 text-center"
        >
          <p class="text-green-800 text-sm font-semibold">
            <i class="fa-solid fa-file-contract mr-1"></i> Lease Details
          </p>
          <p class="text-green-800 text-sm">
            <i class="fa-solid fa-comment-dots mr-1"></i> Contact Management
          </p>
          <div class="flex space-x-3 mt-3">
            <a
              href="#"
              class="bg-green-700 text-white px-3 py-2 rounded-md text-xs 
                     hover:bg-green-800 transition-colors flex items-center"
            >
              <i class="fa-solid fa-money-bill-wave mr-1"></i> Pay Rent
            </a>
            <a
              href="#"
              class="border border-green-700 text-green-700 px-3 py-2 rounded-md text-xs 
                     hover:bg-green-50 transition-colors flex items-center"
            >
              <i class="fa-solid fa-leaf mr-1"></i> Request Lawn Service
            </a>
          </div>
        </div>
      </div>
      <!-- Middle: Brief Description -->
      <div class="p-4 flex-1 flex flex-col">
        <h3 class="text-lg font-semibold text-green-800">In-House Tenant</h3>
        <p class="text-gray-600 text-sm mt-1">
          You rent directly from JJ Turfs. View your lease details, pay rent, request lawn-care services,
          or contact management.
        </p>
      </div>
      <!-- Bottom: Quick Actions -->
      <div
        class="border-t border-green-100 p-4 transition-colors
               bg-white group-hover:bg-green-50 flex flex-wrap gap-4 items-center"
      >
        <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
          <i class="fa-solid fa-file-contract mr-1"></i> View Lease Agreement
        </a>
        <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
          <i class="fa-solid fa-money-bill-wave mr-1"></i> Pay Rent
        </a>
        <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
          <i class="fa-solid fa-leaf mr-1"></i> Request Lawn Service
        </a>
        <a href="#" class="text-green-700 hover:underline text-sm flex items-center">
          <i class="fa-solid fa-comment-dots mr-1"></i> Contact Management
        </a>
      </div>
    </div>
  

  </div>

<?php
// Capture the buffered content into a variable
$content = ob_get_clean();

// Set dynamic header and page title values
$headerIcon = 'fa-tachometer-alt'; // Example: Dashboard icon
$headerTitle = 'Dashboard';        // Example: Dashboard title
$pageTitle = 'Dashboard - MyApp';  // Example: Page title for the browser tab

// Include the global layout file and pass the content and variables to it
include __DIR__ . '/Layouts/Customer.php';
?>
