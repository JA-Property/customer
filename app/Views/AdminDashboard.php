<?php
// Start output buffering
ob_start();
?>

<!-- View-specific content -->
<div class="flex flex-col p-4 space-y-6">
  <h1 class="text-3xl font-bold">This is the Individual View</h1>
  <p class="text-gray-600">Below is an example layout with some dummy data showcasing various widgets and sections.</p>

  <!-- BEGIN: High-Level Overview Cards -->
  <section class="mt-4">
    <h2 class="text-xl font-semibold mb-2">High-Level Overview Cards</h2>

    <!-- KPIs -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <div class="bg-white shadow p-4 rounded">
        <h3 class="font-bold text-gray-700">Total Jobs</h3>
        <p class="text-2xl font-semibold text-blue-600">120</p>
        <p class="text-gray-400 text-sm">Completed: 90 | In-progress: 20 | Pending: 10</p>
      </div>
      <div class="bg-white shadow p-4 rounded">
        <h3 class="font-bold text-gray-700">Revenue (This Month)</h3>
        <p class="text-2xl font-semibold text-green-600">$24,500</p>
        <p class="text-gray-400 text-sm">Daily Avg: $820</p>
      </div>
      <div class="bg-white shadow p-4 rounded">
        <h3 class="font-bold text-gray-700">Customer Satisfaction</h3>
        <p class="text-2xl font-semibold text-purple-600">4.6 / 5</p>
        <p class="text-gray-400 text-sm">Based on 230 reviews</p>
      </div>
      <div class="bg-white shadow p-4 rounded">
        <h3 class="font-bold text-gray-700">Average Job Duration</h3>
        <p class="text-2xl font-semibold text-indigo-600">2.3 hrs</p>
        <p class="text-gray-400 text-sm">Per Technician</p>
      </div>
    </div>

    <!-- Alerts & Notifications -->
    <div class="mt-6">
      <h3 class="text-lg font-bold text-gray-700">Alerts & Notifications</h3>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li><strong>Maintenance:</strong> Vehicle #12 requires oil change in 2 days.</li>
        <li><strong>Equipment:</strong> Lawn mower blades running low in inventory.</li>
        <li><strong>Support Ticket:</strong> Ticket #435 is unresolved for 3 days.</li>
      </ul>
    </div>
  </section>
  <!-- END: High-Level Overview Cards -->

  <!-- BEGIN: Scheduling & Task Management -->
  <section>
    <h2 class="text-xl font-semibold mb-2">Scheduling & Task Management</h2>
    
    <!-- Calendar/Scheduling Widget (Placeholder) -->
    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Calendar/Scheduling Widget</h3>
      <p class="text-gray-600 text-sm">
        <em>Dummy calendar display here...</em>  
      </p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Daily/weekly calendar view for appointments, job assignments, and service windows</li>
        <li>Drag-and-drop functionality for reassignments</li>
      </ul>
    </div>

    <!-- Job/Task List -->
    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Job/Task List</h3>
      <p class="text-gray-600 text-sm">
        <em>Some active jobs displayed here...</em>
      </p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Detailed list of active jobs with status updates and due dates</li>
        <li>Filters for service type (field service, lawn care, property management)</li>
      </ul>
      <div class="mt-2">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr>
              <th class="border-b py-2">Job ID</th>
              <th class="border-b py-2">Type</th>
              <th class="border-b py-2">Status</th>
              <th class="border-b py-2">Due Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 border-b">#101</td>
              <td class="py-2 border-b">Lawn Care</td>
              <td class="py-2 border-b">In-Progress</td>
              <td class="py-2 border-b">Mar 25</td>
            </tr>
            <tr>
              <td class="py-2 border-b">#102</td>
              <td class="py-2 border-b">Repair</td>
              <td class="py-2 border-b">Pending</td>
              <td class="py-2 border-b">Mar 26</td>
            </tr>
            <tr>
              <td class="py-2 border-b">#103</td>
              <td class="py-2 border-b">Maintenance</td>
              <td class="py-2 border-b">Completed</td>
              <td class="py-2 border-b">Mar 24</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- END: Scheduling & Task Management -->

  <!-- BEGIN: Location & Mapping Tools -->
  <section>
    <h2 class="text-xl font-semibold mb-2">Location & Mapping Tools</h2>

    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Interactive Map (Placeholder)</h3>
      <p class="text-gray-600"><em>Map displaying real-time GPS tracking here...</em></p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Real-time GPS tracking of technicians or service vehicles</li>
        <li>Job location markers with quick view details</li>
      </ul>
    </div>

    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Route Optimization</h3>
      <p class="text-gray-600"><em>Optimized route suggestions displayed here...</em></p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Suggested routes for upcoming jobs to reduce travel time</li>
      </ul>
    </div>
  </section>
  <!-- END: Location & Mapping Tools -->

  <!-- BEGIN: Detailed Analytics & Trends -->
  <section>
    <h2 class="text-xl font-semibold mb-2">Detailed Analytics & Trends</h2>
    
    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Financial Charts</h3>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Revenue trends over time (Line chart placeholder)</li>
        <li>Profit margins by service category (Bar chart placeholder)</li>
      </ul>
    </div>

    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Service Performance Charts</h3>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Pie chart: Job types (Maintenance 35%, Repair 45%, Lawn Care 20%)</li>
        <li>Bar graph: Technician performance over time (Placeholder)</li>
      </ul>
    </div>

    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Customer Feedback Trends</h3>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Aggregated review scores (Last month: 4.5, This month: 4.6)</li>
        <li>Satisfaction trends (Chart placeholder)</li>
      </ul>
    </div>
  </section>
  <!-- END: Detailed Analytics & Trends -->

  <!-- BEGIN: Operational Metrics & Reports -->
  <section>
    <h2 class="text-xl font-semibold mb-2">Operational Metrics & Reports</h2>

    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Work Order Details</h3>
      <p class="text-gray-600"><em>Summary of pending/overdue jobs here...</em></p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Pending Work Orders: 8</li>
        <li>Overdue Tasks: 3</li>
        <li>Recently Completed Jobs: 15</li>
      </ul>
    </div>

    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Resource Management</h3>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Inventory levels (e.g., Lawn fertilizer: 20 bags left, Screws: 1,000 left)</li>
        <li>Staff utilization reports (Average 32 hrs/week vs. scheduled 40 hrs)</li>
      </ul>
    </div>
  </section>
  <!-- END: Operational Metrics & Reports -->

  <!-- BEGIN: Other Functional Widgets -->
  <section>
    <h2 class="text-xl font-semibold mb-2">Other Functional Widgets</h2>

    <div class="bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Weather Widget</h3>
      <p class="text-gray-600"><em>Local weather data fetched here...</em></p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Today's Forecast: Sunny, High 72°F</li>
        <li>Tomorrow's Forecast: Partly Cloudy, High 68°F</li>
      </ul>
    </div>
    
    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Live Chat or Communication Feed</h3>
      <p class="text-gray-600"><em>Chat interface with field teams here...</em></p>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>Technician 1: <em>"Checking in at customer's location"</em></li>
        <li>Dispatcher: <em>"Make sure to confirm inventory after the job"</em></li>
      </ul>
    </div>

    <div class="mt-4 bg-white p-4 rounded shadow">
      <h3 class="font-bold text-gray-700">Announcements/Company News Feed</h3>
      <ul class="list-disc list-inside text-gray-600 mt-2">
        <li>New Policy: Safety training updates will be mandatory starting April 1st.</li>
        <li>Team Outing: Company picnic scheduled for May 5th.</li>
      </ul>
    </div>
  </section>
  <!-- END: Other Functional Widgets -->
</div>

<?php
// Capture the buffered content into a variable
$content = ob_get_clean();

// Set dynamic header and page title values
$headerIcon = 'fa-tachometer-alt'; // Example: Dashboard icon
$headerTitle = 'Dashboard';        // Example: Dashboard title
$pageTitle = 'Dashboard - MyApp';  // Example: Page title for the browser tab

// Include the global layout file and pass the content and variables to it
include __DIR__ . '/Layouts/Staff.php';
?>
