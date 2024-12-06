<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex h-screen">
    <aside class="w-64 bg-gray-800 text-white flex flex-col">
        <div class="text-center p-4 text-2xl font-bold bg-gray-900">
            Admin
        </div>
        <nav class="flex-grow mt-4">
            <ul>
                <li class="hover:bg-gray-700">
                    <a href="./dashboard" class="block px-4 py-2">Dashboard</a>
                </li>
                <li class="hover:bg-gray-700">
                    <a href="./booking" class="block px-4 py-2">Bookings</a>
                </li>
                <li class="hover:bg-gray-700">
                    <a href="./history" class="block px-4 py-2">History</a>
                </li>
            </ul>
        </nav>
        <div class="p-4 bg-gray-900">
            <a href="#" class="block text-center text-red-500">Logout</a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow">
        <!-- Header -->
        <header class="bg-white shadow-md p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Dashboard</h1>
            <div class="flex items-center space-x-4">
                <span>Welcome, Admin</span>
                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Logout</button>
            </div>
        </header>

        <!-- Content -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Cards -->
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h2 class="text-lg font-bold">Total Bookings</h2>
                    <p class="text-2xl font-semibold mt-2">45</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h2 class="text-lg font-bold">Table 1</h2>
                    <p class="text-2xl font-semibold mt-2">10</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h2 class="text-lg font-bold">Table 2</h2>
                    <p class="text-2xl font-semibold mt-2">10</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-md">
                    <h2 class="text-lg font-bold">VIP</h2>
                    <p class="text-2xl font-semibold mt-2">15</p>
                </div>
            </div>

            <div class="lg:col-span-2 mt-8 bg-white shadow rounded-lg p-4 md:p-6">
            <h2 class="text-lg md:text-xl font-semibold mb-4">Latest Book Preview</h2>
            <div class="overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-gray-500 text-xs md:text-sm">
                    <th class="px-2 md:px-4 py-2 text-left">Regist Code</th>
                    <th class="px-2 md:px-4 py-2 text-left">Name</th>
                    <th class="px-2 md:px-4 py-2 text-left">Email</th>
                    <th class="px-2 md:px-4 py-2 text-left">Phone</th>
                    <th class="px-2 md:px-4 py-2 text-left">Date</th>
                  </tr>
                </thead>
                <tbody>
                        <td class="px-2 md:px-4 py-2">A01</td>
                        <td class="px-2 md:px-4 py-2">Ivan</td>
                        <td class="px-2 md:px-4 py-2">ivan@gmail.com</td>
                        <td class="px-2 md:px-4 py-2">082298136201</td>
                        <td class="px-2 md:px-4 py-2">2024-07-09</td>
                </tbody>
              </table>
            </div>
        </main>
    </div>
</div>

</body>
</html>
