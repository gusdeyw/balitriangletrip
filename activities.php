<!DOCTYPE html>
<html lang="en">
<?php include("src/partials/head.php") ?>

<body class="bg-[#F6F6F6]">
  <?php include("src/partials/navbar.php");
  $imgs = [
    ['path' => 'public/images/activity/1.jpg', 'name' => 'Rafting', 'price' => '$160', 'desc' => 'Welcome to our Rafting Activity, where the rush of river rapids meets the ease of online booking for your next adrenaline-packed adventure. Immerse yourself in the heart-pounding excitement of our carefully curated rafting experiences, designed for everyone from beginners seeking a thrill to seasoned experts in search of the ultimate rapids challenge.'],
    // ['path' => 'public/images/pexels-tatiana-syrikova-3932687.jpg', 'name' => 'Trekking', 'price' => '$160', 'desc' => 'Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence.'],
    // ['path' => 'public/images/pexels-andrea-piacquadio-3771805.jpg', 'name' => 'Cycling', 'price' => '$160', 'desc' => 'Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence.'],
    // ['path' => 'public/images/pexels-daniel-torobekov-5277705.jpg', 'name' => 'Surf', 'price' => '$160', 'desc' => 'Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence.'],
    // ['path' => 'public/images/pexels-daniel-torobekov-6961669.jpg', 'name' => 'Diving', 'price' => '$160', 'desc' => 'Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence.'],
    // ['path' => 'public/images/pexels-alexandre-saraiva-carniato-1644724.jpg', 'name' => 'Surfing', 'price' => '$160', 'desc' => 'Alila Villas, epitomizing luxury in style, are a breathtaking haven for discerning travelers seeking the ultimate in opulence.'],
  ];

  $count = 0;
  $groupimgs = [];
  $groups = [];
  foreach ($imgs as $key => $img) {
    if ($count == 2) {
      $count = 0;
      $groupimgs = [];
    }
    array_push($groupimgs, $img);
    if (count($groupimgs) == 2 || $key + 1 == count($imgs)) {
      array_push($groups, $groupimgs);
    }
    $count++;
  }
  ?>
  <main>
    <section>
      <div class="cs-banner-bg relative w-full bg-cover bg-center" style="background-image: url(public/images/pexels-kachonk-adventure-17956745.jpg)">
        <div class="relative">
          <div class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] h-auto pt-[115px] pb-[62px] flex items-center">
            <div class="lg:w-1/2">
              <h1 class="font-['almarai'] font-extrabold text-[34px] sm:text-[44px] lg:text-[55px] xl:text-[64px] text-white mb-4">Activities</h1>
              <p class="tracking-wider font-['almarai'] text-white mb-7 text-[15px] text-justify">Get ready for exhilarating adventures as you explore Bali's diverse landscapes. From surfing the legendary waves of Uluwatu to trekking through emerald rice terraces in Ubud and snorkeling amidst vibrant coral reefs, our curated activities promise an adrenaline rush and deep connection with nature.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="show-side-mob" class="fixed z-10 right-2 hidden">
      <button type="button" value="true" class="bg-white w-[25px] lg:hidden shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] rounded-full text-base text-center"><i class="fa-xs fa-solid fa-magnifying-glass"></i></button>
    </div>
    <div id="sidebar-mob" class="lg:hidden z-10 fixed top-20 h-full right-0 bg-white w-0 transition-all duration-1000 ease-out py-5 px-0">
      <?php include("src/partials/aside.php") ?>
    </div>
    <section>
      <div class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] flex pt-[87px] pb-[63px]">
        <!-- w-[60%]  -->
        <div class="w-full lg:w-[75%]">
          <div class="sm:grid sm:grid-rows-3 sm:gap-[30px]">
            <?php foreach ($groups as $group) : ?>
              <div class="sm:grid sm:grid-cols-2 sm:gap-7 lg:mr-7">
                <?php foreach ($group as $img) : ?>
                  <article class="shadow-[0_4px_19px_-5px_rgba(0,0,0,0.25)] h-full">
                    <div class="bg-center bg-cover relative pt-[161px] lg:pt-[261px] 2xl:pt-[361px]" style="background-image: url('<?= $img['path']; ?>')">
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
                          <h1 class="font-['almarai'] font-bold text-lg lg:text-xl text-[#1A7472]"><?= $img['name'] ?></h1>
                        </div>
                        <div class="">
                          <p class="font-['almarai'] font-bold text-lg lg:text-xl text-[#53581E]"><?= $img['price'] ?>/Pax</p>
                        </div>
                      </div>
                      <p class="font-['almarai'] mb-2 text-xs text-[#9DA1A2]"><?= $img['desc'] ?></p>
                      <a href="activity-detail.php">
                        <button class="font-['almarai'] bg-[#1A7472] py-2 px-[18px] text-white text-xs">See Details</button>
                      </a>
                    </div>
                  </article>
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
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