@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Grid Background with Spacing Below Header -->
<section class="relative pt-32 bg-gradient-to-b from-white/30 to-white/100">
    <!-- Shared Background Grid -->
    <div class="absolute inset-0 pointer-events-none bg-grid-pattern"></div>

    <div class="container px-6 py-16 mx-auto relative z-10">
        <h1 class="text-4xl font-extrabold text-center text-[#EF4339] capitalize lg:text-5xl">Our Services</h1>

        <div class="flex justify-center mx-auto mt-6">
            <span class="inline-block w-40 h-1 bg-[#EF4339] rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-[#EF4339] rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-[#EF4339] rounded-full"></span>
        </div>

        <p class="mt-4 text-center text-gray-600 text-lg">
            We offer a wide range of construction and repair services tailored to meet your needs with unmatched quality and precision.
        </p>

        <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2 xl:grid-cols-3">
            <!-- Service 1 -->
            <div class="p-6 border rounded-lg shadow-md hover:shadow-lg bg-white">
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1523301343968-6a6ebf63c672?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Residential Construction">
                <h2 class="mt-4 text-xl font-extrabold text-[#EF4339] capitalize">Residential Construction</h2>
                <p class="mt-2 text-gray-700">
                    Custom home building, renovations, and remodeling designed to meet your vision and built to last.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="p-6 border rounded-lg shadow-md hover:shadow-lg bg-white">
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1523301343968-6a6ebf63c672?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Commercial Construction">
                <h2 class="mt-4 text-xl font-extrabold text-[#EF4339] capitalize">Commercial Construction</h2>
                <p class="mt-2 text-gray-700">
                    Office spaces, retail buildings, and large-scale commercial projects built with efficiency and quality.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="p-6 border rounded-lg shadow-md hover:shadow-lg bg-white">
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1523301343968-6a6ebf63c672?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Infrastructure Development">
                <h2 class="mt-4 text-xl font-extrabold text-[#EF4339] capitalize">Infrastructure Development</h2>
                <p class="mt-2 text-gray-700">
                    Roads, bridges, and public works designed to connect and support communities.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="p-6 border rounded-lg shadow-md hover:shadow-lg bg-white">
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Repair Services">
                <h2 class="mt-4 text-xl font-extrabold text-[#EF4339] capitalize">Repair Services</h2>
                <p class="mt-2 text-gray-700">
                    Comprehensive repair services to ensure your buildings and infrastructure remain in top condition.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="p-6 border rounded-lg shadow-md hover:shadow-lg bg-white">
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Renovations">
                <h2 class="mt-4 text-xl font-extrabold text-[#EF4339] capitalize">Renovations</h2>
                <p class="mt-2 text-gray-700">
                    Expert renovations to revitalize your spaces, tailored to modern standards and timeless aesthetics.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="p-6 border rounded-lg shadow-md hover:shadow-lg bg-white">
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Consulting">
                <h2 class="mt-4 text-xl font-extrabold text-[#EF4339] capitalize">Consulting</h2>
                <p class="mt-2 text-gray-700">
                    Professional consulting to plan and execute construction projects with confidence and clarity.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
