@php
    $socialMedia = \App\Models\SocialMedia::active()->ordered()->get();
@endphp

<footer class="bg-white text-black py-8 lg:py-12 border-t">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      
      <div>
        <h3 class="text-sm lg:text-lg font-semibold mb-3">Company</h3>
        <ul class="space-y-2">
          <li><a href="{{ route('about') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">About Us</a></li>
          <li><a href="{{ route('about') }}#vision" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Vision & Values</a></li>
          <li><a href="{{ route('about') }}#why-us" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Why Choose Us</a></li>
          <li><a href="{{ route('home') }}#qoutes" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Testimonials</a></li>
          <li><a href="{{ route('contact') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Contact</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-sm lg:text-lg font-semibold mb-3">Our Services</h3>
        <ul class="space-y-2">
          <li><a href="{{ route('service') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Event Planner & Organizer</a></li>
          <li><a href="{{ route('service') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Wedding Organizer</a></li>
          <li><a href="{{ route('service') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">3D Modelling & Rendering</a></li>
          <li><a href="{{ route('service') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Graphic Design & IT Solutions</a></li>
          <li><a href="{{ route('service') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Branding & Advertising</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-sm lg:text-lg font-semibold mb-3">Resources</h3>
        <ul class="space-y-2">
          <li><a href="{{ route('contact') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">FAQs</a></li>
          <li><a href="{{ route('contact') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Request a Quotation</a></li>
          <li><a href="{{ route('contact') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Book a Consultation</a></li>
          <li><a href="{{ route('projects.all') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Case Studies</a></li>
          <li><a href="{{ route('projects.all') }}" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Portfolio</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-sm lg:text-lg font-semibold mb-3">Legal</h3>
        <ul class="space-y-2">
          <li><a href="#" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Privacy Policy</a></li>
          <li><a href="#" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Terms & Conditions</a></li>
          <li><a href="#" class="text-xs lg:text-sm text-gray-600 hover:text-gray-900 transition">Cookies Policy</a></li>
        </ul>
      </div>

    </div>

    <div class="border-t pt-6 lg:pt-8">
      <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
        
        <div class="flex-shrink-0">
          <img src="{{asset('img/logo-expand.png')}}" class="h-12" alt="SAP Enterprise Logo">
        </div>

        @if($socialMedia->count() > 0)
        <div class="flex items-center gap-3">
          <span class="text-xs lg:text-sm font-semibold text-gray-700">Follow Us:</span>
          <div class="flex gap-2">
            @foreach($socialMedia as $social)
            <a href="{{ $social->url }}" target="_blank" rel="nofollow noopener" 
               class="w-9 h-9 bg-none rounded-full flex items-center justify-center hover:bg-red-600 hover:text-white transition-all duration-300"
               title="{{ $social->platform }}">
                {!! $social->icon_svg !!}
            </a>
            @endforeach
          </div>
        </div>
        @endif

      </div>
    </div>

  </div>
</footer>

<script src="{{ asset('js/wow.js') }}"></script>
<script>
  wow = new WOW({
    animateClass: 'animated',
    offset: 100,
  });
  wow.init();
</script>