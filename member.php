<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/member.css">
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

                <a data-dropdown-toggle="dropdownDivider" class="mr-5 hover:text-white">Our Group</a>
                <!-- Dropdown menu -->
                <div id="dropdownDivider" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                        <li>
                            <a href="groupLeader.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Leader</a>
                        </li>
                        <li>
                            <a href="groupMember.php" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Member</a>
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

    <?php
    $url = 'groupdescription.json'; // path to your JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data); // decode the JSON feed
    $url_id = $_GET['id'];
    ?>


    <!-- Leader info -->
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto" src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="">
                    </div>
                    <img class="h-16 w-16 rounded-full m-2" src="<?php echo $characters[$url_id]->image  ?>" alt="">
                    <a href="#" class="text-main-color text-gray-900 font-bold text-xl leading-8 my-1"><?php echo $characters[$url_id]->name  ?></a>
                    <!-- <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Dr. Jhimli Bhattacharyya</h1> -->
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">
                        <?php echo $characters[$url_id]->designation  ?></h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6"><?php echo $characters[$url_id]->about  ?></p>
                    <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">Nov 07, 2016</span>
                        </li>
                    </ul>
                    <div class="p-3 border-t-4 border-green-400 my-6"></div>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>

                <div class="bg-white p-3 hover:shadow">
                    <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                    </div>
                </div>

            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide text-lg">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-base">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2"><?php echo $characters[$url_id]->firstname  ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2"><?php echo $characters[$url_id]->lastname  ?></div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2"><?php echo $characters[$url_id]->gender  ?></div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2"><a href="tel:<?php echo $characters[$url_id]->phone ?>"><?php echo $characters[$url_id]->phone ?> </a>
                                    <div class=" py-2"><a href="tel:<?php echo $characters[$url_id]->officephone ?>"><?php echo $characters[$url_id]->officephone ?></a>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Current Address</div>
                                <div class="px-4 py-2">NIT Nagaland, Chumukedima, Dimapur, Nagaland 797 103, INDIA</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                <div class="px-4 py-2">NIT Nagaland, Chumukedima, Dimapur, Nagaland 797 103, INDIA</div>
                            </div> -->
                            <div class="grid sm:grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:<?php echo $characters[$url_id]->personalemail  ?> "><?php echo $characters[$url_id]->personalemail  ?>
                                    </a><br/>
                                    <a class="text-blue-800" href="mailto:<?php echo $characters[$url_id]->officemail  ?>"><?php echo $characters[$url_id]->officemail  ?>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <button class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-sm p-3 my-4">
                        Full Information</button>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>



                <!-- Post Doctoral Experience -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <div class="grid md:grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide text-lg">Post Doctoral Experience</span>
                            </div>
                            <ul class="list-inside space-y-4">
                                <?php
                                if ($characters[$url_id]->totalexperience == 0) {
                                ?>
                                    <!-- <li>
                                        <div class="text-teal-600">No Experience </div>
                                    </li> -->

                                    <?php
                                } else {
                                    $totalexperience = $characters[$url_id]->totalexperience - 1;
                                    for ($x = 0; $x <= $totalexperience; $x++) {

                                    ?>
                                        <li>
                                            <div class="text-teal-600">
                                                <?php echo $characters[$url_id]->experience[$x]->experiencedesc  ?> </div>
                                            <div class="text-gray-500 text-sm">
                                                <?php echo $characters[$url_id]->experience[$x]->year  ?></div>
                                        </li>

                                <?php
                                    }
                                }
                                ?>
                            </ul>

                            <!-- <div class="my-8 text-gray-900 leading-8">
                                <hr>
                            </div> -->
                        </div>

                        <!-- Education -->
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3 mt-4 md:mt-0">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide text-lg ">Education</span>
                            </div>
                            <ul class="list-inside space-y-4">
                                <?php
                                if ($characters[$url_id]->totaleducation == 0) {
                                ?>
                                    <!-- <li>
                                        <div class="text-teal-600">No Education </div>
                                    </li> -->

                                    <?php
                                } else {
                                    $totaleducation = $characters[$url_id]->totaleducation - 1;
                                    for ($x = 0; $x <= $totaleducation; $x++) {

                                    ?>
                                        <li>
                                            <div class="text-teal-600">
                                                <?php echo $characters[$url_id]->education[$x]->college  ?> </div>
                                            <div class="text-gray-500 text-sm">
                                                <?php echo $characters[$url_id]->education[$x]->year  ?></div>
                                        </li>

                                <?php
                                    }
                                }

                                ?>
                            </ul>
                            <div class="my-8 text-gray-900 leading-8">
                                <hr>
                            </div>
                        </div>

                        <!-- Ongoing/Completed Projects -->
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide text-lg">Ongoing/Completed Projects</span>
                            </div>
                            <ul class="list-inside space-y-6">
                                <?php
                                if ($characters[$url_id]->totalProject == 0) {
                                ?>
                                    <!-- <li>
                                        <div class="text-teal-600">No Projects </div>
                                    </li> -->

                                    <?php
                                } else {
                                    $total_project = $characters[$url_id]->totalProject - 1;
                                    for ($x = 0; $x <= $total_project; $x++) {

                                    ?>
                                        <li>
                                            <div class="text-teal-600">
                                                <?php echo $characters[$url_id]->project[$x]->projectdesc  ?> </div>
                                            <div class="text-gray-500 text-sm">
                                                <?php echo $characters[$url_id]->project[$x]->year  ?></div>
                                        </li>

                                <?php


                                    }
                                }

                                ?>


                            </ul>
                        </div>

                        <!-- Awards and Fellowships -->
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3 mt-4">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide text-lg">Awards and Fellowships</span>
                            </div>
                            <ul class="list-inside space-y-4">

                                <?php
                                if ($characters[$url_id]->totalAward == 0) {
                                ?>

                                    <!-- <li>
                                        <div class="text-teal-600">
                                            No Awards
                                        </div>

                                    </li> -->
                                    <?php
                                } else {
                                    $total_award = $characters[$url_id]->totalAward - 1;
                                    for ($x = 0; $x <= $total_award; $x++) {

                                    ?>
                                        <li>
                                            <div class="text-teal-600">
                                                <?php echo $characters[$url_id]->awards[$x]->awardsdesc  ?>
                                            </div>
                                            <div class="text-gray-500 text-sm">
                                                <?php echo $characters[$url_id]->awards[$x]->year  ?>
                                            </div>
                                        </li>

                                <?php

                                    }
                                }

                                ?>

                            </ul>
                        </div>

                        <div class="my-10"> </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>


                <!-- End of profile tab -->
            </div>
        </div>
    </div>





</body>

</html>