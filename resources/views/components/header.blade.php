<!-- Transparent Header -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out bg-transparent backdrop-blur-md">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
    <!-- Logo Section -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <div class="flex-shrink-0 w-48">
        <img src="/images/logo.svg" class="w-64 h-32" alt="Company Logo" />
      </div>
    </a>

    <!-- Dropdown and Mobile Menu Toggle -->
    <div class="flex items-center md:order-2 space-x-3 rtl:space-x-reverse">
      <!-- Language Dropdown -->
      <div class="relative">
        <button id="languageButton" data-dropdown-toggle="dropdown"
          class="text-white bg-[#EF4339] hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-[#EF4339]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
          Language
          <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">English (US)</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Español</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Français</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Deutsch</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Navigation Links -->
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
      <ul class="flex flex-col font-heading p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:space-x-10 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li><a href="/" class="nav-link">Home</a></li>
        <li><a href="/about" class="nav-link">About</a></li>
        <li><a href="/services" class="nav-link">Services</a></li>
        <li><a href="/contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .font-heading {
    font-family: 'Mont', sans-serif;
  }

  .nav-link {
    position: relative;
    display: inline-block;
    padding: 0.5rem 1.5rem;
    font-size: 1.125rem;
    font-weight: bold;
    text-decoration: none;
    color: white;
    transition: color 0.3s ease;
  }

  .nav-link:hover {
    color: #EF4339;
  }

  .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #EF4339;
    transition: width 0.3s ease;
  }

  .nav-link:hover::after {
    width: 100%;
  }

  /* Scrolled Navbar */
  .scrolled {
    background-color: white !important;
    backdrop-filter: none;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }

  /* Scrolled Navbar Text Color */
  .scrolled .nav-link {
    color: #6a6a6a !important;
  }

  .scrolled .nav-link:hover {
    color: #EF4339 !important;
  }
</style>

<script>
  window.addEventListener("scroll", function() {
    var navbar = document.getElementById("navbar");

    if (window.scrollY > 50) { // Adjust threshold as needed
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>
