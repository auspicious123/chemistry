<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/groupmember.css">
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="members.json"></script> -->
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
                <svg xmlns="
                       // http://www.w3.org/2000/svg
                        " fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
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
                            <a href="groupmember.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Members</a>
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

        </div>
    </header>



    <!-- Group Members -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col justify-center items-center ">
                <div class="text-xl md:text-3xl text-orange-500 font-bold uppercase">OUR GROUP</div>
                <div class="border-b-4 border-orange-500 -mt-2"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                <div class="text-black text-sm text-center mt-5"><br></div>
            </div>
          

            <div class=" px-8 flex flex-wrap -m-4">
                <?php
                $url = 'grouplist.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed

                foreach (array_slice($characters, 0) as $character) {

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
        </div>
    </section>





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

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>