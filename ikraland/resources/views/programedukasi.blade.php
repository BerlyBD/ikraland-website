<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Edukasi - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
  <style>
    .program-card:hover .program-image {
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar -->
  <header class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
      <a href="{{ url('/') }}" class="flex items-center gap-2 group">
        <img src="{{ asset('images/logo.png') }}" alt="Logo IKRA" class="h-10 w-10 object-contain transition-transform group-hover:scale-105" loading="lazy">
        <span class="text-lg font-bold text-green-700 group-hover:text-green-800 transition-colors">IKRALAND</span>
      </a>

      <button id="menuToggle" class="md:hidden p-2 rounded-md text-gray-700 hover:text-green-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path id="menuIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          <path id="closeIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class="hidden"></path>
        </svg>
      </button>

      <nav id="navMenu" class="hidden md:flex items-center space-x-1 lg:space-x-2">
        <a href="{{ url('/') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-green-600 transition-colors">Beranda</a>
        <a href="{{ url('/programedukasi') }}" class="px-3 py-2 text-sm font-medium rounded-md text-green-600 font-bold">Program Edukasi</a>
                <a href="{{ url('/programrekreasi') }}" class="px-3 py-2 text-sm font-medium rounded-md text-green-600 font-bold">Program Rekreasi</a>
        <a href="{{ url('/kontak') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-green-600 transition-colors">Kontak</a>
      </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-white shadow-lg">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium rounded-md hover:text-green-600">Beranda</a>
        <a href="{{ url('/programedukasi') }}" class="block px-3 py-2 text-base font-medium rounded-md text-green-600 font-bold">Program Edukasi</a>
        <a href="{{ url('/kontak') }}" class="block px-3 py-2 text-base font-medium rounded-md hover:text-green-600">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Program Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Pilihan Program Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Temukan program yang sesuai dengan kebutuhan edukasi Anda</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Program 1 -->
        <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
          <div class="relative h-64 overflow-hidden">
            <img src="{{ asset('images/program/jelajah-tanaman.jpg') }}" alt="Jelajah Tanaman" class="program-image w-full h-full object-cover transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-2xl font-bold text-white">Jelajah Tanaman</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <!-- Program 2 -->
        <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
          <div class="relative h-64 overflow-hidden">
            <img src="{{ asset('images/program/petani-cilik.jpg') }}" alt="Petani Cilik" class="program-image w-full h-full object-cover transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-2xl font-bold text-white">Petani Cilik</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600">Program khusus untuk anak usia 5-12 tahun belajar bercocok tanam dengan metode yang menyenangkan dan edukatif.</p>
          </div>
        </div>

        <!-- Program 3 -->
        <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl">
          <div class="relative h-64 overflow-hidden">
            <img src="{{ asset('images/program/agro-edu.jpg') }}" alt="Agro Edu Tour" class="program-image w-full h-full object-cover transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
            <div class="absolute bottom-0 left-0 p-6">
              <h3 class="text-2xl font-bold text-white">Agro Edu Tour</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600">Paket wisata edukasi untuk keluarga dengan pengalaman langsung memanen dan mengolah hasil pertanian.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const toggleBtn = document.getElementById('menuToggle');
      const navMenu = document.getElementById('mobileMenu');
      const menuIcon = document.getElementById('menuIcon');
      const closeIcon = document.getElementById('closeIcon');

      if (toggleBtn && navMenu) {
        toggleBtn.addEventListener('click', function() {
          const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
          toggleBtn.setAttribute('aria-expanded', !isExpanded);
          navMenu.classList.toggle('hidden');
          
          menuIcon.classList.toggle('hidden');
          closeIcon.classList.toggle('hidden');
        });
      }
    });
  </script>
</body>
</html>