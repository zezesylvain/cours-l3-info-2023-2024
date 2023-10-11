<!doctype html>
<html lang="en">

<head>
    <title>Passez votre commande</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="logo/favicon.ico">
</head>

<body class="h-screen flex items-center justify-center" style="background: #edf2f7;">
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                    <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold pt-6">
                    Commander
                </label>
                    <form method="#" action="#" class="mt-10">

                        <div>
                            <input type="text" placeholder="Nombre de plats" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>
                        <!-- Place des cases à cocher pour la selection du menu-->
                        <div class="mt-4">
                            <input type="radio" class="" name="choice"> avec supplement <br>
                            <input type="radio" class="" name="choice"> sans supplement <br>
                        </div>

                        <!--Mode de paiement et mode de livraison-->
                        <div class="mt-4">
                            <input type="text" placeholder="Mode de paiement" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-4">
                            <input type="text" placeholder="Lieu de livraison" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-4">
                            <input type="text" placeholder="Contact" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>



                        <div class="mt-7">
                            <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Passez Votre Commande
                        </button>
                            <!--retourner à la page principal-->
                            <button class="mt-4 bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            <a href="https://l3info-2022.una-ufrsfa.ci/">retourner à la page d'acceuil</a> 
                        </button>
                        </div>

                        <div class="flex mt-7 items-center text-center">
                            <hr class="border-gray-300 border-1 w-full rounded-md">
                            <label class="block font-medium text-sm text-gray-600 w-full">
                            Contactez-Nous
                        </label>
                            <hr class="border-gray-300 border-1 w-full rounded-md">
                        </div>

                        <div class="flex mt-7 justify-center w-full">
                            <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Facebook
                        </button>

                            <button class="bg-red-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Google
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>