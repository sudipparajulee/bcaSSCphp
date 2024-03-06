
<footer class="pt-10">
        <div class="bg-blue-700 text-white px-14 py-8 grid md:grid-cols-3 gap-10">
            <div>
                <h2 class="text-2xl font-bold">Contact Us</h2>
                <p class="font-bold text-xl">Magestic Mountain Adventure & Tours</p>
                <p class="mt-4">Bharatpur, Chitwan <br>
                    +977-9855090899 <br>
                    info@mmatnepal.com</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold">Subscribe Newsletter</h2>
                <form action="">
                    <input type="text" placeholder="Email Address" class="bg-transparent border rounded-lg p-2 block placeholder:text-white">
                    <button class="block mt-2 bg-white px-10 text-black rounded-lg py-2">Subscribe</button>
                </form>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-2">Certificate & Partners</h2>
                <img src="https://mmatnepal.com/images/footer-image.jpeg" alt="">
            </div>
        </div>
        <div class="px-14 py-4 bg-blue-900 text-gray-200 flex md:flex-row flex-col justify-between items-center">
            <p> &copy; 2024 All Right Reserved | MMAT NEPAL | Designed and Developed By BITS</p>
            <div class="flex items-center">
                We accept:  
                <img src="https://mmatnepal.com/images/visa.jpeg" alt="">
                <img src="https://mmatnepal.com/images/connectips.png" alt="">
                <img src="https://mmatnepal.com/images/esewa.png" alt="">
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        new WOW().init();
    </script>

    <script>
        const swiper = new Swiper('.swiper1', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
      delay: 3000,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
    </script>

<script>
    const swiper2 = new Swiper('.swiper2', {
// Optional parameters
direction: 'horizontal',
loop: true,
autoplay: {
  delay: 3000,
},
slidesPerView: 3,
spaceBetween: 30,

// If we need pagination
pagination: {
el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},

// And if we need scrollbar
scrollbar: {
el: '.swiper-scrollbar',
},
});
</script>


<script>
    function controlNav()
    {
        var menu = document.getElementById('menu');
        if(menu.style.display == 'block')
        {
            menu.style.display = 'none';
        }
        else
        {
            menu.style.display = 'block';
        }
    }
</script>
</body>
</html>