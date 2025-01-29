@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<style>
    body {
        background-image: url('{{ asset('images/bg.svg') }}'); /* Use Laravel's asset helper */
        background-repeat: repeat; /* Repeat the SVG */
        background-size: auto; /* Maintain original size */
        background-color: white; /* Fallback color */
    }

    section.bg-white {
        background-color: transparent !important; /* Make section background transparent */
    }
</style>

<!-- Our Team Section -->
<section class="bg-white py-8">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
      <h2 class="mb-4 text-4xl tracking-tight font-heading text-gray-900">Our Team</h2>
      <p class="font-light font-sans text-gray-500 lg:mb-16 sm:text-xl">Explore the dedicated professionals that make our mission possible.</p>
    </div> 
    <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
      <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
        <a href="#">
          <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
        </a>
        <div class="p-5">
          <h3 class="text-xl font-heading tracking-tight text-gray-900">
            <a href="#">Bonnie Green</a>
          </h3>
          <span class="text-gray-500 font-sans">CEO & Web Developer</span>
          <p class="mt-3 mb-4 font-light font-sans text-gray-500">Bonnie drives the technical strategy of the flowbite platform and brand.</p>
        </div>
      </div> 
      <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
        <a href="#">
          <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
        </a>
        <div class="p-5">
          <h3 class="text-xl font-heading tracking-tight text-gray-900">
            <a href="#">Jese Leos</a>
          </h3>
          <span class="text-gray-500 font-sans">CTO</span>
          <p class="mt-3 mb-4 font-light font-sans text-gray-500">Jese drives the technical strategy of the flowbite platform and brand.</p>
        </div>
      </div> 
    </div>  
  </div>
</section>

<!-- Our Journey Section -->
<section class="bg-white py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-heading text-gray-900 mb-6">Our Journey</h2>
    <ol class="relative border-l border-gray-200">
      <li class="mb-10 ml-6">
        <span class="absolute flex items-center justify-center w-6 h-6 bg-[#EF4339] rounded-full -left-3 ring-8 ring-white">
          <!-- Icon or number can be placed here -->
        </span>
        <time class="mb-1 text-sm font-light font-sans text-gray-400">February 2022</time>
        <h3 class="text-lg font-heading text-gray-900">Company LLC Created</h3>
        <p class="text-base font-light font-sans text-gray-500">We first created our company. Our image was just beginning.</p>
      </li>
      <li class="mb-10 ml-6">
        <span class="absolute flex items-center justify-center w-6 h-6 bg-[#EF4339] rounded-full -left-3 ring-8 ring-white">
          <!-- Icon or number can be placed here -->
        </span>
        <time class="mb-1 text-sm font-light font-sans text-gray-400">March 2022</time>
        <h3 class="text-lg font-heading text-gray-900">First Employees Hired</h3>
        <p class="text-base font-light font-sans text-gray-500">Alongside our family, we hired our first few employees to help us cultivate our dream.</p>
      </li>
      <li class="ml-6">
        <span class="absolute flex items-center justify-center w-6 h-6 bg-[#EF4339] rounded-full -left-3 ring-8 ring-white">
          <!-- Icon or number can be placed here -->
        </span>
        <time class="mb-1 text-sm font-light font-sans text-gray-400">April 2022</time>
        <h3 class="text-lg font-heading text-gray-900">First Company Building</h3>
        <p class="text-base font-light font-sans text-gray-500">We purchased our first building as a fully established company!</p>
      </li>
    </ol>
  </div>
</section>

@endsection
