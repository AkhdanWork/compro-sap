<footer class="bg-red text-white p-6 lg:p-12">
      <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-12">
        <div class="flex flex-col items-center">
          <img src="{{asset ('img/logo_putih.jpg')}}" class="w-24 lg:w-36 rounded" alt="">
          <div class="text-md mt-4 font-bold text-center">PT Setia Alfa Perkasa Enterprise</div>
        </div>
        <div>
          <div class="text-xl font-bold text-center lg:text-left">About Us</div>
          <div class="text-sm mt-2 text-center lg:text-left">
            SAP Enterprise is a company engaged in MICE, event organizer, graphic design, and IT solution services and more. We aspire to become a leading company in this industry, focusing on innovation, quality, and customer satisfaction. With an experienced and expert team, we are committed to delivering high-quality services with optimal value-added to our clients.
          </div>
        </div>
        <div>
          <div class="text-xl font-bold text-center lg:text-left">Contact Us</div>
          <div class="my-2 text-center lg:text-left">
            <div class="font-bold">PT Setia Alfa Perkasa Enterprise</div>
            <div class="text-sm">
              Komp. Grand Arafah, Jl. Aluminium No.5, Sei Sikambing C. II, Medan Helvetia, Medan City, North Sumatra 20123
            </div>
          </div>
          <ul class="text-md text-center lg:text-left">
            <li><a href="https://wa.me/6282268105632?text=Hello%2C%20I%20am%20interested%20in%20your%20MICE%20services.%20Can%20you%20provide%20more%20details%20about%20your%20events%20and%20conferences%3F" target="_blank" rel="nofollow noopener" title="Send chat to Admin"><i class="bi bi-whatsapp"></i> (+62) 822 6810 5632 - SAP Enterprise</a></li>
            <li><a href="https://wa.me/6282283880353?text=Hello%2C%20I%20am%20interested%20in%20your%20MICE%20services.%20Can%20you%20provide%20more%20details%20about%20your%20events%20and%20conferences%3F" target="_blank" rel="nofollow noopener" title="Send chat to Rizal"><i class="bi bi-whatsapp"></i> (+62) 822 8388 0353 - Rizal</a></li>
            <li><a href="https://wa.me/6282366181893?text=Hello%2C%20I%20am%20interested%20in%20your%20MICE%20services.%20Can%20you%20provide%20more%20details%20about%20your%20events%20and%20conferences%3F" target="_blank" rel="nofollow noopener" title="Send chat to Khairi"><i class="bi bi-whatsapp"></i> (+62) 823 6618 1893 - Khairi</a></li>
            <li><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=office@sap-enterprise.com" target="_blank" rel="nofollow noopener" title="Send email with Gmail"><i class="bi bi-envelope"></i> office@sap-enterprise.com</a></li>
            <li><a href="#"><i class="bi bi-globe2"></i> www.sap-enterprise.com</a></li>
          </ul>
        </div>
        <div class="col-span-1 lg:col-span-3 text-center mt-4 lg:mt-0">
          copyright © PT Setia Alfa Perkasa Enterprise 2024
        </div>
      </div>
    </footer>
    <script src="{{ asset('js/wow.js') }}"></script>
<script>
  document.getElementById('navToggle').addEventListener('click', function() {
    var navMenu = document.getElementById('navMenu');
    if (navMenu.classList.contains('hidden')) {
        navMenu.classList.remove('hidden');
    } else {
        navMenu.classList.add('hidden');
    }
});
</script>
<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
  document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
  };
</script>
<script src="{{ asset('js/jquery.js') }}"></script>