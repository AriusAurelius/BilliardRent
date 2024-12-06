<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Meja Billiard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <!-- Link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Link ke library JS Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
<section id="book-now" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Booking Meja Billiard</h2>
        <form action="/book" method="POST" class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6" id="booking-form">
            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" id="name" name="name" required placeholder="Nama Anda" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" required placeholder="Email Anda" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Nomor Telepon</label>
                <input type="number" id="phone" name="phone" required placeholder="Nomor Telepon Anda" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <!-- Pilih Tanggal -->
            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-bold mb-2">Tanggal</label>
                <input type="text" id="tanggal" name="tanggal" required placeholder="Masukan Tanggal" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <!-- Pilihan Meja -->
            <div class="mb-4">
                <label for="table" class="block text-gray-700 font-bold mb-2">Pilih Meja</label>
                <select id="table" name="table" required class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                    <option value="" disabled selected>Choose Table</option> <!-- Pilihan default -->
                    <option value="Table A">Table A</option>
                    <option value="Table B">Table B</option>
                    <option value="VIP Table">VIP Table</option>
                </select>
            </div>
            <!-- Waktu -->
            <div class="mb-4">
                <label for="time" class="block text-gray-700 font-bold mb-2">Pilih Waktu</label>
                <div class="grid grid-cols-2 gap-4">
                    <div class="time-card bg-white p-4 rounded-lg shadow-lg cursor-pointer hover:bg-green-100" data-time="09:00-10:00">
                        <span class="block text-center text-lg font-semibold">09:00-10:00</span>
                    </div>
                    <div class="time-card bg-white p-4 rounded-lg shadow-lg cursor-pointer hover:bg-green-100" data-time="10:00-11:00">
                        <span class="block text-center text-lg font-semibold">10:00-11:00</span>
                    </div>
                    <div class="time-card bg-white p-4 rounded-lg shadow-lg cursor-pointer hover:bg-green-100" data-time="11:00-12:00">
                        <span class="block text-center text-lg font-semibold">11:00-12:00</span>
                    </div>
                    <div class="time-card bg-white p-4 rounded-lg shadow-lg cursor-pointer hover:bg-green-100" data-time="12:00-13:00">
                        <span class="block text-center text-lg font-semibold">12:00-13:00</span>
                    </div>
                    <div class="time-card bg-white p-4 rounded-lg shadow-lg cursor-pointer hover:bg-green-100" data-time="13:00-14:00">
                        <span class="block text-center text-lg font-semibold">13:00-14:00</span>
                    </div>
                    <div class="time-card bg-white p-4 rounded-lg shadow-lg cursor-pointer hover:bg-green-100" data-time="14:00-15:00">
                        <span class="block text-center text-lg font-semibold">14:00-15:00</span>
                    </div>
                </div>
            </div>
            <!-- Total -->
            <div class="mb-4">
                <label for="total" class="block text-gray-700 font-bold mb-2">Total</label>
                <input type="number" id="total" value="0" readonly class="w-full p-3 border rounded bg-gray-100 text-center focus:outline-none focus:ring-2 focus:ring-green-600">
                <p class="justify text-center mt-2 bg-yellow-200">Please input right nominal and send us the payment proof by screenshots</p>
            </div>

            <div class="mb-4 w-2/3 mx-auto">
                <img src="./images/qris.jpg">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Upload Transaction Screenshots</label>
                <input type="file" id="image" accept="image/*" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-green-600" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded w-full font-bold hover:bg-green-700">
                Submit
            </button>
        </form>
    </div>
</section>

<!-- Popup Notification -->
<div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h3 class="text-xl font-bold text-red-600">Error</h3>
        <p class="mt-2 text-gray-700">Silakan pilih meja terlebih dahulu.</p>
        <button id="close-popup" class="mt-4 bg-green-600 text-white px-6 py-2 rounded w-full hover:bg-green-700">
            Close
        </button>
    </div>
</div>

<div id="popupwaktu" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h3 class="text-xl font-bold text-red-600">Error</h3>
        <p class="mt-2 text-gray-700">Silakan pilih waktu terlebih dahulu.</p>
        <button id="closepopupwaktu" class="mt-4 bg-green-600 text-white px-6 py-2 rounded w-full hover:bg-green-700">
            Close
        </button>
    </div>
</div>




<script>
   const timeCards = document.querySelectorAll('.time-card');
   const totalInput = document.getElementById('total');
   const bookingForm = document.getElementById('booking-form');
   const popup = document.getElementById('popup');
   const popupwaktu = document.getElementById('popupwaktu');
   const closepopupwaktuButton = document.getElementById('closepopupwaktu');
   const closePopupButton = document.getElementById('close-popup');
   const tableSelect = document.getElementById('table');
   let selectedCards = 0; // Menyimpan jumlah kartu yang dipilih
   let pricePerSelection = 25000; // Harga default per pilihan

   // Update harga per meja
   tableSelect.addEventListener('change', function() {
       if (tableSelect.value === "VIP Table") {
           pricePerSelection = 50000; // Harga untuk VIP Table
       } else {
           pricePerSelection = 25000; // Harga untuk table lainnya
       }

       // Update total harga berdasarkan pilihan harga
       const totalPrice = selectedCards * pricePerSelection * 2; // Mengalikan total dengan 2
       totalInput.value = totalPrice.toLocaleString('id-ID'); // Format mata uang IDR
   });

   timeCards.forEach(card => {
       card.addEventListener('click', () => {
           if (tableSelect.value === "") {
               // Jika meja belum dipilih, tampilkan popup untuk memilih meja
               popup.classList.remove('hidden');
               return;
           }

           // Toggle pemilihan card
           card.classList.toggle('bg-green-100');
           card.classList.toggle('border');
           card.classList.toggle('border-green-500');

           // Update jumlah kartu yang dipilih
           if (card.classList.contains('bg-green-100')) {
               selectedCards++;
           } else {
               selectedCards--;
           }

           // Set harga total berdasarkan jumlah kartu yang dipilih
           const totalPrice = selectedCards * pricePerSelection * 2; // Mengalikan total dengan 2

           // Tampilkan total harga di input
           totalInput.value = totalPrice.toLocaleString('id-ID'); // Format mata uang IDR
       });
   });

   // Validasi form sebelum submit
   bookingForm.addEventListener('submit', function(event) {
       if (selectedCards === 0 ) {
           popupwaktu.classList.remove('hidden');  // Tampilkan popup jika meja atau waktu belum dipilih
           event.preventDefault();
       }
   });

   // Tutup popup
   closePopupButton.addEventListener('click', () => {
       popup.classList.add('hidden'); // Sembunyikan popup
   });

   closepopupwaktuButton.addEventListener('click', () => {
    popupwaktu.classList.add('hidden'); // Menyembunyikan popup
});

// Inisialisasi flatpickr untuk input dengan id 'tanggal'
flatpickr("#tanggal", {
    dateFormat: "d-m-Y", // Format: tanggal-bulan-tahun (contoh: 06-12-2024)
    locale: "id", // Menggunakan bahasa Indonesia
    altInput: true, // Menampilkan input alternatif yang lebih ramah pengguna
    altFormat: "d-m-Y", // Format alternatif
    allowInput: true, // Memungkinkan input manual
});

</script>

</body>
</html>
