<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil</title>
</head>

<body>
    <div class="text-center text-5xl font-semibold text-slate-50 pt-6 relative">
        <h1> Your Profile</h1>
    </div>
    <div class="w-40 h-40 rounded-full ml-[37rem] mt-10">
        <img src="../assets/img/IMG_20191228_193935.jpg" alt="Rounded avatar" width="120px" height="120px" />
    </div>

    <form class="pl-[20rem] pr-[20rem] ml-[5rem]">
        <div class="mb-6">
            <label for="email" class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
            <input type="email" id="email"
                class="bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Desi Dwi Pajriah" required="">
        </div>
        <div class="mb-6">
            <label for="email" class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UserName</label>
            <input type="email" id="email"
                class="bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Pajriah" required="">
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                password</label>
            <input type="password" id="password"
                class="bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="">
        </div>
        <a href="#" type="btn"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</a>
        <a href="./index.php" type="btn"
            class=" ml-[2rem] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
    </form>

    </div>
</body>

</html>