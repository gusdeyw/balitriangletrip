<?php
$currentPath = '/accomodation.php';
$actFields = [
  [
    "labelName" => "Adventure",
    "id" => "adventure",
  ],
  [
    "labelName" => "Water Playground",
    "id" => "water-playground",
  ],
  [
    "labelName" => "Vehicle Rent",
    "id" => "vehicle-rent",
  ],
  [
    "labelName" => "Walking Adventure",
    "id" => "walking-adventure",
  ],
  [
    "labelName" => "Cooking",
    "id" => "cooking",
  ],
  [
    "labelName" => "Hikking",
    "id" => "hikking",
  ],
  [
    "labelName" => "Healing",
    "id" => "healing",
  ],
  [
    "labelName" => "Kuta",
    "id" => "kuta",
  ],
  [
    "labelName" => "Legian",
    "id" => "legian",
  ]
];

$accFields = [
  [
    "labelName" => "Klungkung",
    "id" => "klungkung",
  ],
  [
    "labelName" => "Gianyar",
    "id" => "gianyar",
  ],
  [
    "labelName" => "Badung",
    "id" => "badung",
  ],
  [
    "labelName" => "Jimbaran",
    "id" => "jimbaran",
  ],
  [
    "labelName" => "Buleleng",
    "id" => "buleleng",
  ],
  [
    "labelName" => "Bangli",
    "id" => "bangli",
  ],
  [
    "labelName" => "Canggu",
    "id" => "canggu",
  ],
  [
    "labelName" => "Kuta",
    "id" => "kuta",
  ],
  [
    "labelName" => "Legian",
    "id" => "legian",
  ]
];

?>
<aside>
  <section>
    <form action="" class="px-[18px] lg:px-0">
      <div class="flex w-full ">
        <input type="text" class="p-2 w-full border-[1px] focus:outline-none active:outline-none border-[#1A7472] focus:border-[#1A7472] active:border-[#1A7472]" />
        <button class="text-sm lg:text-base bg-[#1A7472] py-1 px-3"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
      </div>
    </form>
    <div class="bg-white py-4 px-[18px] mt-3.5 lg:mt-[30px]">
      <p class="font-['almarai'] text-[#1A7472] font-bold text-sm">Location</p>
      <?php if ($_SERVER['REQUEST_URI'] == $currentPath) : ?>
        <?php foreach ($accFields as $acc) : ?>
          <div class="flex items-center">
            <input type="checkbox" class="mr-2" id="<?= $acc['id'] ?>">
            <label for="<?= $acc['id'] ?>" class="font-['almarai'] tracking-wider text-[#929191] text-[15px]"><?= $acc['labelName'] ?></label>
          </div>
        <?php endforeach ?>
      <?php else : ?>
        <?php foreach ($actFields as $act) : ?>
          <div class="flex items-center">
            <input type="checkbox" class="mr-2" id="<?= $act['id'] ?>">
            <label for="<?= $act['id'] ?>" class="font-['almarai'] tracking-wider text-[#929191] text-[15px]"><?= $act['labelName'] ?></label>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </section>
</aside>