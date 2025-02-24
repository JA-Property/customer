<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JJ Turfs - Customer Portal Dashboard</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <style>
    /* Demo utility classes */
    .role-badge {
      background-color: rgba(34,197,94, 0.1); /* green-500 with slight opacity */
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- TOP NAVBAR -->
  <header class="bg-green-700 text-white px-4 py-3 flex items-center justify-between shadow">
    <!-- Brand -->
    <div class="flex items-center space-x-2">
      <i class="fa-solid fa-leaf text-2xl"></i>
      <span class="font-bold text-xl">JJ Turfs</span>
    </div>
    <!-- User Menu (Placeholder) -->
    <div class="relative">
      <button class="flex items-center space-x-2 focus:outline-none">
        <img 
          src="https://via.placeholder.com/32" 
          alt="User Avatar" 
          class="w-8 h-8 rounded-full"
        />
        <span class="hidden sm:inline">JaneSmith</span>
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <!-- Example dropdown menu -->
      <!--
      <div class="absolute right-0 mt-2 w-48 bg-white text-green-700 rounded shadow hidden">
        <a href="#" class="block px-4 py-2 hover:bg-green-50">Profile</a>
        <a href="#" class="block px-4 py-2 hover:bg-green-50">Logout</a>
      </div>
      -->
    </div>
  </header>

  <!-- MAIN LAYOUT (Sidebar + Dashboard Content) -->
  <div class="flex flex-1">

<!-- GLOBAL SIDEBAR with Tooltips -->
<nav class="w-20 bg-white border-r border-gray-200 flex flex-col items-center py-4">
  
    <!-- Dashboard Icon & Tooltip -->
    <div class="group relative mb-6">
      <a href="#"
         class="p-2 text-green-700 hover:bg-green-100 rounded-md transition-colors"
         >
        <i class="fa-solid fa-house text-xl"></i>
      </a>
      <!-- Tooltip -->
      <div class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2 
                  whitespace-nowrap bg-green-700 text-white text-xs 
                  rounded px-2 py-1 opacity-0 group-hover:opacity-100 
                  pointer-events-none shadow-lg transition">
        Dashboard
        <!-- Arrow pointing left -->
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-full
                    w-0 h-0 border-t-4 border-b-4 border-r-4
                    border-r-green-700 border-t-transparent border-b-transparent">
        </div>
      </div>
    </div>
    
    <!-- Scheduling Icon & Tooltip -->
    <div class="group relative mb-6">
      <a href="#"
         class="p-2 text-gray-700 hover:bg-gray-100 rounded-md transition-colors">
        <i class="fa-solid fa-calendar-check text-xl"></i>
      </a>
      <!-- Tooltip -->
      <div class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2 
                  whitespace-nowrap bg-green-700 text-white text-xs 
                  rounded px-2 py-1 opacity-0 group-hover:opacity-100
                  pointer-events-none shadow-lg transition">
        Scheduling
        <!-- Arrow -->
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-full
                    w-0 h-0 border-t-4 border-b-4 border-r-4
                    border-r-green-700 border-t-transparent border-b-transparent">
        </div>
      </div>
    </div>
  
    <!-- Billing Icon & Tooltip -->
    <div class="group relative mb-6">
      <a href="#"
         class="p-2 text-gray-700 hover:bg-gray-100 rounded-md transition-colors">
        <i class="fa-solid fa-credit-card text-xl"></i>
      </a>
      <!-- Tooltip -->
      <div class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2 
                  whitespace-nowrap bg-green-700 text-white text-xs 
                  rounded px-2 py-1 opacity-0 group-hover:opacity-100 
                  pointer-events-none shadow-lg transition">
        Billing
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-full
                    w-0 h-0 border-t-4 border-b-4 border-r-4
                    border-r-green-700 border-t-transparent border-b-transparent">
        </div>
      </div>
    </div>
  
    <!-- Messages Icon & Tooltip -->
    <div class="group relative mb-6">
      <a href="#"
         class="p-2 text-gray-700 hover:bg-gray-100 rounded-md transition-colors">
        <i class="fa-solid fa-envelope text-xl"></i>
      </a>
      <!-- Tooltip -->
      <div class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2 
                  whitespace-nowrap bg-green-700 text-white text-xs 
                  rounded px-2 py-1 opacity-0 group-hover:opacity-100 
                  pointer-events-none shadow-lg transition">
        Messages
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-full
                    w-0 h-0 border-t-4 border-b-4 border-r-4
                    border-r-green-700 border-t-transparent border-b-transparent">
        </div>
      </div>
    </div>
    
    <!-- Properties Icon & Tooltip -->
    <div class="group relative">
      <a href="#"
         class="p-2 text-gray-700 hover:bg-gray-100 rounded-md transition-colors">
        <i class="fa-solid fa-building text-xl"></i>
      </a>
      <!-- Tooltip -->
      <div class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2 
                  whitespace-nowrap bg-green-700 text-white text-xs 
                  rounded px-2 py-1 opacity-0 group-hover:opacity-100 
                  pointer-events-none shadow-lg transition">
        Properties
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-full
                    w-0 h-0 border-t-4 border-b-4 border-r-4
                    border-r-green-700 border-t-transparent border-b-transparent">
        </div>
      </div>
    </div>
  
  </nav>
  

    <!-- DASHBOARD CONTENT WRAPPER -->
    <main class="flex-1 p-6 space-y-6 overflow-y-auto">
    <?php echo $content; ?> <!-- Inject the dynamic content here -->

  
    </main>
    <!-- END DASHBOARD CONTENT WRAPPER -->

  </div>
  <!-- END MAIN LAYOUT -->

  <!-- FOOTER -->
  <footer class="bg-green-700 text-white py-3 text-center text-sm mt-auto">
    &copy; 2025 JJ Turfs. All rights reserved.
  </footer>

</body>
</html>
