<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- link for css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b182aa84d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Document</title>
    <style>
      *{
    font-family: 'Poppins', sans serif;
      }
    </style>
</head>
<body>
<!-- header -->
<?php include 'assets/components/header.html' ?>
<!-- hero section -->
<section>
  <div class="container mx-auto px-6 md:px-16 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="p-6 flex flex-col justify-center">
        <h1 class="font-extrabold text-7xl">What We Do</h1>
        <p class="pt-6 text-xl">We help you design build and deploy custom websites and softwares</p>
        <button class="px-5 py-4 mt-12 bg-white shadow-md shadow-[#5E17EB] rounded-xl w-60 font-semibold">Lets Work Together<i class="pl-3 font-semibold fas fa-arrow-right"></i></button>
      </div>
      <div class="p-6 flex flex-col">
        <img src="https://d33wubrfki0l68.cloudfront.net/82c4d9ac22b851dd243da5be3b94149513d6ec5c/a7423/assets/images/services.jpeg" class="w-fit" alt="">
      </div>
    </div>
  </div>
  <!-- hero section ends -->
</section>
<!-- services flip card -->
<section class="bg-[#F7F8FD]">
  <div class="container pb-24 relative mx-auto">
    <div id="srvcard" class="pt-24 pb-10  flex">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 mx-auto">
        <!-- card 1 -->
        <div class="cardcontainer relative">
          <div class="thecard top-0 left-0 w-full h-full">
            <!-- card front -->
            <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
              <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
              <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Website Development</h3></div>
            </div>
            <!-- card front end -->
            <!-- card back -->
            <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
              <div><p class="text-gray-600 text-xl align-middle text-center">Quality web development solutions.</p></div>
            </div>
            <!-- card backends -->
          </div>
        </div>
        <!-- card 1 ends -->
          <!-- card 2 -->
          <div class="cardcontainer relative">
            <div class="thecard top-0 left-0 w-full h-full">
              <!-- card front -->
              <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
                <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
                <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Application Development</h3></div>
              </div>
              <!-- card front end -->
              <!-- card back -->
              <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
                <div><p class="text-gray-600 text-xl  align-middle text-center">develop native and cross-platform mobile apps </p></div>
              </div>
              <!-- card backends -->
            </div>
          </div>
          <!-- card 2 ends -->
            <!-- card 3 -->
        <div class="cardcontainer relative">
          <div class="thecard top-0 left-0 w-full h-full">
            <!-- card front -->
            <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
              <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
              <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Shopify & Wordpress</h3></div>
            </div>
            <!-- card front end -->
            <!-- card back -->
            <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
              <div><p class="text-gray-600 text-xl  align-middle text-center">websites using the Shopify and Wordpress platform.</p></div>
            </div>
            <!-- card backends -->
          </div>
        </div>
        <!-- card 3 ends -->
          <!-- card 4 -->
          <div class="cardcontainer relative">
            <div class="thecard top-0 left-0 w-full h-full">
              <!-- card front -->
              <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
                <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
                <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">CRM, CMS, WebApps</h3></div>
              </div>
              <!-- card front end -->
              <!-- card back -->
              <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
                <div><p class="text-gray-600 text-xl align-middle text-center">Build an application to manage digital content, online stores, customers and sales.</p></div>
              </div>
              <!-- card backends -->
            </div>
          </div>
          <!-- card 4 ends -->
            <!-- card 5 -->
        <div class="cardcontainer relative">
          <div class="thecard top-0 left-0 w-full h-full">
            <!-- card front -->
            <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
              <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
              <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Web 3.0 Development</h3></div>
            </div>
            <!-- card front end -->
            <!-- card back -->
            <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
              <div><p class="text-gray-600 text-xl align-middle text-center">We help users to connect freely with the decentralized economic and non-economic spheres.</p></div>
            </div>
            <!-- card backends -->
          </div>
        </div>
        <!-- card 5 ends -->
          <!-- card 6 -->
          <div class="cardcontainer relative">
            <div class="thecard top-0 left-0 w-full h-full">
              <!-- card front -->
              <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
                <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
                <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Cloud Services</h3></div>
              </div>
              <!-- card front end -->
              <!-- card back -->
              <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
                <div><p class="text-gray-600 text-xl  align-middle text-center"> Store data and applications on servers accessed through the internet.</p></div>
              </div>
              <!-- card backends -->
            </div>
          </div>
          <!-- card 6 ends -->
            <!-- card 7 -->
        <div class="cardcontainer relative">
          <div class="thecard top-0 left-0 w-full h-full">
            <!-- card front -->
            <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
              <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
              <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Ticket Task Management</h3></div>
            </div>
            <!-- card front end -->
            <!-- card back -->
            <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
              <div><p class="text-gray-600 text-xl  align-middle text-center">Quality web development solutions.</p></div>
            </div>
            <!-- card backends -->
          </div>
        </div>
        <!-- card 7 ends -->
          <!-- card 8 -->
          <div class="cardcontainer relative">
            <div class="thecard top-0 left-0 w-full h-full">
              <!-- card front -->
              <div class="bg-white h-64 pt-10 pl-10 rounded-3xl w-64 shadow-md shadow-gray-200 frontcard ">
                <div class="pb-8 pt-8"><i class="fa fa-globe text-teal-500 bg-teal-100 p-4 text-start"></i></div>
                <div><h3 class="text-gray-800 text-2xl font-semibold pr-5">Website Maintenance</h3></div>
              </div>
              <!-- card front end -->
              <!-- card back -->
              <div class="bg-white h-64 pt-10 px-10 rounded-3xl w-64 shadow-md shadow-gray-200 backcard flex items-center  absolute top-0 left-0">
                <div><p class="text-gray-600 text-xl align-middle text-center">Quality web development solutions.</p></div>
              </div>
              <!-- card backends -->
            </div>
          </div>
          <!-- card 8 ends -->
       
         
      </div>
    </div>
  </div>
</section>


<!-- services flip card -->
<section>
  <div class="container mx-auto py-16 px-8">
    <div>
      <h1 class="text-center text-2xl md:text-5xl font-extrabold">Our recent completed Projects</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 pt-16">
      <div>
        <img src="assets/images/LinQ transparent.png" class="w-72 mx-auto" alt="">
        <p class="text-center text-xl font-semibold">ipsum dolor.</p>
      </div>
      <div>
        <img src="assets/images/LinQ transparent.png" class="w-72 mx-auto" alt="">
        <p class="text-center text-xl font-semibold">ipsum dolor.</p>
      </div>
      <div>
        <img src="assets/images/LinQ transparent.png" class="w-72 mx-auto" alt="">
        <p class="text-center text-xl font-semibold">ipsum dolor.</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#423EF3]">
  <div class="container mx-auto px-16 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="flex flex-col justify-center">
        <p class="text-gray-300 font-semibold text-xl text-start tracking-wider"><i class="fa fa-circle text-base text-yellow-400"></i>&nbsp;Get every update</p>
        <h1 class="font-extrabold text-white text-3xl pt-10 leading-tight">A recognizable & awarded partner.. become our partner</h1>
        <button class="px-5 py-4 mt-12 bg-yellow-300 rounded-xl w-60 font-semibold">Become A Partner</button>
      </div>
      <div class="flex justify-start md:justify-end pt-10 ">
        <img src="https://www.resolutesoftware.com/assets/imgRedesign/health-header.png" class="w-3/4" alt="">
      </div>
    </div>
  </div>
  </section>
  <!-- footer  -->
  <?php include 'assets/components/footer.html' ?>
<!-- footer ends -->
</body>
