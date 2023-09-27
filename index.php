<!DOCTYPE html>
<html>
<?php include("src/partials/head.php") ?>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php") ?>
  <section>
    <div class="bg-black/50 absolute w-full h-screen flex items-center">
      <div class="px-[125px] grid grid-cols-2 items-center">
        <div class="mr-5">
          <h1 class="font-extrabold text-[64px] text-white mb-4">Bali Triangle Trip</h1>
          <p class="text-white mb-7 text-xl text-justify">Welcome to the Bali Triangle Trip, your ultimate journey into the heart of Bali's enchanting paradise. Immerse yourself in a world where natural beauty, vibrant culture, and thrilling activities converge to create memories that will last a lifetime.</p>
          <button class="bg-[#1A7472] font-bold w-[146px] h-[45px] text-white">Book Now</button>
        </div>
        <div class="flex justify-center ml-[130px]">
            <img src="public/images/pexels-oleksandr-p-2166559.jpg" alt="" class="h-[355px] w-[258px] object-cover">
        </div>
      </div>
    </div>
    <img src="public/images/pexels-daniel-torobekov-5277705.jpg" alt="" class="w-full h-screen">
  </section>
  <section>
    <div class="grid grid-cols-2 px-[125px] pt-[116px] pb-[114px] flex">
      <div>
        <div class="w-[420px] mb-4">
          <p class="font-extrabold text-4xl text-[#1A7472]">The Ultimate Exprience</p>
          <h2 class="font-extrabold text-4xl text-[#1A7472] mb-4">Explore The Island God</h2>
          <p class="text-[#283325] text-xl">Bali's rich culture and artistic heritage are on full display during your journey. Witness captivating traditional dance performances, explore local markets brimming with handcrafted treasures, and even try your hand at Balinese painting or cooking classes.</p>
        </div>
        <button class="bg-[#1A7472] font-bold w-[146px] h-[45px] text-white">Book Now</button>
      </div>
      <div>
        <div class="flex">
          <img src="public/images/pexels-oleksandr-p-2166608.jpg" alt="" class="w-[217px] h-[302px] mr-4 object-cover">
          <img src="public/images/pexels-oleksandr-p-2100804.jpg" alt="" class="w-[217px] h-[302px] object-cover">
        </div>
      </div>
    </div>
  </section>
  <section>
    <!-- TODO: ubah jadikan padding -->
    <div class="pt-[22px] pb-[149px]">
      <div class="mb-[30px] text-center">
        <p class="font-extrabold text-4xl text-[#1A7472]">Explore</p>
        <h2 class="font-extrabold text-4xl text-[#1A7472] mb-4">Our Services</h2>
        <p class="text-[#283325] text-xl">Are your ready to embark on a journey filled with adventure, culture and relaxation?</p>
      </div>
      <div class="flex justify-center">
        <div class="grid grid-cols-3 gap-4">
          <div class="">
            <img src="public/images/pexels-jonathan-borba-5563472.jpg" alt="" class="w-[328px] h-[302px] object-cover">
            <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
              <p class="font-bold text-white">Accomodation</p>
            </div>
          </div>
          <div class="">
            <img src="public/images/pexels-agus-nanda-15088860.jpg" alt="" class="w-[328px] h-[302px] object-cover">
            <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
              <p class="font-bold text-white">Art & Culture</p>
            </div>
          </div>
          <div class="">
            <img src="public/images/pexels-arthouse-studio-4571926.jpg" alt="" class="w-[328px] h-[302px] object-cover">
            <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
              <p class="font-bold text-white">Activity</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include("src/partials/footer.php") ?>
</body>

</html>