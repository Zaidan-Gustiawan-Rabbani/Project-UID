<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen">

        <!-- Header --> 
        <header class="bg-gray-700 shadow p-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">
                <a class="logo" href="./../index.php">
                    SiBantu
                </a>
            </h1>
            <div class="flex items-center space-x-4">
                <i class="fas fa-bell text-white">
                </i>
                <i class="fas fa-envelope text-white">
                </i>
                <img alt="User Profile" class="rounded-full" height="40"
                    src="https://storage.googleapis.com/a1aa/image/cCYjTRgvAFZBA5oP1xaxRnauVzPZZiKo62ESgUGl9aVxeG7JA.jpg"
                    width="40" />
            </div>
        </header>
        <div class="flex flex-1 flex-col md:flex-row">

            <!-- Sidebar -->
            <div class="w-full md:w-1/5 bg-gray-200 p-4 shadow">
                <div class="flex items-center mb-4 bg-white p-4 rounded">
                    <img alt="User Profile" class="rounded-full mr-2" height="50"
                        src="https://storage.googleapis.com/a1aa/image/cCYjTRgvAFZBA5oP1xaxRnauVzPZZiKo62ESgUGl9aVxeG7JA.jpg"
                        width="50" />
                    <div>
                        <h2 class="text-xl font-bold text-black">
                            Zaidan
                        </h2>
                        <p class="text-gray-600">
                            Member Silver
                        </p>
                    </div>
                </div>
                <!-- Dropdown Categories -->
                <div class="mb-4">
                    <div class="relative">
                        <button class="w-full text-left bg-white text-gray-700 px-4 py-2 rounded"
                            onclick="toggleDropdown('pembayaranDropdown')">
                            Transaksi
                            <i class="fas fa-chevron-down float-right mt-1"></i>
                        </button>
                        <div class="hidden mt-2 bg-white shadow rounded" id="pembayaranDropdown">
                            <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="User_status.php">
                                Status Pembayaran
                            </a>
                            <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                                href="User_Riwayat Transaksi.php">
                                Riwayat Transaksi
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-3/4 p-4">
                <div class="bg-white p-4 rounded shadow mb-4">
                    <div class="border-b border-gray-200 mb-4">
                        <ul class="flex space-x-4">
                            <li><a class="text-gray-700 font-semibold" href="User_dashboard.php">Biodata Diri</a></li>
                            <li><a class="text-gray-700" href="User_daftar.php">Daftar Alamat</a></li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-bold mb-4">
                            Riwayat Transaksi
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b">
                                            No
                                        </th>
                                        <th class="py-2 px-4 border-b">
                                            ID Transaksi
                                        </th>
                                        <th class="py-2 px-4 border-b">
                                            Jenis Jasa
                                        </th>
                                        <th class="py-2 px-4 border-b">
                                            Tanggal
                                        </th>
                                        <th class="py-2 px-4 border-b">
                                            Harga
                                        </th>
                                        <th class="py-2 px-4 border-b">
                                            Status
                                        </th>
                                        <th class="py-2 px-4 border-b">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b">
                                            1
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            TRX001
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            Jasa Membersihkan Rumah
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            2024-10-01
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            Rp100.000,00
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Selesai</span>
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <button onclick="openReviewModal('TRX001')" class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-star"></i> Beri Ulasan
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="py-2 px-4 border-t text-right font-bold" colspan="4">
                                            Total Transaksi
                                        </td>
                                        <td class="py-2 px-4 border-t font-bold">
                                            Rp100.000,00
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="px-4 mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Logo and Description -->
                <div>
                    <h2 class="text-2xl font-bold">SiBantu</h2>
                    <p class="mt-4 text-sm">
                        Mitra andalan Anda untuk layanan sehari-hari. Hubungi kami kapan saja, di mana saja.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold">Quick Links</h3>
                    <nav class="mt-4 space-y-2">
                        <a href="index.php" class="block hover:underline">Home</a>
                        <a href="faq.php" class="block hover:underline">FAQ</a>
                    </nav>
                </div>
                
                <!-- Contact Us -->
                <div>
                    <h3 class="text-lg font-semibold">Contact Us</h3>
                    <nav class="mt-4 space-y-2">
                        <a href="mailto:support@sibantu.com" class="block hover:underline">support@sibantu.com</a>
                        <a href="tel:+6281234567890" class="block hover:underline">+62 812 3456 7890</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Review -->
    <div id="reviewModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Beri Ulasan</h3>
                <form id="reviewForm" class="space-y-4">
                    <input type="hidden" id="transactionId" name="transactionId">
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                        <div class="flex space-x-2">
                            <button type="button" onclick="setRating(1)" class="text-2xl text-gray-300 hover:text-yellow-400 rating-star">★</button>
                            <button type="button" onclick="setRating(2)" class="text-2xl text-gray-300 hover:text-yellow-400 rating-star">★</button>
                            <button type="button" onclick="setRating(3)" class="text-2xl text-gray-300 hover:text-yellow-400 rating-star">★</button>
                            <button type="button" onclick="setRating(4)" class="text-2xl text-gray-300 hover:text-yellow-400 rating-star">★</button>
                            <button type="button" onclick="setRating(5)" class="text-2xl text-gray-300 hover:text-yellow-400 rating-star">★</button>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ulasan</label>
                        <textarea id="reviewText" name="review" rows="4" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeReviewModal()"
                            class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Kirim Ulasan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        }

        // Fungsi untuk membuka modal review
        function openReviewModal(transactionId) {
            document.getElementById('reviewModal').classList.remove('hidden');
            document.getElementById('transactionId').value = transactionId;
        }

        // Fungsi untuk menutup modal review
        function closeReviewModal() {
            document.getElementById('reviewModal').classList.add('hidden');
            resetRating();
        }

        // Fungsi untuk mengatur rating
        function setRating(rating) {
            const stars = document.querySelectorAll('.rating-star');
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('text-yellow-400');
                    star.classList.remove('text-gray-300');
                } else {
                    star.classList.remove('text-yellow-400');
                    star.classList.add('text-gray-300');
                }
            });
        }

        // Fungsi untuk mereset rating
        function resetRating() {
            const stars = document.querySelectorAll('.rating-star');
            stars.forEach(star => {
                star.classList.remove('text-yellow-400');
                star.classList.add('text-gray-300');
            });
            document.getElementById('reviewText').value = '';
        }

        // Event listener untuk form review
        document.getElementById('reviewForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const transactionId = document.getElementById('transactionId').value;
            const review = document.getElementById('reviewText').value;
            const rating = document.querySelectorAll('.rating-star.text-yellow-400').length;

            // Di sini Anda bisa menambahkan kode untuk mengirim data review ke server
            alert('Terima kasih atas ulasan Anda!');
            closeReviewModal();
        });
    </script>
</body>

</html>