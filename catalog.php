<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Layanan - SiBantu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .service-card {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="index.php" class="text-2xl font-bold text-blue-600">SiBantu</a>
                <div class="flex items-center space-x-4">
                    <a href="index.php" class="text-gray-600 hover:text-blue-600">Home</a>
                    <a href="catalog.php" class="text-blue-600">Katalog</a>
                    <a href="login_user.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Katalog Layanan</h1>
        
        <!-- Filter Section -->
        <div class="mb-8">
            <div class="flex flex-wrap gap-4">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Semua</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Desain</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Fotografi</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Teknologi</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Kebersihan</button>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $services = [
                [
                    'title' => 'Jasa Fotografi',
                    'category' => 'Fotografi',
                    'price' => 'Rp 500.000 - 2.000.000',
                    'image' => 'https://th.bing.com/th/id/OIP.JuU_TgpPZcrlqR576NAcDQHaJD?rs=1&pid=ImgDetMain',
                    'description' => 'Layanan fotografi profesional untuk prewedding, pernikahan, dan acara lainnya.',
                    'rating' => 4.8,
                    'color' => 'bg-gradient-to-r from-purple-500 to-pink-500'
                ],
                [
                    'title' => 'Jasa Graphic Design',
                    'category' => 'Desain',
                    'price' => 'Rp 300.000 - 1.500.000',
                    'image' => 'https://a.storyblok.com/f/96206/6720x4480/9408ef5b87/ucd-pa-graphic-design-art-2.jpg',
                    'description' => 'Desain logo, poster, banner, dan materi promosi lainnya.',
                    'rating' => 4.7,
                    'color' => 'bg-gradient-to-r from-blue-500 to-cyan-500'
                ],
                [
                    'title' => 'Jasa Pembuatan Website',
                    'category' => 'Teknologi',
                    'price' => 'Rp 2.000.000 - 10.000.000',
                    'image' => 'https://assets-global.website-files.com/6410ebf8e483b5bb2c86eb27/6410ebf8e483b53d6186fc53_ABM%20College%20Web%20developer%20main.jpg',
                    'description' => 'Pembuatan website profesional untuk bisnis atau portofolio pribadi.',
                    'rating' => 4.9,
                    'color' => 'bg-gradient-to-r from-green-500 to-emerald-500'
                ],
                [
                    'title' => 'Jasa Kebersihan',
                    'category' => 'Kebersihan',
                    'price' => 'Rp 200.000 - 500.000',
                    'image' => 'https://www.megabaja.co.id/storage/2023/04/Kategori-Rumah-3-1600x900.jpg',
                    'description' => 'Layanan kebersihan untuk rumah, kantor, dan ruang komersial.',
                    'rating' => 4.6,
                    'color' => 'bg-gradient-to-r from-yellow-500 to-orange-500'
                ],
                [
                    'title' => 'Jasa Video Editing',
                    'category' => 'Desain',
                    'price' => 'Rp 500.000 - 3.000.000',
                    'image' => 'https://th.bing.com/th/id/OIP.W-jupXOluFK_QaeDeYe-EwHaHa?rs=1&pid=ImgDetMain',
                    'description' => 'Editing video profesional untuk konten YouTube, iklan, dan acara.',
                    'rating' => 4.7,
                    'color' => 'bg-gradient-to-r from-red-500 to-pink-500'
                ],
                [
                    'title' => 'Jasa Copywriting',
                    'category' => 'Desain',
                    'price' => 'Rp 200.000 - 1.000.000',
                    'image' => 'https://th.bing.com/th/id/OIP.W-jupXOluFK_QaeDeYe-EwHaHa?rs=1&pid=ImgDetMain',
                    'description' => 'Penulisan konten kreatif untuk website, sosial media, dan materi promosi.',
                    'rating' => 4.5,
                    'color' => 'bg-gradient-to-r from-indigo-500 to-purple-500'
                ]
            ];

            foreach ($services as $service):
            ?>
            <div class="bg-white rounded-xl shadow-md service-card overflow-hidden">
                <div class="<?= $service['color'] ?> h-2"></div>
                <img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?>" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-800"><?= $service['title'] ?></h3>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm"><?= $service['category'] ?></span>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($i <= floor($service['rating'])): ?>
                                    <i class="fas fa-star"></i>
                                <?php elseif($i - 0.5 <= $service['rating']): ?>
                                    <i class="fas fa-star-half-alt"></i>
                                <?php else: ?>
                                    <i class="far fa-star"></i>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        <span class="ml-2 text-gray-600">(<?= $service['rating'] ?>)</span>
                    </div>
                    <p class="text-gray-600 mb-4"><?= $service['description'] ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-blue-600"><?= $service['price'] ?></span>
                        <a href="payment.php?service=<?= urlencode($service['title']) ?>&price=<?= urlencode($service['price']) ?>&category=<?= urlencode($service['category']) ?>" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">SiBantu</h3>
                    <p class="text-gray-400">Solusi layanan terpercaya untuk kebutuhan Anda</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <p class="text-gray-400">Email: support@sibantu.com</p>
                    <p class="text-gray-400">Telp: +62 812 3456 7890</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 