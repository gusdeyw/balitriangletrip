<!DOCTYPE html>
<html>
<?php include("src/partials/head.php") ?>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php") ?>
  <main>
    <section>
      <div class="md:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] pt-20 h-screen bg-cover bg-center flex items-center" style="background-image:url(public/images/comingsoon.jpg);">
        <div class="">
          <div class="grid grid-cols-3 items-center">
            <div class="col-span-2">
              <div class="mr-[20%]">
                <h1 class="font-extrabold md:text-[44px] lg:text-[55px] xl:text-[64px] font-['almarai'] text-white mb-4">Bali Triangle Trip</h1>
                <p class="text-white mb-7 md:text-lg xl:text-xl tracking-wider font-['almarai'] text-justify">Welcome to the Bali Triangle Trip, your ultimate journey into the heart of Bali's enchanting paradise. Immerse yourself in a world where natural beauty, vibrant culture, and thrilling activities converge to create memories that will last a lifetime.</p>
                <button class="bg-[#1A7472] font-['almarai'] font-bold w-[146px] h-[45px] text-white">Book Now</button>
              </div>
            </div>
            <div class="col-span-1 flex justify-end">
              <img src="public/images/pexels-oleksandr-p-2166559.jpg" alt="" class="lg:h-[340px] lg:w-[243px] xl:h-[385px] xl:w-[288px] 2xl:h-[485px] 2xl:w-[388px] object-cover shadow-[0px_4px_19px_18px_rgba(0,0,0,0.3)]">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="grid grid-cols-2 md:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] pt-[116px] pb-[114px]">
        <div>
          <p class="md:text-3xl xl:text-4xl text-[#1A7472] font-['allan']">The Ultimate Exprience</p>
          <h2 class="font-extrabold md:text-3xl xl:text-4xl font-['almarai'] text-[#1A7472] mb-4">Explore The Island God</h2>
          <p class="text-[#283325] md:text-lg xl:text-xl tracking-wider font-['almarai'] mb-4">Bali's rich culture and artistic heritage are on full display during your journey. Witness captivating traditional dance performances, explore local markets brimming with handcrafted treasures, and even try your hand at Balinese painting or cooking classes.</p>
          <button class="bg-[#1A7472] font-bold font-['almarai'] w-[146px] h-[45px] text-white">Book Now</button>
        </div>
        <div>
          <div class="flex justify-end">
            <img src="public/images/pexels-oleksandr-p-2166608.jpg" alt="" class="md:w-[155px] lg:w-[172px] lg:h-[257px] xl:w-[217px] xl:h-[302px] 2xl:w-[300px] 2xl:h-[385px] mr-4 object-cover">
            <img src="public/images/pexels-oleksandr-p-2100804.jpg" alt="" class="md:w-[155px] lg:w-[172px] lg:h-[257px] xl:w-[217px] xl:h-[302px] 2xl:w-[300px] 2xl:h-[385px] object-cover">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="md:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] pt-[22px] pb-[149px]">
        <div class="mb-[30px] text-center">
          <p class="font-['allan'] md:text-3xl xl:text-4xl text-[#1A7472]">Explore</p>
          <h2 class="font-['almarai'] font-extrabold md:text-3xl xl:text-4xl text-[#1A7472] mb-4">Our Services</h2>
          <p class="tracking-wider font-['almarai'] text-[#283325] md:text-lg xl:text-xl">Are your ready to embark on a journey filled with adventure, culture and relaxation?</p>
        </div>
        <div class="grid grid-cols-3 gap-4">
          <div class="bg-cover bg-center relative pt-[100%]" style="background-image:url(public/images/pexels-jonathan-borba-5563472.jpg)">
            <div class="relative">
              <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
                <p class="font-['almarai'] font-bold text-white">Accomodation</p>
              </div>
            </div>
          </div>
          <div class="bg-cover bg-center relative pt-[100%]" style="background-image:url(public/images/pexels-agus-nanda-15088860.jpg)">
            <div class="relative">
              <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
                <p class="font-['almarai'] font-bold text-white">Art & Culture</p>
              </div>
            </div>
          </div>
          <div class="bg-cover bg-center relative pt-[100%]" style="background-image:url(public/images/pexels-arthouse-studio-4571926.jpg)">
            <div class="relative">
              <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
                <p class="font-['almarai'] font-bold text-white">Activity</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include("src/partials/footer.php") ?>
</body>

</html>