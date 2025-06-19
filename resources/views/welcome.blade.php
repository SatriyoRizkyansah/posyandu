<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Sistem Informasi Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        html, body {
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif;
            position: relative;
        }
        :root {
            --primary-color: #2ECC71;
            --secondary-color: #27AE60;
            --dark-color: #195330;
        }
        .bg-primary-custom {
            background-color: var(--primary-color);
        }
        .bg-secondary-custom {
            background-color: var(--secondary-color);
        }
        .text-primary-custom {
            color: var(--primary-color);
        }
        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background-color: var(--dark-color);
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .hero-pattern {
            background-color: #f0fdf4;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2322c55e' fill-opacity='0.11'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-white overflow-x-hidden">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Posyandu Logo" class="h-10">
                    <span class="text-xl md:text-2xl font-bold text-gray-700">Posyandu Mawar Indah IX</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="btn-primary-custom px-6 py-2 rounded-full font-medium">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-pattern min-h-screen pt-20 overflow-hidden">
        <div class="container mx-auto px-4 py-16 max-w-7xl">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="text-center md:text-left" data-aos="fade-right">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-6">
                        Selamat Datang di<br>
                        <span class="text-primary-custom">Sistem Informasi Posyandu</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Memantau pertumbuhan dan perkembangan anak dengan mudah dan efektif
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                        <a href="{{ route('login') }}" class="btn-primary-custom px-8 py-3 rounded-full font-medium">
                            Masuk sebagai Admin
                        </a>
                        <a href="{{ route('login.orangtua') }}" class="bg-white border-2 border-primary-custom text-primary-custom px-8 py-3 rounded-full font-medium hover:bg-primary-custom hover:text-white transition duration-300">
                            Masuk sebagai Petugas
                        </a>
                    </div>
                </div>
                <div class="hidden md:block" data-aos="fade-left">
                    <img src="{{ asset('images/family.svg') }}" alt="Posyandu Illustration" class="w-full max-w-lg mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Posyandu</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Posyandu menyediakan berbagai layanan kesehatan untuk ibu dan anak</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                  <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="bi bi-heart-fill text-2xl text-primary-custom"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Pemantauan Pertumbuhan</h3>
                  <p class="text-gray-600">Memantau pertumbuhan anak melalui pengukuran berat badan, tinggi badan, dan lingkar kepala secara rutin.</p>
                </div>
              
                <!-- Feature 2 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                  <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="bi bi-shield-check text-2xl text-primary-custom"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Imunisasi</h3>
                  <p class="text-gray-600">Memberikan imunisasi dasar lengkap untuk melindungi anak dari berbagai penyakit berbahaya.</p>
                </div>
              
                <!-- Feature 3 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                  <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <i class="bi bi-book text-2xl text-primary-custom"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Edukasi Kesehatan</h3>
                  <p class="text-gray-600">Memberikan informasi dan edukasi tentang kesehatan, gizi, dan perkembangan anak.</p>
                </div>
              </div>
              
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1" data-aos="fade-right">
                    <img src="{{ asset('images/about.svg') }}" alt="About Posyandu" class="w-full max-w-lg mx-auto">
                </div>
                <div class="order-1 md:order-2" data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tentang Posyandu</h2>
                    <p class="text-gray-600 mb-4">
                        Pos Pelayanan Terpadu (Posyandu) adalah pusat kegiatan masyarakat dimana masyarakat dapat sekaligus memperoleh pelayanan KB dan kesehatan.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Posyandu merupakan garda terdepan dalam pemantauan kesehatan ibu dan anak di tingkat masyarakat, dengan fokus pada:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-6">
                        <li>Pemantauan pertumbuhan balita</li>
                        <li>Pelayanan kesehatan ibu dan anak</li>
                        <li>Keluarga berencana</li>
                        <li>Imunisasi</li>
                        <li>Peningkatan gizi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        {{-- <img src="{{ asset('images/logo-white.svg') }}" alt="Posyandu Logo" class="h-10"> --}}
                        <span class="text-2xl font-bold">Posyandu Mawar Indah IX
                        </span>
                    </div>
                    <p class="text-gray-400 max-w-md">
                        Melayani dengan sepenuh hati untuk kesehatan ibu dan anak Indonesia.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Login</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('login') }}" class="text-gray-400 hover:text-white">Admin</a></li>
                            <li><a href="{{ route('login.orangtua') }}" class="text-gray-400 hover:text-white">Petugas</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Layanan</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Imunisasi</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Pemeriksaan Kesehatan</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Konsultasi Gizi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Sistem Informasi Posyandu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
