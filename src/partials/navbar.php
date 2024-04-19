<?php include("src/partials/preloader.php") ?>
<header>
  <nav id="navbar" class="bg-black/20 w-full fixed z-10">
    <div class="px-7 sm:px-[50px] lg:px-[80px] xl:px-[125px] 2xl:px-[225px] h-20 flex justify-between items-center">
      <div>
        <p class="navbar-link font-['almarai'] font-extrabold text-white md:text-lg xl:text-xl">Bali Triangle Trip</p>
      </div>
      <div class="flex items-center">
        <div class="hidden lg:block">
          <ul class="flex">
            <li class="mr-2"><a href="index.php" class="navbar-link font-['almarai'] underline-offset-4 md:text-lg xl:text-xl underline text-white">Home</a></li>
            <li class="mr-2"><a href="accommodations.php" class="navbar-link font-['almarai'] underline-offset-4 md:text-lg xl:text-xl underline text-white">Accommodations</a></li>
            <li class="mr-2"><a href="activities.php" class="navbar-link font-['almarai'] underline-offset-4 md:text-lg xl:text-xl underline text-white">Activities</a></li>
            <li class="mr-2"><a href="art-and-culture.php" class="navbar-link font-['almarai'] underline-offset-4 md:text-lg xl:text-xl underline text-white">Art & Culture</a></li>
            <li class="mr-9"><a href="profile.php" class="navbar-link font-['almarai'] underline-offset-4 md:text-lg xl:text-xl underline text-white">Profile</a></li>
          </ul>
        </div>
        <div class="bg-[#1A7472] px-[18px] sm:px-2.5 py-2 sm:py-2.5">
          <a href="accommodations.php" class="text-xs sm:text-sm lg:text-base font-['almarai'] font-bold text-white">Book Now</a>
          <i class="fa-solid fa-lg fa-check ml-1 text-white"></i>
        </div>
        <button id="navbar-menu-mob" class="text-white ml-3 lg:hidden"><i class="fa-solid fa-bars"></i></button>
      </div>
    </div>
  </nav>
</header>

<div id="side-navbar" class="lg:hidden truncate h-screen py-7 bg-white right-0 fixed z-20 w-0 transition-all duration-1000 ease-out">
  <div class="px-7 flex justify-end">
    <button id="close-side-navbar"><i class="fa-solid fa-x"></i></button>
  </div>
  <!-- <div class="flex"> -->
  <div id="side-navbar-mob-content" class="h-full px-7 flex items-center">
    <div class="w-full text-center">
      <ul class="mb-9 text-center">
        <li class="mb-2"><a href="index.php" class="text-[#9DA1A2] hover:text-[#1A7472] font-['almarai'] underline-offset-4 text-lg underline">Home</a></li>
        <li class="mb-2"><a href="accommodations.php" class="text-[#9DA1A2] hover:text-[#1A7472] font-['almarai'] underline-offset-4 text-lg underline">Accommodations</a></li>
        <li class="mb-2"><a href="activities.php" class="text-[#9DA1A2] hover:text-[#1A7472] font-['almarai'] underline-offset-4 text-lg underline">Activities</a></li>
        <li class="mb-2"><a href="art-and-culture.php" class="text-[#9DA1A2] hover:text-[#1A7472] font-['almarai'] underline-offset-4 text-lg underline">Art & Culture</a></li>
        <li class=""><a href="profile.php" class="text-[#9DA1A2] hover:text-[#1A7472] font-['almarai'] underline-offset-4 text-lg underline">Profile</a></li>
      </ul>
      <!-- <div class="w-full">
        <a href="" class="text-sm font-['almarai'] bg-[#1A7472] font-bold px-[30%] p-3  text-white">Book Now</a>
      </div> -->
    </div>
  </div>
  <!-- </div> -->
</div>