<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Booking</title>
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
            <h1 class="text-xl font-bold">Booking</h1>
            <div class="flex items-center space-x-4">
                <span>Welcome, Admin</span>
                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Logout</button>
            </div>
        </header>
        
        <!-- Filter Form -->
        <form id="filterForm" action="" method="get" class="flex items-center my-4 ms-4">
          <label for="kategori" class="text-sm font-bold text-primary">Filter Kategori:</label>
          <select name="kategori" id="kategori" class="ml-2 border-2 border-primary text-primary rounded-md shadow-sm">
            <option value="">All Tables</option>
            <option value="Perintis Lingkungan" >Table 1</option>
            <option value="Pengabdi Lingkungan" >Table 2</option>
            <option value="Penyelamat Lingkungan" >VIP</option>
          </select>
        </form>

        <!-- Table -->
        <table class="w-full mt-4 text-left table-auto min-w-max">
          <thead>
            <tr>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">No</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Reg Code</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Name</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Email</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Phone</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Date</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Time</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Amount</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Payment</p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50 hover:bg-slate-100 text-center">
                <p class="block text-xs md:text-sm font-bold leading-none text-slate-800">Delete</p>
              </th>
            </tr>
          </thead>
          <tbody>
              <tr class="hover:bg-slate-100">
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">01</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">A01</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">Ivan</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">ivan@gmail.com</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">082298136201</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">12/6/2024</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">9.00 - 11.00</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">100.000</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                    <p class="block text-xs text-slate-800">Photo</p>
                  </td>
                  <td class="p-4 border-b border-slate-200 text-center">
                                <button type="submit" class="text-red-600 item-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                            </button>
                       
                    </td>
              </tr>
          </tbody>
        </table>

    </div>
</div>
</body>
</html>
