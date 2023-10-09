<!DOCTYPE html>
<html lang="en">
<?php include("src/partials/head.php") ?>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php") ?>
  <main>
    <section>
      <div class="cs-banner-bg relative w-full bg-cover bg-center" style="background-image: url(public/images/pexels-kachonk-adventure-17956745.jpg)">
        <div class="relative">
          <div class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] h-auto pt-[115px] pb-[62px] flex items-center">
            <div class="lg:w-1/2">
              <h1 class="font-['almarai'] font-extrabold text-[34px] sm:text-[44px] lg:text-[55px] xl:text-[64px] text-white mb-4">Activities</h1>
              <p class="tracking-wider font-['almarai'] text-white mb-7 md:text-base xl:text-xl text-justify">Get ready for exhilarating adventures as you explore Bali's diverse landscapes. From surfing the legendary waves of Uluwatu to trekking through emerald rice terraces in Ubud and snorkeling amidst vibrant coral reefs, our curated activities promise an adrenaline rush and deep connection with nature.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="show-side-mob" class="fixed z-10 right-2">
      <button type="button" value="true" class="bg-white w-[25px] lg:hidden shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] rounded-full text-base text-center"><i class="fa-xs fa-solid fa-magnifying-glass"></i></button>
    </div>
    <div id="sidebar-mob" class="lg:hidden z-10 fixed top-20 h-full right-0 bg-white w-0 transition-all duration-1000 ease-out py-5 px-0 md:w-[25%]">
      <?php include("src/partials/aside.php") ?>
    </div>
    <section>
      <div class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] flex pt-[87px] pb-[63px]">
        <!-- w-[60%]  -->
        <div class="w-full lg:w-[75%]">
          <div class="sm:grid sm:grid-rows-3 sm:gap-[30px]">
            <div class="sm:grid sm:grid-cols-2 sm:gap-7 lg:mr-7">
              <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-helena-lopes-4453153.jpg')">
                </div>
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
                      <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Hikking</h1>
                    </div>
                    <div class="">
                      <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
                    </div>
                  </div>
                  <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
                  <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
                </div>
              </article>
              <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-tatiana-syrikova-3932687.jpg')">
                </div>
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
                      <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Trekking</h1>
                    </div>
                    <div>
                      <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
                    </div>
                  </div>
                  <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
                  <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
                </div>
              </article>
            </div>
            <div class="sm:grid sm:grid-cols-2 sm:gap-7 lg:mr-7">
              <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-andrea-piacquadio-3771805.jpg')">
                </div>
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
                      <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Cycling</h1>
                    </div>
                    <div class="">
                      <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
                    </div>
                  </div>
                  <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
                  <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
                </div>
              </article>
              <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-daniel-torobekov-5277705.jpg')">
                </div>
                <!-- <img src="public/images/pexels-daniel-torobekov-5277705.jpg" alt="" class="h-1610px]lgl:h-[261px] 2xl:h-[3461x] w-auto object-cover"> -->
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
                      <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Surf</h1>
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
            <div class="sm:grid sm:grid-cols-2 sm:gap-7 lg:mr-7">
              <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-daniel-torobekov-6961669.jpg')">
                </div>
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
                      <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Diving</h1>
                    </div>
                    <div class="">
                      <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]">$160/night</p>
                    </div>
                  </div>
                  <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]">Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence. </p>
                  <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
                </div>
              </article>
              <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('public/images/pexels-alexandre-saraiva-carniato-1644724.jpg')">
                </div>
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
                      <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]">Surfing</h1>
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
          </div>
        </div>
        <div class="hidden lg:block md:w-[25%] relative">
          <?php include("src/partials/aside.php") ?>
        </div>
      </div>
    </section>
  </main>
  <?php include("src/partials/footer.php") ?>
</body>

</html>