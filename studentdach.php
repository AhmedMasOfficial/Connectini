<?php
session_start();
// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to the login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student dach</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <div class=" w-60 h-60 object-center overflow-hidden rounded-lg  mt-5 shadow-lg ">
                    <div >
                        <img src="aaa.jfif" width=15rem  haight=15rem class="h-60 w-60 rounded-full ring-3 -ring-yellow-500 object-cover object-center" />
                    </div>
                </div>

                <div class="md:pt-8">
                    <p class="text-center font-bold text-yellow-500 md:text-left">Bonjour MR(MRS) </p>
<?php
$conn = new mysqli("localhost", "root", "", "pfe");
$x = $_SESSION['username'];
$stmt = $conn->prepare("SELECT CONCAT(nom_etud, ' ', prenom_etud) FROM etudiant WHERE mail = ? ");
$stmt->bind_param("s", $x);
$stmt->execute();
$stmt->bind_result($fullName);
$stmt->fetch();
$conn->close();
    echo " <h1 class='mb-4 text-center text-2xl font-bold text-white sm:text-3xl md:mb-6 md:text-left'>$fullName</h1>";
?>
                    <p class="mb-6 text-yellow-500 sm:text-lg md:mb-8">
                        python / java / .net
                    </p>

                    


                </div>
            </div>
        </div>
    </div>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Les Offres</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">explorer les offres des entreprise </p>
            </div> 
            <div class="grid gap-8 m-16  mb-6 lg:mb-16 md:grid-cols-4">
                <div class="items-center flex-col justify-between bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[350px] rounded-t-lg  " src="sos1.webp" alt="Bonnie Avatar">
                    </a>
                    <div class="mt-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Technologie</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                        
                    </div>
                    <div class="">
                        <button type="button" class="mb-5  text-yellow-400  hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900"mb-5>Voir plus</button>
                    </div>
                </div> 
                <div class="items-center flex-col bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[350px] rounded-t-lg" src="sos2.png" alt="Jese Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">TECH</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CTO</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                        
                    </div>
                    <div>
                        <button type="button" class="mb-5 text-yellow-400  hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900"mb-5 >Voir plus</button>
                    </div>
                </div> 
                <div class="items-center flex-col bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[350px] rounded-t-lg" src="sos3.jpg" alt="Michael Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">DigitalLogo</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Senior Front-end Developer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                        
                    </div>
                    <div>
                        <button type="button" class="mb-5 text-yellow-400  hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900"mb-5>Voir plus</button>
                    </div>
                </div> 
                <div class="items-center flex-col bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[350px] rounded-t-lg" src="sos4.webp" alt="Sofia Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl  font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Tech Savy</a>
                        </h3>
                        <span class="text-gray-500  dark:text-gray-400">Marketing & Sale</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                        
                    </div>
                    <div>
                        <button type="button" class=" mb-5text-yellow-400  hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Voir plus</button>
                    </div>
                </div> 
                 
            </div>  
        </div>
      </section>
      <section class="h-[50vh]">
        <div class="mx-[50vh] w-[100vh] bg-transparent">
            <h2 class="mb-2 text-center text-xl font-semibold text-white sm:text-2xl md:mb-4 md:text-left">La
                liste des enseignants valable:</h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-yellow-500">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                nome d'enseignants
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
                                <div class="flex items-center">
                                    capacity
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                            <path
                                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Envoyer un requeste</span>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
<?php
$conn = new mysqli("localhost", "root", "", "pfe");
$x=$_SESSION['username'];
$req1="select nom_fac from etudiant where mail = '$x' ";
$result1 = mysqli_query($conn,$req1);
$row1 = mysqli_fetch_array($result1);
$req = "SELECT concat(nom_prof,' ',prenom_prof),mail,capacite FROM professeur where nom_fac='$row1[0]'";
$result=$conn->query($req);
if($result->num_rows>0){
    while($ligne=$result->fetch_array()){
        $nom=$ligne[0];
        $mail=$ligne[1];
        $capacite=$ligne[2];
        if($capacite=='0'){
            continue;
        }
        echo "<tbody><tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'><th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>$nom</th><td class='px-6 py-4'>$mail</td><td class='px-6 py-4'>$capacite</td><td class='px-6 py-4 text-right'><a href='#' class='font-medium text-green-600 dark:text-green-500 hover:underline'>Envoyer une invitation</a></td></tr>";
                }
    }
?>
                    
                       
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</body>

</html>