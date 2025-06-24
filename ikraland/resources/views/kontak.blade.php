<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
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
        <a href="{{ url('/kontak') }}" class="px-3 py-2 text-sm font-medium rounded-md text-green-600 font-bold">Kontak</a>
      </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-white shadow-lg">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium rounded-md hover:text-green-600">Beranda</a>
        <a href="{{ url('/kontak') }}" class="block px-3 py-2 text-base font-medium rounded-md text-green-600 font-bold">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
        <div class="w-20 h-1 bg-green-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">Silakan hubungi kami melalui media sosial atau formulir kontak</p>
      </div>

      <!-- Social Media Links -->
      <div class="flex justify-center gap-6 mb-12">
        <!-- YouTube -->
        <a href="https://www.youtube.com/@ikradokterunpad" target="_blank" class="w-12 h-12 rounded-full bg-red-600 text-white flex items-center justify-center transition-transform hover:scale-110 hover:shadow-lg">
          <i class="fab fa-youtube text-xl"></i>
        </a>
        
        <!-- Instagram -->
        <a href="https://www.instagram.com/ikraland.nec/" target="_blank" class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white flex items-center justify-center transition-transform hover:scale-110 hover:shadow-lg">
          <i class="fab fa-instagram text-xl"></i>
        </a>
        
        <!-- WhatsApp -->
        <a href="https://wa.me/6283103242552" target="_blank" class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center transition-transform hover:scale-110 hover:shadow-lg">
          <i class="fab fa-whatsapp text-xl"></i>
        </a>
      </div>

      <!-- Contact Button -->
      <div class="text-center">
        <a href="#" class="inline-block px-8 py-3 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition-colors shadow-lg hover:shadow-xl">
          Hubungi Kami
        </a>
      </div>



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