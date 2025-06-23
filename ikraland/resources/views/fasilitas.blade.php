<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fasilitas - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar (sama dengan homepage) -->
  <header class="sticky top-0 z-50 bg-white shadow-md transition-shadow duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
      <!-- Logo Brand dengan link ke homepage -->
      <a href="{{ url('/') }}" class="flex items-center gap-2 group" aria-label="Beranda">
        <img src="{{ asset('images/logo.png') }}" alt="Logo IKRA" class="h-10 w-10 object-contain transition-transform group-hover:scale-105" loading="lazy" />
        <span class="text-lg font-bold text-green-700 group-hover:text-green-800 transition-colors">IKRALAND</span>
      </a>

      <!-- Mobile Menu Button -->
      <button id="menuToggle" class="md:hidden p-2 rounded-md text-gray-700 hover:text-green-600 focus:outline-none focus:ring-2 focus:ring-green-500" aria-label="Toggle menu" aria-expanded="false">
        <svg class="w-6 h-6 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path id="menuIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          <path id="closeIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class="hidden"></path>
        </svg>
      </button>

 
  </header>

  <!-- Fasilitas Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Fasilitas IKRALAND</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/akasia.jpg') }}" alt="Blok Tanaman Akasia" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Blok Tanaman Akasia</h3>
            <p class="text-gray-600">Area yang ditanami pohon akasia sebagai bagian dari penghijauan dan edukasi lingkungan.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/kolam.jpg') }}" alt="Kolam Ikan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Kolam Ikan</h3>
            <p class="text-gray-600">Kolam untuk budidaya ikan yang digunakan untuk kegiatan pelatihan dan produksi pangan.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/rumah1.jpg') }}" alt="Rumah Belajar" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Rumah Belajar</h3>
            <p class="text-gray-600">Fasilitas belajar bagi anak-anak dan masyarakat sekitar untuk pendidikan informal.</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/saung.jpg') }}" alt="Rumah Belajar" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">SAUNG LEGENDARIS</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum obcaecati deleniti aperiam, nulla esse optio eos unde repudiandae quos, eum ea! Explicabo nulla a voluptatem ut impedit assumenda enim?</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/rumah2.jpg') }}" alt="Rumah Belajar 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Rumah Belajar 2</h3>
            <p class="text-gray-600">Gedung tambahan untuk kegiatan belajar dan pelatihan komunitas.</p>
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
          
          // Toggle menu icons
          menuIcon.classList.toggle('hidden');
          closeIcon.classList.toggle('hidden');
        });
      }
    });
  </script>
</body>
</html>