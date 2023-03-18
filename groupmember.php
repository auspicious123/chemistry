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
    <?php include 'header.php' ?>


    <!-- Group Members -->
    <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col justify-center items-center ">
                <div class="text-xl md:text-3xl text-orange-500 font-bold uppercase">OUR GROUP HEAD</div>
                <div class="border-b-4 border-orange-500 -mt-2"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                <div class="text-black text-sm text-center mt-5"><br></div>
            </div>
          

            <div class=" px-8 flex flex-wrap -m-4">
                <?php
                $url = 'grouplist.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed
                ?>
             
                    <div class="px-4 pt-20 pb-6 w-full md:w-1 ">
                        <div class="pd-4 bg-slate-200 shadow-lg flex flex-col justify-center items-center px-4 py-4 h-64 w-full md:w-2/3 lg:w-auto">
                            <div class="-mt-20 ">
                                <img style="width:150px;height:150px" src="Content/DrJhimliBhattacharyya.jpg" class="rounded-full " alt="">
                            </div>

                            <div class=" lg:flex-row justify-center text-center lg:space-x-3">
                                <h1 class="text-orange-500 text-lg font-semibold">Dr. Jhimli Bhattacharyya</h1>
                                <p class="text-black text-base lg:mt-[5px] font-semibold">Group Head</p>

                            </div>
                            <p class="text-center text-sm p-5">Assistant Professor in Chemistry <br> <a class="text-blue-800 font-semibold" href="member.php?id=<?php echo 0  ?>">More Info</a> </p>

                        </div>
                    </div>

               
            </div>
        </div>
        <!-- MEMBERS -->
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col justify-center items-center ">
                <div class="text-xl md:text-3xl text-orange-500 font-bold uppercase">OUR GROUP MEMBERS</div>
                <div class="border-b-4 border-orange-500 -mt-2"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                <div class="text-black text-sm text-center mt-5"><br></div>
            </div>
          

            <div class=" px-8 flex flex-wrap -m-4">
                <?php
               

                foreach (array_slice($characters, 1) as $character) {

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
 
<?php include 'footer.php' ?>
    <!-- js -->
    <script>

    </script>

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>