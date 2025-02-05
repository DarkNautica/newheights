<!-- Transparent Header -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out {{ Request::is('/') ? 'bg-transparent backdrop-blur-md' : 'bg-white shadow-md' }}">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1 relative">
    <!-- Logo Section -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <div class="flex-shrink-0 w-48">
        <img src="/images/logo.svg" class="w-64 h-32" alt="Company Logo" />
      </div>
    </a>

    <!-- Dropdown and Mobile Menu Toggle -->
    <div class="flex items-center md:order-2 space-x-3 rtl:space-x-reverse relative">
      <!-- Language Dropdown -->
      <div class="relative">
        <button id="languageButton" class="bg-[#EF4339] text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
          Language
          <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown" class="hidden absolute left-0 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44">
          <ul class="py-2 text-sm text-gray-700">
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

  /* Default Navbar Links */
  .nav-link {
    position: relative;
    display: inline-block;
    padding: 0.5rem 1.5rem;
    font-size: 1.125rem;
    font-weight: bold;
    text-decoration: none;
    color: white; /* Default to white for transparent navbar */
    transition: color 0.3s ease;
  }

  .nav-link:hover {
    color: #EF4339 !important;
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

  /* Navbar States */
  .navbar-default {
    background-color: white !important;
    backdrop-filter: none;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }

  .navbar-transparent {
    background-color: transparent !important;
    backdrop-filter: blur(10px);
  }

  /* Scrolled Navbar */
  .scrolled {
    background-color: white !important;
    backdrop-filter: none;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }

  .scrolled .nav-link {
    color: #EF4339 !important;
  }

  /* Language Button */
  #languageButton {
    background-color: #EF4339 !important;
    color: white !important;
  }

  #languageButton:hover {
    background-color: #D12C24 !important;
  }

  /* Dropdown Menu */
  #dropdown {
    position: absolute;
    left: 0;
    top: 100%;
    margin-top: 5px;
    z-index: 100;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("navbar");
    var navLinks = document.querySelectorAll(".nav-link");
    var languageButton = document.getElementById("languageButton");
    var dropdown = document.getElementById("dropdown");
    var isHomePage = window.location.pathname === "/"; // Check if it's the home page

    if (isHomePage) {
      navbar.classList.add("navbar-transparent");

      window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
          navbar.classList.remove("navbar-transparent");

          // Change nav link colors when scrolled
          navLinks.forEach(link => link.style.color = "#EF4339");
        } else {
          navbar.classList.remove("scrolled");
          navbar.classList.add("navbar-transparent");

          // Change nav link colors back to white when unscrolled
          navLinks.forEach(link => link.style.color = "white");
        }
      });
    } else {
      navbar.classList.add("navbar-default");
      navLinks.forEach(link => link.style.color = "#EF4339");
    }

    // Fix dropdown so it works everywhere
    languageButton.addEventListener("click", function (event) {
      event.stopPropagation();
      dropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
      if (!languageButton.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add("hidden");
      }
    });
  });
</script>
