<!DOCTYPE html>
<html lang="en">
<?php include("src/partials/head.php") ?>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php");
  $brds = ['Activity', 'Rafting']
  ?>
  <main>
    <section>
      <div class="cs-banner-bg relative w-full bg-cover bg-center" style="background-image: url(public/images/pexels-asad-photo-maldives-3155666.jpg)">
        <div class="relative">
          <div class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] h-auto pt-[115px] pb-[62px] flex items-center">
            <div class="lg:w-1/2">
              <h1 class="font-['almarai'] font-extrabold text-[34px] sm:text-[44px] lg:text-[55px] xl:text-[64px] text-white mb-4">Activity</h1>
              <ul class="flex">
                <?php
                $count = 0;
                foreach ($brds as $brd) : ?>
                  <?php if ($count > 0) : ?>
                    <li class="mr-1.5 ml-1.5 tracking-wider font-['almarai'] text-white mb-7 text-[15px] text-justify">/</li>
                  <?php endif; ?>
                  <li class="tracking-wider font-['almarai'] text-white mb-7 text-[15px] text-justify"><?= $brd; ?></li>
                <?php $count++;
                endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] pt-[55px]">
      <div class="carousel-container">
        <div class="px-1 sm:px-2.5">
          <img src="public/images/activity/1.jpg" alt="" />
        </div>
        <div class="px-1 sm:px-2.5">
          <img src="public/images/activity/2.jpg" alt="" />
        </div>
        <div class="px-1 sm:px-2.5">
          <img src="public/images/activity/3.jpg" alt="" />
        </div>
        <div class="px-1 sm:px-2.5">
          <img src="public/images/activity/4.jpg" alt="" />
        </div>
        <div class="px-1 sm:px-2.5">
          <img src="public/images/activity/5.jpg" alt="" />
        </div>
      </div>
    </section>
    <section class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] pt-[45px] pb-[63px]">
      <!-- <div class="grid grid-rows-2 gap-[30px]"> -->
      <article class="mb-[30px] py-4 md:py-10 px-4 md:px-9 bg-white">
        <div class="sm:flex w-full sm:justify-between mb-8">
          <div>
            <h1 class="font-['almarai'] mb-2 sm:mb-0 font-bold text-2xl sm:text-3xl lg:text-4xl text-[#1A7472]">Rafting</h1>
          </div>
          <div class="">
            <p class="font-['almarai'] font-bold  text-2xl sm:text-3xl lg:text-4xl text-[#53581E]">$160/Pax</p>
          </div>
        </div>
        <p class="font-['almarai'] mb-2 text-sm text-[#9DA1A2]">
          Embark on a journey through nature's most breathtaking landscapes, from winding rivers to awe-inspiring canyons. Our rafting trips not only promise an exhilarating ride through challenging rapids but also provide a unique perspective on the scenic beauty that surrounds you. Capture the essence of the great outdoors as you navigate the waters with friends and family, creating memories that will last a lifetime.
        </p>
        <br>
        <p class="font-['almarai'] mb-2 text-sm text-[#9DA1A2]">
          Discover the freedom to tailor your experience with our customizable rafting packages. Whether it's a day trip or an extended expedition, we offer flexibility to suit your preferences and schedule. Booking your dream rafting adventure is a breeze with our user-friendly website – just a few clicks stand between you and the thrill of the rapids.
        </p>
        <br>
        <p class="font-['almarai'] mb-2 text-sm text-[#9DA1A2]">
          Join a community of like-minded individuals who share your passion for the great outdoors. Connect with fellow adventure enthusiasts, share stories, and build lasting friendships through the shared experiences of rafting on some of the world's most captivating rivers.
        </p>
      </article>
      <!-- <article class="mb-[30px] sm:mb-0 py-4 md:py-10 px-4 md:px-9 bg-white">
        <div>
          <h1 class="font-['almarai'] font-bold text-2xl sm:text-3xl lg:text-4xl text-[#1A7472]">Amenities</h1>
        </div>
        <div class="py-8">
          <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 xl:flex gap-2 mb-2">
            <div class="border p-3 flex mb-2 sm:mb-0 xl:w-[12%]">
              <i class="fa-solid fa-house mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Houses</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 xl:w-[18%]">
              <i class="fa-solid fa-mug-saucer mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Superb breakfast</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 xl:w-[22%]">
              <i class="fa-solid fa-person-swimming mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Outdoor swimming pool</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 xl:w-[15%]">
              <i class="fa-solid fa-square-parking mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Free parking</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 xl:w-[15%]">
              <i class="fa-solid fa-utensils mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Restaurant</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 xl:w-[18%]">
              <i class="fa-solid fa-van-shuttle mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Airport shuttle</p>
            </div>
          </div>
          <div class="sm:grid sm:grid-cols-2 lg:flex gap-2">
            <div class="border p-3 flex mb-2 sm:mb-0 lg:w-[23%] xl:w-full">
              <i class="fa-solid fa-shop mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Balcony</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 lg:w-[23%] xl:w-full">
              <i class="fa-solid fa-wifi mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Free WiFi</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 lg:w-[31%] xl:w-full">
              <i class="fa-solid fa-spa mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Spa and wellness center</p>
            </div>
            <div class="border p-3 flex mb-2 sm:mb-0 lg:w-[23%] xl:w-full">
              <i class="fa-solid fa-bath mr-3 text-[#9DA1A2]"></i>
              <p class="font-['almarai'] text-sm text-[#9DA1A2]">Hot tub</p>
            </div>
          </div>
        </div>
      </article> -->
      <!-- </div> -->
    </section>
    <!-- <section class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] flex pb-[63px]">
      <div class="sm:grid sm:grid-cols-3 sm:gap-[15px]">
        <article>
          <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-thorsten-technoman-338504.jpg')"></div>
          <div class="mb-[30px] sm:mb-0 py-4 md:py-5 px-4 md:px-6 bg-white">
            <div class="mb-3">
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
            </div>
            <div class="mb-[11px] flex w-full justify-between">
              <div>
                <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Alila Villa</h1>
              </div>
              <div class="">
                <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
              </div>
            </div>
            <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
            <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
          </div>
        </article>
        <article>
          <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/accommodation-1.jpg')"></div>
          <div class="mb-[30px] sm:mb-0 py-4 md:py-5 px-4 md:px-6 bg-white">
            <div class="mb-3">
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
            </div>
            <div class="mb-[11px] flex w-full justify-between">
              <div>
                <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Alila Villa</h1>
              </div>
              <div class="">
                <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
              </div>
            </div>
            <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
            <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
          </div>
        </article>
        <article>
          <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/accommodation-1.jpg')"></div>
          <div class="mb-[30px] sm:mb-0 py-4 md:py-5 px-4 md:px-6 bg-white">
            <div class="mb-3">
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
              <i class="fa-solid fa-star text-[#FFA500] text-1"></i>
            </div>
            <div class="mb-[11px] flex w-full justify-between">
              <div>
                <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Alila Villa</h1>
              </div>
              <div class="">
                <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
              </div>
            </div>
            <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
            <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
          </div>
        </article>
      </div>
    </section> -->
  </main>
  <?php include("src/partials/footer.php") ?>
</body>

</html>