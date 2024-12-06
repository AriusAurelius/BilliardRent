<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Meja Billiard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-green-600">BilliardMimin</a>
            <div>
                <a href="#features" class="text-gray-600 mx-2 hover:text-green-600">Feature</a>
                <a href="#pricing" class="text-gray-600 mx-2 hover:text-green-600">Table</a>
                <a href="./booktable" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('./images/billiard.jpg');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Booking Meja Billiard dengan Mudah</h1>
                <p class="text-lg md:text-xl mb-8">Temukan dan pesan meja billiard terbaik di dekat Anda.</p>
                <a href="./booktable" class="bg-green-600 text-white px-6 py-3 rounded text-lg hover:bg-green-700">Book Now</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Kenapa Pilih Kami?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-white shadow rounded">
                    <div class="text-green-600 text-4xl mb-4">🎱</div>
                    <h3 class="font-bold text-xl mb-2">Pilihan Tempat Terbaik</h3>
                    <p class="text-gray-600">Nikmati pengalaman bermain di tempat berkualitas tinggi.</p>
                </div>
                <div class="text-center p-6 bg-white shadow rounded">
                    <div class="text-green-600 text-4xl mb-4">📅</div>
                    <h3 class="font-bold text-xl mb-2">Proses Booking Cepat</h3>
                    <p class="text-gray-600">Pesan meja billiard dengan mudah dan cepat melalui website kami.</p>
                </div>
                <div class="text-center p-6 bg-white shadow rounded">
                    <div class="text-green-600 text-4xl mb-4">💸</div>
                    <h3 class="font-bold text-xl mb-2">Harga Terjangkau</h3>
                    <p class="text-gray-600">Dapatkan harga terbaik untuk bermain billiard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Table</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="border h-60 rounded-lg text-center p-6 bg-green-600 shadow hover:shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Table A</h3>
                </div>
                <div class="border h-60 rounded-lg text-center p-6 bg-green-600 shadow-lg transform scale-105">
                    <h3 class="text-xl font-bold mb-4">Table B</h3>
                </div>    
                <div class="border h-60 rounded-lg text-center p-6 shadow bg-green-600 hover:shadow-lg">
                    <h3 class="text-xl font-bold mb-4">VIP Table</h3>
                </div>
            </div>
        </div>
    </section>
</body>
<footer class="bg-gray-800 text-white py-6">
  <div class="text-center">
    <p>&copy; 2024 Nama Perusahaan. Semua hak cipta dilindungi.</p>
    <p>
      <a href="privacy.html" class="hover:underline">Kebijakan Privasi</a> | 
      <a href="terms.html" class="hover:underline">Syarat & Ketentuan</a>
    </p>
  </div>
</footer>
</html>
