<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publication</title>
  <link rel="stylesheet" href="assets/publication.css">
 
</head>

<body>
<style>
        .html{
            scroll-behavior: smooth;
        }
    </style>
  <!-- Navbar -->
  <?php include 'header.php' ?>

          <!-- Publication Under -->
          <section class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-col">
              <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg h-64 overflow-hidden">
                  <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                </div>

                <?php
                $url = 'grouplist.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed

                ?>
              
              </div>
            </div>
          </section>

          <!-- All Research Article -->
          <section class="text-gray-400 bg-gray-900 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
              <div class="-my-8 divide-y-2 divide-gray-800">

              <?php
                $url = 'publication.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed

                foreach (array_slice($characters, 0, 16) as $character) {

                ?>
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                  <!-- <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-white"><?php echo $character->category  ?></span>
                    <span class="mt-1 text-gray-500 text-sm"><?php echo $character->date  ?></span>
                  </div> -->
                  <div class="md:flex-grow">
                   
                  <h2 class="text-2xl font-medium text-white title-font mb-2"><?php echo $character->topic  ?></h2>
                  <p class="leading-relaxed"><p class="text-lg"><b><?php echo $character->contributer  ?></b></p></p>

                 
                    <!-- <a class="text-indigo-400 inline-flex items-center mt-4">More Info
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a> -->
                  </div>
                </div>
                    <?php
                    }
                    ?>

              </div>
            </div>
          </section>


          <!-- All Book Chapters -->
          <section class="text-gray-400 bg-gray-900 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
              <div class="-my-8 divide-y-2 divide-gray-800">

              <?php
                $url = 'publication.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed

                foreach (array_slice($characters, 16, 22) as $character) {

                ?>
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                  <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-white"><?php echo $character->category  ?></span>
                    <span class="mt-1 text-gray-500 text-sm"><?php echo $character->date  ?></span>
                  </div>
                  <div class="md:flex-grow">
                    <h2 class="text-2xl font-medium text-white title-font mb-2"><?php echo $character->topic  ?></h2>
                    <p class="leading-relaxed"><?php echo $character->contributer  ?></p>
                    <!-- <a class="text-indigo-400 inline-flex items-center mt-4">More Info
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a> -->
                  </div>
                </div>
                    <?php
                    }
                    ?>

              </div>
            </div>
          </section>
      
  <!-- Contact us -->
 
<?php include 'footer.php' ?>
  <!-- js -->
  <script>
  
  </script>

  <script src="assets/slider.js"></script>
</body>

</html>