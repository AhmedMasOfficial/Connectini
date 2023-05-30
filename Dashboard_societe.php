<?php
 session_start();
// // Check if the user is not logged in
if (!isset($_SESSION['username'])) {
     header("Location: index.html"); // Redirect to the login page
     exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E</script>
        <script src="signup_erreur.js"></script> 
</head>
<body class="bg-gray-900">
<header class="sticky top-0 bg-gray-950 flex items-center mb-2 justify-between py-2">
            <!-- logo - start -->
            <a href="#" class="flex items-center mb-4 text-2xl mt-4 font-semibold text-gray-900 dark:text-white">
              <img class="w-auto h-9 ml-5 mr-2 " src="logo.png" alt="logo">
              
          </a>
            <!-- logo - end -->
      
            <!-- nav - start -->
            <!-- <nav class="hidden gap-12 lg:flex">
              <a href="#" class="text-lg font-semibold text-yellow-500">Home</a>
              <a href="#" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-yellow-500 active:text-yellow-500">Offres</a>
              <a href="#" class="text-lg font-semibold text-gray-600 transition duration-100 hover:text-yellow-500 active:text-yellow-500">Contact</a>
              </nav> -->
            <!-- nav - end -->
      
            <!-- buttons - start -->
            <a href="logout.php" class="hidden mr-6 rounded-lg bg-yellow-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-yellow-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:inline-block">Deconnecter</a>
      
            <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-yellow-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
      
              Menu
            </button>
            <!-- buttons - end -->
    </header>
    <div class="bg-gray-900 py-6 sm:py-8 lg:py-12">
        <div class="mx-auto w-[50%] px-2 md:px-8">
            <div class="grid  md:grid-cols-2 ">
                <div>
                    <div class="h-52 w-52 object-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
                        <img src="sos4.webp" loading="lazy" alt="Photo by Martin Sanchez" class="h-full w-full object-cover object-center" />
                      </div>
                      
                    
                </div>

                <div class="md:pt-8">
                    <p class="text-center font-bold text-yellow-500 md:text-left">Bonjour </p>

                    <h1 class="mb-4 text-center text-2xl font-bold text-white sm:text-3xl md:mb-6 md:text-left">Tech sevy</h1>

                    <p class="mb-6 text-yellow-500 sm:text-lg md:mb-8">
                        
                    </p>

                    


                </div>
            </div>
        </div>
    </div>
<div class="flex-col items-center justify-center "> 
    <label class="block mb-2 text-sm text-center  font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
    <div class="p-3 bg-gray-950 flex items-center rounded w-72">
<input class="block  h5 text-sm text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
</div>
<button type="button" class=" ml-[695px] mt-6 text-yellow-400 justify-center  hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Postuler</button>
</div>
<section class="h-[50vh]">
    <div class="mx-[50vh] w-[100vh] bg-transparent">
        <h2 class="mb-2 mt-7 text-center text-xl font-semibold text-white sm:text-2xl md:mb-4 md:text-left">La
            liste des enseignants valable:</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-yellow-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            nome d'etudiant
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Mail
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path
                                            d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">passer a l'entretien</span>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            khalil sessi
                        </th>
                        <td class="px-6 py-4">
                            khalilsesi@gmail.com
                        </td>
                       
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">passer a l'entretien</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">refuser</a>
                        </td>
                        
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            montsar isaa
                        </th>
                        <td class="px-6 py-4">
                            montsarisaa@gmail.com
                        </td>
                       
                        
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">passer a l'entretien</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">refuser</a>
                        </td>
                        
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ali amri
                        </th>
                        <td class="px-6 py-4">
                            aliamri@gmail.com
                        </td>
                       
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">passer a l'entretien</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">refuser</a>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>
</body>
</html>