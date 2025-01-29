@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="min-h-screen bg-cover" style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
    <div class="flex flex-col min-h-screen bg-black/60">
        <div class="container flex flex-col flex-1 px-6 py-12 mx-auto">
            <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
                <div class="text-white lg:w-1/2 lg:mx-6">
                    <h1 class="text-2xl font-semibold capitalize lg:text-3xl">Ultimate Design Solution</h1>

                    <p class="max-w-xl mt-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem quo
                        aliquid molestiae hic incidunt beatae placeat accusantium! Alias ex quisquam ab tempora. Ratione
                        autem doloremque ducimus numquam doloribus, error sed.
                    </p>

                    <button class="px-8 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                        Get in Touch
                    </button>

                    <div class="mt-6 md:mt-8">
                        <h3 class="text-gray-300">Follow us</h3>
                        <div class="flex mt-4 -mx-1.5">
                            <!-- Social media links -->
                            <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500" href="#"><svg class="w-10 h-10 fill-current" ...></svg></a>
                            <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500" href="#"><svg class="w-8 h-8" ...></svg></a>
                            <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500" href="#"><svg class="w-8 h-8" ...></svg></a>
                            <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500" href="#"><svg class="w-8 h-8" ...></svg></a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 lg:w-1/2 lg:mx-6">
                    <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white shadow-2xl rounded-xl lg:max-w-xl">
                        <h1 class="text-xl font-medium text-gray-700">Contact Form</h1>
                        <p class="mt-2 text-gray-500">
                            Ask us everything and we would love to hear from you.
                        </p>
                        <form class="mt-6">
                            <div class="flex-1">
                                <label class="block mb-2 text-sm text-gray-600">Full Name</label>
                                <input type="text" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                            </div>

                            <div class="flex-1 mt-6">
                                <label class="block mb-2 text-sm text-gray-600">Email Address</label>
                                <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                            </div>

                            <div class="w-full mt-6">
                                <label class="block mb-2 text-sm text-gray-600">Message</label>
                                <textarea placeholder="Message" class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"></textarea>
                            </div>

                            <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                                Get in Touch
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
