@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- Hero Section with Video Background -->
<section class="relative w-full h-screen overflow-hidden">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="{{ asset('images/hero.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Dark Overlay to Improve Readability -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <!-- Hero Content -->
    <div class="relative z-10 px-6 mx-auto max-w-screen-2xl text-center py-24 lg:py-80">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            Building a Legacy, Brick by Brick
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
            Dedicated to You, Committed to the Journey: Let’s Take Your Project to New Heights.
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#EF4339] hover:bg-opacity-40 focus:ring-4 focus:ring-opacity-50 focus:ring-[#EF4339]">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class="gap-16 items-center py-12 px-6 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-8">
        <div class="font-light text-gray-700 sm:text-lg">
            <h2 class="mb-6 text-4xl tracking-tight font-extrabold text-[#EF4339]">Our Vision, Our Mission</h2>
            <p class="mb-6 leading-relaxed">To be the most trusted family-run construction company in Asheville, where clients can rely on our integrity and dedication to navigate challenges, fostering lasting relationships built on transparency and exceptional service.</p>
            <p class="leading-relaxed">To provide exceptional construction services for homes and businesses, fostering trust through integrity and dedication. We are committed to supporting our clients through every challenge, ensuring a seamless experience with craftsmanship that prioritizes thoroughness and care.</p>
        </div>
        <div class="grid grid-cols-2 gap-6 mt-8">
            <!-- Image 1 with darkness -->
            <div class="relative">
                <img class="w-full rounded-lg shadow-md transition-transform duration-500 hover:scale-105 brightness-75" 
                    src="{{ asset('images/home-1.png') }}" 
                    alt="Office content 1">
            </div>

            <!-- Image 2 with darkness -->
            <div class="relative">
                <img class="mt-6 w-full lg:mt-10 rounded-lg shadow-md transition-transform duration-500 hover:scale-105 brightness-75" 
                    src="{{ asset('images/home-2.png') }}" 
                    alt="Office content 2">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Fixed Background Image -->
<section class="bg-white py-24 relative">
    <div class="max-w-screen-xl px-4 mx-auto lg:py-16 lg:px-6 relative z-10 flex items-center">
        
        <!-- Left Side: Background Image (Crane) -->
        <div class="absolute inset-0 bg-no-repeat bg-contain bg-left lg:bg-left-center opacity-30 lg:opacity-100" 
            style="background-image: url('{{ asset('images/crane.png') }}');">
        </div>

        <!-- Right Side: Testimonial Content -->
        <div class="lg:w-2/3 text-center lg:text-left ml-auto relative z-20 bg-white/90 p-8 rounded-lg shadow-lg">
            <figure class="max-w-screen-md mx-auto">
                <!-- Red Quotation Marks -->
                <svg class="h-12 mx-auto lg:mx-0 mb-3 text-[#EF4339]" viewBox="0 0 24 27" fill="#EF4339" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" />
                </svg> 

                <!-- Testimonial Text -->
                <blockquote>
                    <p class="text-2xl font-medium text-gray-900">
                        "They didn't just build a structure; they built trust. Their commitment to quality and attention to detail ensured that our project reached new heights—both literally and figuratively."
                    </p>
                </blockquote>

                <!-- Author Details -->
                <figcaption class="flex items-center justify-center lg:justify-start mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                    <div class="flex items-center divide-x-2 divide-gray-500">
                        <div class="pr-3 font-medium text-gray-900">James Holloway</div>
                        <div class="pl-3 text-sm font-light text-gray-500">Project Manager, Skyline Developments</div>
                    </div>
                </figcaption>
            </figure>
        </div>

    </div>
</section>


<!-- Unified Gradient Background Across Sections -->
<section class="bg-gradient-to-b from-white to-gray-20 py-24">
    <div class="max-w-screen-xl px-6 mx-auto text-center">
        <!-- Our Work Title -->
        <h2 class="text-5xl font-extrabold text-[#EF4339] mb-6">Our Work</h2>
        <p class="text-lg text-gray-700 font-light mb-12 max-w-3xl mx-auto">
            Take a look at some of the projects we've had the pleasure of working on.
        </p>

        <!-- Carousel Wrapper -->
        <div id="work-carousel" class="relative w-full mx-auto max-w-4xl" data-carousel="slide">
            <div class="relative h-[500px] overflow-hidden rounded-xl shadow-xl">
                <!-- Carousel Items -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('images/project1.png') }}" class="absolute block w-full h-full object-cover rounded-xl" alt="Project 1">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/project2.png') }}" class="absolute block w-full h-full object-cover rounded-xl" alt="Project 2">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/project3.png') }}" class="absolute block w-full h-full object-cover rounded-xl" alt="Project 3">
                </div>
            </div>

            <!-- Carousel Dots -->
            <div class="absolute z-30 flex space-x-3 bottom-5 left-1/2 transform -translate-x-1/2">
                <button type="button" class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-500 transition-all" data-carousel-slide-to="0"></button>
                <button type="button" class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-500 transition-all" data-carousel-slide-to="1"></button>
                <button type="button" class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-500 transition-all" data-carousel-slide-to="2"></button>
            </div>

            <!-- Carousel Navigation -->
            <button type="button" class="absolute top-1/2 left-4 transform -translate-y-1/2 z-30 flex items-center justify-center h-12 w-12 rounded-full bg-white/80 hover:bg-white shadow-lg transition-all"
                data-carousel-prev>
                <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button type="button" class="absolute top-1/2 right-4 transform -translate-y-1/2 z-30 flex items-center justify-center h-12 w-12 rounded-full bg-white/80 hover:bg-white shadow-lg transition-all"
                data-carousel-next>
                <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Call to Action Section with Dark Gradient -->
    <div class="bg-gradient-to-b from-gray-20 to-gray-30 py-16">
        <div class="py-8 px-6 mx-auto max-w-screen-xl sm:py-16 lg:px-8">
            <div class="max-w-screen-md text-center lg:text-left">
                <h2 class="mb-6 text-4xl tracking-tight font-extrabold text-[#EF4339]">Let's find more that brings us together.</h2>
                <p class="mb-8 font-light text-gray-700 text-lg sm:text-xl">
                    Flowbite helps you connect with friends, family, and communities of people who share your interests. Connecting with your friends and family as well as discovering new ones is easy with features like Groups, Watch, and Marketplace.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 justify-center lg:justify-start">
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-[#EF4339] rounded-lg shadow hover:bg-opacity-90 focus:ring-4 focus:ring-[#EF4339] focus:ring-opacity-50">
                        Get started
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-[#EF4339] border border-[#EF4339] rounded-lg hover:bg-[#EF4339] hover:text-white focus:ring-4 focus:ring-[#EF4339] focus:ring-opacity-30">
                        <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                        </svg>
                        View more
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Include Flowbite JS -->
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        console.log("Flowbite initialized:", typeof Flowbite !== "undefined");
    });
</script>
  

@endsection
