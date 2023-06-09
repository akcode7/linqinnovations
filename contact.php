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
<section  class="bg-no-repeat bg-cover bg-cente" style="background-image: url(assets/images/contact.png)">
  <div class="container mx-auto px-6 py-40">
    <div class="grid grid-cols-2">
      <div class="p-0 md:p-6 flex flex-col justify-center">
        <h1 class="font-extrabold text-7xl text-center md:text-left">Contact</h1>
        <!-- <p class="pt-6 text-xl">We help you design build and deploy custom websites and softwares</p> -->
        <button class="px-5 py-4 mt-12 bg-white shadow-md shadow-[#5E17EB] rounded-xl w-60 font-semibold">Lets Work Together<i class="pl-3 font-semibold fas fa-arrow-right"></i></button>
      </div>
      <div class="p-6 flex flex-col">
        <!-- <img src="https://d33wubrfki0l68.cloudfront.net/82c4d9ac22b851dd243da5be3b94149513d6ec5c/a7423/assets/images/services.jpeg" class="w-fit" alt=""> -->
      </div>
    </div>
  </div>
</section><!-- hero section ends -->
<div class="container mx-auto py-16 px-6 md:px-12">
    <p class="text-start text-xl font-semibold text-gray-900 tracking-wider leading-8">We're just one click away to help you take your brand or product from great to incredible. Fill in the form to share more details about your project, Or contact us by telephone, whatsapp, telegram or email we will be sure to get back to you accordingly.. Either way, we’d love to talk.</p>
</div>
<div class="container mx-auto pt-12 pb-28">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
        <div class="">
            <div>
                <img class="w-auto" src="https://d33wubrfki0l68.cloudfront.net/9f2e45b06103b125f1d15657dbeb6b0cd874751b/c41bc/assets/img/contact/contact-side.jpg" alt="">
            </div>
            <div class="pl-6 pt-5">
                <h2 class="text-xl font-semibold text-gray-800 py-4">Mail Address <br>
                  <span class="text-lg font-medium text-gray-400">info@admin.com</span>
                </h2>
                <h2 class="text-xl font-semibold text-gray-800 py-4">Phone Number<br>
                    <span class="text-lg font-medium text-gray-400">+91 1234567890</span>
                </h2>
                <h2 class="text-xl font-semibold text-gray-800 py-4">Address<br>
                    <span class="text-lg font-medium text-gray-400">Delhi, India</span>
                </h2>
            </div>
        </div>
        <div class="px-6 md:px-14">
            <div class=" bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-4xl mb-1 font-bold pb-8">Let's Talk...</h2>
                <div class="relative mb-4">
                  <input type="text" id="name" name="name" class="w-full bg-white rounded-lg border border-gray-300 focus:border-teal-700 focus:ring-2 focus:ring-teal-300 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your Name">
                </div>
                <div class="relative mb-4">
                  <input type="email" id="email" name="email" class="w-full bg-white rounded-lg border border-gray-300 focus:border-teal-700 focus:ring-2 focus:ring-teal-300 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your Mail">
                </div>
                <div class="relative mb-4">
                    <input type="tel" id="number" name="number" class="w-full bg-white rounded-lg border border-gray-300 focus:border-teal-700 focus:ring-2 focus:ring-teal-300 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your Mobile No">
                  </div>
                <div class="relative mb-4">
                  <textarea id="message" name="message" class="w-full h-48 bg-white rounded-lg border border-gray-300 focus:border-teal-700 focus:ring-2 focus:ring-teal-300 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your Message"></textarea>
                </div>
                <button class="text-gray-800 w-52 bg-yellow-300 border-0 py-4 px-6 focus:outline-none hover:text-white hover:bg-teal-500 rounded-xl text-lg transition-all duration-500">Send Message</button>
              </div>
        </div>
    </div>
</div>
  <!-- footer  -->
  <?php include 'assets/components/footer.html' ?>
</body>
