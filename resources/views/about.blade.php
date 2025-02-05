@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- Team Section with Top Spacing (pt-32) and Shared Background -->
<section class="relative pt-32 bg-gradient-to-b from-white/30 to-white/50 pb-20">
    <!-- Shared Background Grid -->
    <div class="absolute inset-0 pointer-events-none bg-grid-pattern"></div>
    
    <div class="container px-6 py-16 mx-auto relative z-10">
        <!-- Our Team Heading & Subheading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-[#EF4339]">Our Team</h2>
            <p class="text-lg text-gray-600">Explore the dedicated professionals that make our mission possible.</p>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            <!-- Team Member 1 -->
            <div class="p-6 rounded-lg shadow-md hover:shadow-lg bg-white flex items-center">
                <img class="w-24 h-24 rounded-full object-cover" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green">
                <div class="ml-4">
                    <h3 class="text-xl font-semibold text-gray-900">Bonnie Green</h3>
                    <span class="text-gray-500">CEO &amp; Web Developer</span>
                    <p class="mt-2 text-gray-600">Bonnie drives the technical strategy of our platform and brand.</p>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="p-6 rounded-lg shadow-md hover:shadow-lg bg-white flex items-center">
                <img class="w-24 h-24 rounded-full object-cover" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos">
                <div class="ml-4">
                    <h3 class="text-xl font-semibold text-gray-900">Jese Leos</h3>
                    <span class="text-gray-500">CTO</span>
                    <p class="mt-2 text-gray-600">Jese spearheads the technical direction of our company.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="relative bg-gradient-to-b from-white/50 to-white/70 pb-20">
  <!-- Shared Background Grid -->
  <div class="absolute inset-0 pointer-events-none bg-grid-pattern"></div>
  
  <div class="container px-6 py-16 mx-auto relative z-10">
    <h2 class="text-4xl font-extrabold text-center text-[#EF4339] mb-12">Our Journey</h2>
    
    <!-- Timeline Grid (responsive with 4 columns on large screens) -->
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden 
                lg:mx-0 lg:max-w-none lg:grid-cols-4">
      
      <!-- Timeline Item 1 -->
      <div class="relative">
        <time datetime="2021-08" class="flex items-center text-sm font-semibold text-[#EF4339] relative">
          <!-- Small Circle to the left of the date -->
          <svg viewBox="0 0 4 4" class="mr-4 w-2 h-2 flex-none" aria-hidden="true">
            <circle cx="2" cy="2" r="2" fill="currentColor" />
          </svg>
          Aug 2021
          <!-- Horizontal line that extends behind the date (responsive) -->
          <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-300 
                      sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
               aria-hidden="true"></div>
        </time>
        <p class="mt-6 text-lg font-semibold text-gray-900">Founded Company</p>
        <p class="mt-1 text-base text-gray-600">
          Our journey began with a vision to build something remarkable.
        </p>
      </div>
      
      <!-- Timeline Item 2 -->
      <div class="relative">
        <time datetime="2021-12" class="flex items-center text-sm font-semibold text-[#EF4339] relative">
          <svg viewBox="0 0 4 4" class="mr-4 w-2 h-2 flex-none" aria-hidden="true">
            <circle cx="2" cy="2" r="2" fill="currentColor" />
          </svg>
          Dec 2021
          <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-300 
                      sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
               aria-hidden="true"></div>
        </time>
        <p class="mt-6 text-lg font-semibold text-gray-900">Secured First Major Project</p>
        <p class="mt-1 text-base text-gray-600">
          Landed our first big client, setting the foundation for growth.
        </p>
      </div>
      
      <!-- Timeline Item 3 -->
      <div class="relative">
        <time datetime="2022-02" class="flex items-center text-sm font-semibold text-[#EF4339] relative">
          <svg viewBox="0 0 4 4" class="mr-4 w-2 h-2 flex-none" aria-hidden="true">
            <circle cx="2" cy="2" r="2" fill="currentColor" />
          </svg>
          Feb 2022
          <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-300 
                      sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
               aria-hidden="true"></div>
        </time>
        <p class="mt-6 text-lg font-semibold text-gray-900">Expanded Team</p>
        <p class="mt-1 text-base text-gray-600">
          Grew our workforce, bringing in experts and specialists.
        </p>
      </div>
      
      <!-- Timeline Item 4 -->
      <div class="relative">
        <time datetime="2022-12" class="flex items-center text-sm font-semibold text-[#EF4339] relative">
          <svg viewBox="0 0 4 4" class="mr-4 w-2 h-2 flex-none" aria-hidden="true">
            <circle cx="2" cy="2" r="2" fill="currentColor" />
          </svg>
          Dec 2022
          <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-300 
                      sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
               aria-hidden="true"></div>
        </time>
        <p class="mt-6 text-lg font-semibold text-gray-900">Global Recognition</p>
        <p class="mt-1 text-base text-gray-600">
          Recognized in industry awards for excellence in construction.
        </p>
      </div>
      
    </div>
  </div>
</section>


<!-- Values Section with Icons (Theme-matched Colors and Bottom Spacing) -->
<section class="relative bg-gradient-to-b from-white/70 to-white/100 pb-16 pt-20">
  <!-- Shared Background Grid -->
  <div class="absolute inset-0 pointer-events-none bg-grid-pattern"></div>
  
  <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-extrabold text-[#EF4339]">Our Values</h2>
      <p class="text-lg text-gray-600">Explore the values that define our company.</p>
  </div>
    <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-16">
      
      <!-- Value Item 1 -->
      <div class="relative pl-9">
        <dt class="inline font-semibold text-[#EF4339]">
          <svg class="absolute left-1 top-1 w-5 h-5 text-[#EF4339]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M4.606 12.97a.75.75 0 0 1-.134 1.051 2.494 2.494 0 0 0-.93 2.437 2.494 2.494 0 0 0 2.437-.93.75.75 0 1 1 1.186.918 3.995 3.995 0 0 1-4.482 1.332.75.75 0 0 1-.461-.461 3.994 3.994 0 0 1 1.332-4.482.75.75 0 0 1 1.052.134Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M5.752 12A13.07 13.07 0 0 0 8 14.248v4.002c0 .414.336.75.75.75a5 5 0 0 0 4.797-6.414 12.984 12.984 0 0 0 5.45-10.848.75.75 0 0 0-.735-.735 12.984 12.984 0 0 0-10.849 5.45A5 5 0 0 0 1 11.25c.001.414.337.75.751.75h4.002ZM13 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" clip-rule="evenodd" />
          </svg>
          Be world-class.
        </dt>
        <dd class="inline">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit aute id magna.
        </dd>
      </div>
      
      <!-- Value Item 2 -->
      <div class="relative pl-9">
        <dt class="inline font-semibold text-[#EF4339]">
          <svg class="absolute left-1 top-1 w-5 h-5 text-[#EF4339]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M11 2a1 1 0 1 0-2 0v6.5a.5.5 0 0 1-1 0V3a1 1 0 1 0-2 0v5.5a.5.5 0 0 1-1 0V5a1 1 0 1 0-2 0v7a7 7 0 1 0 14 0V8a1 1 0 1 0-2 0v3.5a.5.5 0 0 1-1 0V3a1 1 0 1 0-2 0v5.5a.5.5 0 0 1-1 0V2Z" clip-rule="evenodd" />
          </svg>
          Take responsibility.
        </dt>
        <dd class="inline">
          Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
        </dd>
      </div>
      
      <!-- Value Item 3 -->
      <div class="relative pl-9">
        <dt class="inline font-semibold text-[#EF4339]">
          <svg class="absolute left-1 top-1 w-5 h-5 text-[#EF4339]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 6.484 6.484 0 0 0-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 0 1-2.07-.655ZM16.44 15.98a4.97 4.97 0 0 0 2.07-.654.78.78 0 0 0 .357-.442 3 3 0 0 0-4.308-3.517 6.484 6.484 0 0 1 1.907 3.96 2.32 2.32 0 0 1-.026.654ZM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM5.304 16.19a.844.844 0 0 1-.277-.71 5 5 0 0 1 9.947 0 .843.843 0 0 1-.277.71A6.975 6.975 0 0 1 10 18a6.974 6.974 0 0 1-4.696-1.81Z" />
          </svg>
          Be supportive.
        </dt>
        <dd class="inline">
          Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus voluptas blanditiis et.
        </dd>
      </div>
      
      <!-- Value Item 4 -->
      <div class="relative pl-9">
        <dt class="inline font-semibold text-[#EF4339]">
          <svg class="absolute left-1 top-1 w-5 h-5 text-[#EF4339]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z" clip-rule="evenodd" />
          </svg>
          Always learning.
        </dt>
        <dd class="inline">
          Iure sed ab. Aperiam optio placeat dolor facere. Officiis pariatur eveniet atque et dolor.
        </dd>
      </div>
      
      <!-- Value Item 5 -->
      <div class="relative pl-9">
        <dt class="inline font-semibold text-[#EF4339]">
          <svg class="absolute left-1 top-1 w-5 h-5 text-[#EF4339]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M15.98 1.804a1 1 0 0 0-1.96 0l-.24 1.192a1 1 0 0 1-.784.785l-1.192.238a1 1 0 0 0 0 1.962l1.192.238a1 1 0 0 1 .785.785l.238 1.192a1 1 0 0 0 1.962 0l.238-1.192a1 1 0 0 1 .785-.785l1.192-.238a1 1 0 0 0 0-1.962l-1.192-.238a1 1 0 0 1-.785-.785l-.238-1.192Z" />
          </svg>
          Share everything you know.
        </dt>
        <dd class="inline">
          Laudantium tempora sint ut consectetur ratione. Ut illum ut rem numquam fuga delectus.
        </dd>
      </div>
      
      <!-- Value Item 6 -->
      <div class="relative pl-9">
        <dt class="inline font-semibold text-[#EF4339]">
          <svg class="absolute left-1 top-1 w-5 h-5 text-[#EF4339]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z" />
          </svg>
          Enjoy downtime.
        </dt>
        <dd class="inline">
          Culpa dolorem voluptatem velit autem rerum qui et corrupti. Quibusdam quo placeat.
        </dd>
      </div>
      
    </dl>
  </div>
</section>

@endsection
