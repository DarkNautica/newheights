@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Contact Page with Styled Sections -->
<section class="relative bg-gradient-to-b from-white/50 to-white/100 py-20 pt-40">
  <!-- Shared Background Grid -->
  <div class="absolute inset-0 pointer-events-none bg-grid-pattern"></div>

  <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
    <!-- Contact Information Section -->
    <div class="mx-auto max-w-2xl divide-y divide-gray-200 lg:mx-0 lg:max-w-none">
      <div class="grid grid-cols-1 gap-10 py-16 lg:grid-cols-3">
        <div>
          <h2 class="text-4xl font-extrabold text-[#EF4339] tracking-tight">Get in Touch</h2>
          <p class="mt-4 text-lg text-gray-600">
            We’d love to hear from you! Reach out to us via email or phone.
          </p>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
          @foreach([
            ['title' => 'Collaborate', 'email' => 'collaborate@example.com', 'phone' => '+1 (555) 905-2345'],
            ['title' => 'Press', 'email' => 'press@example.com', 'phone' => '+1 (555) 905-3456'],
            ['title' => 'Join our team', 'email' => 'careers@example.com', 'phone' => '+1 (555) 905-4567'],
            ['title' => 'Say hello', 'email' => 'hello@example.com', 'phone' => '+1 (555) 905-5678'],
          ] as $contact)
          <div class="rounded-2xl bg-gradient-to-b from-white/60 to-white/80 p-10 shadow-lg">
            <h3 class="text-lg font-semibold text-gray-900">{{ $contact['title'] }}</h3>
            <dl class="mt-3 space-y-1 text-sm text-gray-600">
              <div>
                <dt class="sr-only">Email</dt>
                <dd><a class="font-semibold text-[#EF4339]" href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></dd>
              </div>
              <div class="mt-1">
                <dt class="sr-only">Phone number</dt>
                <dd>{{ $contact['phone'] }}</dd>
              </div>
            </dl>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Locations Section -->
      <div class="grid grid-cols-1 gap-10 py-16 lg:grid-cols-3">
        <div>
          <h2 class="text-4xl font-extrabold text-[#EF4339] tracking-tight">Our Locations</h2>
          <p class="mt-4 text-lg text-gray-600">
            Find us in major cities around the world.
          </p>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
          @foreach([
            ['city' => 'Los Angeles', 'address' => '4556 Brendan Ferry', 'state' => 'Los Angeles, CA 90210'],
            ['city' => 'New York', 'address' => '886 Walter Street', 'state' => 'New York, NY 12345'],
            ['city' => 'Toronto', 'address' => '7363 Cynthia Pass', 'state' => 'Toronto, ON N3Y 4H8'],
            ['city' => 'Chicago', 'address' => '726 Mavis Island', 'state' => 'Chicago, IL 60601'],
          ] as $location)
          <div class="rounded-2xl bg-gradient-to-b from-white/60 to-white/80 p-10 shadow-lg">
            <h3 class="text-lg font-semibold text-gray-900">{{ $location['city'] }}</h3>
            <address class="mt-3 space-y-1 text-sm not-italic text-gray-600">
              <p>{{ $location['address'] }}</p>
              <p>{{ $location['state'] }}</p>
            </address>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
