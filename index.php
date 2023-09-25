<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once "import/import.php"; ?>
</head>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php") ?>
  <section>
    <div class="bg-black/40 absolute w-full h-screen flex items-center">
      <div class="px-[125px] flex items-center">
        <div class="flex-initial w-3/5">
          <h1 class="font-extrabold text-[64px] text-white mb-5">Bali Triangle Trip</h1>
          <p class="text-white mb-7 text-xl">Welcome to the Bali Triangle Trip, your ultimate journey into the heart of Bali's enchanting paradise. Immerse yourself in a world where natural beauty, vibrant culture, and thrilling activities converge to create memories that will last a lifetime.</p>
          <button class="bg-[#1A7472] font-bold w-[146px] h-[45px] text-white">Book Now</button>
        </div>
        <div class="flex-initial w-2/5">
          <div class="flex justify-center">
            <div class="h-[355px] w-[258px]">
              <img src="public/images/pexels-oleksandr-p-2166559.jpg" alt="" class="h-[355px] w-[258px] object-cover">
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="public/images/pexels-daniel-torobekov-5277705.jpg" alt="" class="w-full h-screen">
  </section>
  <section>
    <div class="h-[532px] grid grid-cols-2 px-[125px] flex items-center">
      <div>
        <div class="w-[420px] mb-[17px]">
          <p class="font-extrabold text-4xl text-[#1A7472]">The Ultimate Exprience</p>
          <h2 class="font-extrabold text-4xl text-[#1A7472] mb-[17px]">Explore The Island God</h2>
          <p class="text-[#283325] text-xl">Bali's rich culture and artistic heritage are on full display during your journey. Witness captivating traditional dance performances, explore local markets brimming with handcrafted treasures, and even try your hand at Balinese painting or cooking classes.</p>
        </div>
        <button class="bg-[#1A7472] font-bold w-[146px] h-[45px] text-white">Book Now</button>
      </div>
      <div>
        <div class="flex">
          <img src="public/images/pexels-oleksandr-p-2166608.jpg" alt="" class="w-[217px] h-[302px] mr-[18px] object-cover">
          <img src="public/images/pexels-oleksandr-p-2100804.jpg" alt="" class="w-[217px] h-[302px] object-cover">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="h-[626px]">
      <div class="mb-[30px] text-center">
        <p class="font-extrabold text-4xl text-[#1A7472]">Explore</p>
        <h2 class="font-extrabold text-4xl text-[#1A7472] mb-4">Our Services</h2>
        <p class="text-[#283325] text-xl">Are your ready to embark on a journey filled with adventure, culture and relaxation?</p>
      </div>
      <div class="flex justify-center">
        <div class="grid grid-cols-3 gap-[17px]">
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
  <section>
    <div class="h-[310px] flex justify-center mt-[63px] mb-[54px]">
      <div class="h-52 w-[1045px] bg-[#1A7472] px-[37px] pt-[27px] pb-[49px]">
        <p class="text-white text-xl text-xl">Our Newsletter</p>
        <div class="flex justify-between mb-[26px]">
          <div>
            <p class="text-white font-extrabold text-2xl">Subscribe Now</p>
          </div>
          <div class="w-80">
            <p class="text-white text-end">Are you ready to embark on a journey filled with adventure, culture, and relaxation?</p>
          </div>
        </div>
        <div class="w-full">
          <form action="">
            <div class="flex">
              <input type="text" class="py-2flex-initial  w-10/12" />
              <div class="flex-initial w-2/12 flex justify-end">
                <button class="bg-white text-[#1A7472] px-7 py-2">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include("src/partials/footer.php") ?>
</body>

</html>