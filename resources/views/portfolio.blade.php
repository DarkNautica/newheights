@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<section class="bg-white">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">Our Projects</h1>

        <div class="flex justify-center mx-auto mt-6">
            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
        </div>

        <p class="mt-4 text-center text-gray-500">
            Explore a collection of our most remarkable construction projects, showcasing excellence and craftsmanship.
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <!-- Project Item 1 -->
            <div>
                <img class="object-cover w-full rounded-lg h-96"
                    src="https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8MHx8&auto=format&fit=crop&w=1565&q=80"
                    alt="Residential Construction">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize">Residential Construction</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase">Homes</p>
            </div>

            <!-- Project Item 2 -->
            <div>
                <img class="object-cover w-full rounded-lg h-96"
                    src="https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8MHx8&auto=format&fit=crop&w=764&q=80"
                    alt="Commercial Projects">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize">Commercial Projects</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase">Offices</p>
            </div>

            <!-- Project Item 3 -->
            <div>
                <img class="object-cover w-full rounded-lg h-96"
                    src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8MHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="Infrastructure Development">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize">Infrastructure Development</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase">Public Works</p>
            </div>
        </div>
    </div>
</section>
@endsection
