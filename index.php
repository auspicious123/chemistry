<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="assets/index.css">

</head>

<body>
<style>
        .html{
            scroll-behavior: smooth;
        }
    </style>
  <!-- Navbar -->
 <?php include 'header.php' ?>


  <!-- Hero -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-12 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="./Content/home.jpg">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Jhimli Bhattacharyya Research Group</h1>
        <p class="leading-relaxed mb-8">National Institute of Technology Nagaland</p>
        <div class="flex justify-center">
          <a href="groupmember.php" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Our Group</a>
          <a href="#grouppic" class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Gallery</a>
        </div>
      </div>
    </div>
  </section>


  <!-- Gallery -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <section class="text-gray-400 bg-gray-900 body-font ">
      <style scoped>
            @media (min-width: 320px) {
                .fly { 
                  height:20vh;
                }
            }@media (min-width: 640px) {
                .fly { 
                  height:30vh;
                }
            }@media (min-width: 768px) {
                .fly { 
                  height:40vh;
                }
            }@media (min-width: 1024px) {
                .fly { 
                  height:60vh;
                }
            }@media (min-width: 1280px) {
                .fly { 
                  height:90vh;
                }
            }
        </style>
      <div id="indicators-carousel" class=" fly relative mx-10 py-4" data-carousel="slide">
        <div class="relative overflow-hidden rounded-lg xs:h-72 sm:h-72 md:h-72 lg:h-72 xl:h-72 2xl:h-[80vh] fly">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out"  data-carousel-item="active">
            <img src="./Content/GroupPhoto1.jpg" id="grouppic" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div> -->
         
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
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">20</h2>
          <p class="leading-relaxed">Projects</p>
        </div>
        <div class="p-4 sm:w-1/3 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">5</h2>
          <p class="leading-relaxed">Awards</p>
        </div>
        <div class="p-4 sm:w-1/3 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">11</h2>
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



      
  <!-- Contact us -->

<?php include 'footer.php' ?>
  <!-- Footer -->
  
  <!-- js -->
  <script>
  
  </script>

  <script src="assets/slider.js"></script>
</body>

</html>