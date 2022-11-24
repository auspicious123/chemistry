<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="assets/index.css">
  <!-- <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
<style>
        .html{
            scroll-behavior: smooth;
        }
    </style>
  <!-- Navbar -->
  <header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <svg xmlns="// http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Chemistry</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-end">
        <a href="index.php" class="mr-5 hover:text-white"> Home </a>
        <!-- <a class="mr-5 hover:text-white">Research</a> -->

        <a data-dropdown-toggle="dropdownDivider" class="mr-5 hover:text-white">Our Group</a>
        <!-- Dropdown menu -->
        <div id="dropdownDivider" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
            <li>
              <a href="member.php?id=<?php echo "0"  ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Leader</a>
            </li>
            <li>
              <a href="groupmember.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Member</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Collaborator</a>
            </li>
          </ul>
          <div class="py-1">
            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Alumini</a>
          </div>
        </div>
        <a class="mr-5 hover:text-white">Awards</a>
        <a href="gallery.php" class="mr-5 hover:text-white">Gallery</a>

      </nav>
      <!-- <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Button
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button> -->
    </div>
  </header>


  <!-- Hero -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-12 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Microdosing synth tattooed vexillologist</h1>
        <p class="leading-relaxed mb-8">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>
        </div>
      </div>
    </div>
  </section>


  <!-- Gallery -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <section class="text-gray-400 bg-gray-900 body-font">
      <div id="indicators-carousel" class="relative mx-10 py-4" data-carousel="slide">
        <div class="relative overflow-hidden rounded-lg sm:h-72 md:h-72 lg:h-72 xl:h-72   2xl:h-[80vh]">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </section>
  </section>

  <!-- Achievement count -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 sm:w-1/3 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">2.7K</h2>
          <p class="leading-relaxed">Projects</p>
        </div>
        <div class="p-4 sm:w-1/3 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">1.8K</h2>
          <p class="leading-relaxed">Awards</p>
        </div>
        <div class="p-4 sm:w-1/3 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">35</h2>
          <p class="leading-relaxed">Members</p>
        </div>
        <!-- <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">4</h2>
              <p class="leading-relaxed">Products</p>
            </div> -->
      </div>
    </div>
  </section>


  <!-- Content -->



  <!-- Team -->
 <?php
                $url = 'grouplist.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed

                ?>
  <div class="team">
    <div class="flex justify-center ">
      <div class="flex flex-col justify-center my-10 w-[90%] space-y-20 lg:space-y-2 max-w-7xl">
        <div class="flex flex-col justify-center items-center ">
          <div class="text-xl md:text-3xl text-orange-500 font-bold uppercase">OUR GROUP</div>
          <div class="border-b-4 border-orange-500 -mt-2 mb-2 sm:mb-4"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
          <!-- <div class="text-black text-sm text-center mt-5">Subscribe Easy Tutorial YouTube channel to watch more videos</div> -->
        </div>
                 <div class=" px-8 flex flex-wrap -m-4">
                <?php
                $url = 'grouplist.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed

                foreach (array_slice($characters, 0, 3) as $character) {

                ?>
                    <div class="px-4 pt-20 pb-6 w-full md:w-1/3">
                        <div class="pd-4 bg-slate-200 shadow-lg flex flex-col justify-center items-center py-4 h-64 w-full md:w-2/3 lg:w-auto">
                            <div class="-mt-20 ">
                                <img style="width:150px;height:150px" src="<?php echo $character->image  ?>" class="rounded-full " alt="">
                            </div>

                            <div class=" lg:flex-row justify-center text-center lg:space-x-3">
                                <h1 class="text-orange-500 text-lg font-semibold"><?php echo $character->name  ?></h1>
                                <p class="text-black text-base lg:mt-[5px] font-semibold"><?php echo $character->Groupposition  ?></p>

                            </div>
                            <p class="text-center text-sm p-5"><?php echo $character->designation  ?> <br> <a class="text-blue-800 font-semibold" href="member.php?id=<?php echo $character->id  ?>">More Info</a> </p>

                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        <div class="flex flex-col justify-center items-center lg:flex-row space-y-28 lg:space-y-0  lg:space-x-10">

          <!-- <div class="pd-4 bg-slate-200 shadow-lg flex flex-col justify-center items-center py-4 h-64 md:w-1/3 lg:w-auto">
            
            <div class="-mt-20 ">
              <img src="<?php echo $characters[0]->image  ?>" style="width: 150px;height: 150px" class="rounded-full " alt="">
            </div>
            https://source.unsplash.com/150x150/?man
            <div class=" lg:flex-row justify-center text-center lg:space-x-3">
            
              <h1 class="text-orange-500 text-lg font-semibold"><?php echo $characters[0]->name  ?></h1>
              <p class="text-black text-base lg:mt-[5px] font-semibold">Group Head</p>

            </div>
            <p class="text-center text-sm p-5"><?php echo $characters[0]->designation  ?> <br> <a class="text-blue-800 font-semibold" href="groupLeader.php">More Info</a> </p>
          </div> -->


          <!-- <div class="bg-slate-200 shadow-lg flex flex-col justify-center items-center py-4 h-64 md:w-[80%] lg:w-fit">
            <div class="-mt-20 ">
              <img src="https://source.unsplash.com/150x150/?man" class="rounded-full " alt="">
            </div>

            <div class=" lg:flex-row justify-center text-center lg:space-x-3">
              <h1 class="text-orange-500 text-lg font-semibold">Dr. Jhimli Bhattacharyya</h1>
              <p class="text-black text-base lg:mt-[5px] font-semibold">Group Head</p>

            </div>
            <p class="text-center text-sm p-5">Assistant Professor in Chemistry,National Institute of Technology Nagaland Chumukedima, Dimapur <br> <a class="text-blue-800 font-semibold" href="groupLeader.php">More Info</a> </p>

          </div> -->

         

        </div>

        <div class="text-black text-sm text-center"><button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <span><a href="groupmember.php">More Members</a></span>
          </button></div>
      </div>
    </div>
    <!-- <div class="block mx-0 my-auto">
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                   <span>Other Members</span>
                  </button>
            </div> -->
  </div>


  <!-- <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-2xl font-medium title-font mb-4 text-white">OUR TEAM</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
          </div>
          <div class="flex flex-wrap -m-4" >
<?php
$url = 'grouplist.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

foreach (array_slice($characters, 0) as $character) {

?>
  <div class="p-4 lg:w-1/4 md:w-1/2" >
              <div class="h-full flex flex-col items-center text-center">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="<?php echo $character->image  ?> ">
                <div class="w-full">
                  <h2 class="title-font font-medium text-lg text-white"><?php echo $character->name  ?> </h2>
                  <h3 class="text-gray-500 mb-3"><?php echo $character->designation  ?> </h3>
                  <p class="mb-4"><?php echo $character->about  ?> </p>
                  <span class="inline-flex">
                    <a class="text-gray-700">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-700" href="<?php echo $character->contact  ?>">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-700">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>
                    </a>
                  </span>
                </div>
              </div>
            </div>

<?php

}

?>
          </div>
        </div>
      </section> -->
      
  <!-- Contact us -->
  <?php
$url = 'grouplist.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

?>
  <section class="text-gray-400 bg-gray-900 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.494893074715!2d93.77182691541887!3d25.787242313835694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374607c5cdfdde91%3A0xf69a2518890fea22!2sNational%20Institute%20of%20Technology%20Nagaland!5e0!3m2!1sen!2sin!4v1668863580975!5m2!1sen!2sin" data-dashlane-frameid="11164" style="filter: grayscale(1) contrast(1.2) opacity(0.16);"></iframe>
        <div class="bg-gray-900 relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-white tracking-widest text-xs">CONTACT</h2>
            <p class="mt-1"><?php echo $characters[0]->name  ?><br> <?php echo $characters[0]->address  ?></p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-white tracking-widest text-xs">EMAIL</h2>
            <a href="mailto:jhimli.bhattacharyya@gmail.com" class="text-indigo-400 leading-relaxed"><?php echo $characters[0]->personalemail  ?>,</a>
            <a href="mailto:jhimli@nitnagaland.ac.in" class="text-indigo-400 leading-relaxed"><?php echo $characters[0]->officemail  ?></a>
            <h2 class="title-font font-semibold text-white tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed"><?php echo $characters[0]->phone  ?></p>
            <p class="leading-relaxed"><?php echo $characters[0]->officephone  ?></p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-white text-lg mb-1 font-medium title-font">Contact Us</h2>
        <p class="leading-relaxed mb-5">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-400">Your Name</label>
          <input type="text" id="name" name="name" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-400">Your Email</label>
          <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-400">Your Message</label>
          <textarea id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send Message</button>
        <p class="text-xs text-gray-400 text-opacity-90 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Chemistry</span>
      </a>
      <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© <script>
          document.write(new Date().getFullYear())
        </script> NIT Nagaland —
        <a href="#" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">Developer Cell</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
  <!-- js -->
  <script>
  
  </script>

  <script src="assets/slider.js"></script>
</body>

</html>