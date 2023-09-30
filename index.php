<!DOCTYPE html>
<html>
<?php include("src/partials/head.php") ?>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php") ?>
  <section>
    <!-- bg-black/30  -->
    <div class="xl:px-[125px] 2xl:px-[225px] pt-20 h-screen bg-cover bg-center flex items-center" style="background-image:url('public/images/comingsoon.jpg');">
      <div class="">
        <div class="grid grid-cols-3 items-center">
          <div class="col-span-2">
            <div class="mr-[20%]">
              <h1 class="font-extrabold text-[64px] font-['almarai'] text-white mb-4">Bali Triangle Trip</h1>
              <p class="text-white mb-7 text-xl tracking-wider font-['almarai'] text-justify">Welcome to the Bali Triangle Trip, your ultimate journey into the heart of Bali's enchanting paradise. Immerse yourself in a world where natural beauty, vibrant culture, and thrilling activities converge to create memories that will last a lifetime.</p>
              <button class="bg-[#1A7472] font-['almarai'] font-bold w-[146px] h-[45px] text-white">Book Now</button>
            </div>
          </div>
          <!--  ml-[130px] -->
          <div class="col-span-1 flex justify-end">
            <!--  h-[365px]  w-[268px] 2xl:h-[680px]2xl:w-[496px] -->
            <img src="public/images/pexels-oleksandr-p-2166559.jpg" alt="" class="xl:h-[385px] xl:w-[288px] 2xl:h-[485px] 2xl:w-[388px] object-cover shadow-[0px_4px_19px_18px_rgba(0,0,0,0.3)]">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="grid grid-cols-2 xl:px-[125px] 2xl:px-[225px] pt-[116px] pb-[114px]">
      <div>
        <div class="mb-4">
          <p class="text-4xl text-[#1A7472] font-['allan']">The Ultimate Exprience</p>
          <h2 class="font-extrabold text-4xl font-['almarai'] text-[#1A7472] mb-4">Explore The Island God</h2>
          <p class="text-[#283325] text-xl tracking-wider font-['almarai']">Bali's rich culture and artistic heritage are on full display during your journey. Witness captivating traditional dance performances, explore local markets brimming with handcrafted treasures, and even try your hand at Balinese painting or cooking classes.</p>
        </div>
        <button class="bg-[#1A7472] font-bold font-['almarai'] w-[146px] h-[45px] text-white">Book Now</button>
      </div>
      <div>
        <div class="flex justify-end">
          <img src="public/images/pexels-oleksandr-p-2166608.jpg" alt="" class="xl:w-[217px] xl:h-[302px] 2xl:w-[317px] 2xl:h-[402px] mr-4 object-cover">
          <img src="public/images/pexels-oleksandr-p-2100804.jpg" alt="" class="xl:w-[217px] xl:h-[302px] 2xl:w-[317px] 2xl:h-[402px] object-cover">
        </div>
      </div>
    </div>
  </section>
  <section>
    <!-- TODO: ubah jadikan padding -->
    <div class="pt-[22px] pb-[149px]">
      <div class="mb-[30px] text-center">
        <p class="font-['allan'] text-4xl text-[#1A7472]">Explore</p>
        <h2 class="font-['almarai'] font-extrabold text-4xl text-[#1A7472] mb-4">Our Services</h2>
        <p class="tracking-wider font-['almarai'] text-[#283325] text-xl">Are your ready to embark on a journey filled with adventure, culture and relaxation?</p>
      </div>
      <div class="flex justify-center">
        <div class="grid grid-cols-3 gap-4">
          <div class="">
            <img src="public/images/pexels-jonathan-borba-5563472.jpg" alt="" class="xl:w-[328px] xl:h-[302px] 2xl:w-[410px] 2xl:h-[384px] object-cover">
            <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
              <p class="font-['almarai'] font-bold text-white">Accomodation</p>
            </div>
          </div>
          <div class="">
            <img src="public/images/pexels-agus-nanda-15088860.jpg" alt="" class="xl:w-[328px] xl:h-[302px] 2xl:w-[410px] 2xl:h-[384px] object-cover">
            <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
              <p class="font-['almarai'] font-bold text-white">Art & Culture</p>
            </div>
          </div>
          <div class="">
            <img src="public/images/pexels-arthouse-studio-4571926.jpg" alt="" class="xl:w-[328px] xl:h-[302px] 2xl:w-[410px] 2xl:h-[384px] object-cover">
            <div class="bg-[#1A7472] h-[34px] flex items-center justify-center">
              <p class="font-['almarai'] font-bold text-white">Activity</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include("src/partials/footer.php") ?>
</body>

</html>