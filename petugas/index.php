<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARKIR</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="shortcut icon" href="../assets/img/parking-location.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                },
            }
        }
    }
    </script>
</head>
<?php
session_start();

date_default_timezone_set("Asia/Jakarta");
$waktu = date('H:i');
$tanggal = date('D, d M Y');

if($_SESSION['level']=="") {
    header("location:index.php?pesan=gagal");
}
?>

<body class="flex flex-col min-h-screen bg-sky-800 ">
    <!--HEADER-->
    <div>
        <nav class="border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="index.php" class="flex items-center">
                    <img src="../assets/img/parking-location.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">E-PARKING</span>
                </a>
                <button data-collapse-toggle="mobile-menu" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-white bg-white-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white"
                                aria-current="page">
                                Hi, <?php echo $_SESSION['level'];?> - <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li>
                            <a href="index.php"
                                class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white"
                                aria-current="page">
                                Home</a>
                        </li>
                        <li>
                            <a href="index.php?page=laporan"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white">
                                Laporan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <aside class="w-60 absolute -z-70">
            <div class="py-4 px-1 bg-gray-50 dark:bg-gray-600">
                <ul class="space-y-10 h-[120vh]">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal ">

                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3 text-slate-300 font-bold text-3xl"><?= $waktu ?> <?= $tanggal ?>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./index.php?page=parkir_masuk"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,6H9A1,1,0,0,0,8,7V17a1,1,0,0,0,2,0V14h2a4,4,0,0,0,0-8Zm0,6H10V8h2a2,2,0,0,1,0,4ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Parkir Masuk </span>
                        </a>
                    </li>
                    <li>
                        <a href="./index.php?page=parkir_keluar"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                viewBox="0 0 128 128">
                                <path
                                    d="M104.00012,72a10.01146,10.01146,0,0,0-10-10H87.11371a125.44745,125.44745,0,0,0-5.63794-11.91016A5.98633,5.98633,0,0,0,76.257,47.05273H27.74359a5.98574,5.98574,0,0,0-5.21875,3.03711A125.44745,125.44745,0,0,0,16.8869,62H10.00049a10.01146,10.01146,0,0,0-10,10,2.0001,2.0001,0,0,0,2,2h8.0658C5.81879,77.86212-.52533,85.92413.03467,99.33789c.55566,13.31836,2.51855,15.80176,4.55664,16.501a2.95929,2.95929,0,0,0,.40918.10339V122a6.00656,6.00656,0,0,0,6,6h9.99994a6.00656,6.00656,0,0,0,6-6v-6.4248h.90527a1.99938,1.99938,0,0,0,1.40277-.57422l2.44434-2.40625h40.495l2.44427,2.40625a1.99952,1.99952,0,0,0,1.40283.57422h.90527V122a6.00656,6.00656,0,0,0,6,6h9.99994a6.00656,6.00656,0,0,0,6-6v-6.07019a3.1953,3.1953,0,0,0,1.44043-.67786c1.37988-1.14062,3.02734-3.98145,3.52539-15.91406.56-13.41376-5.78412-21.47577-10.03162-25.33789h8.0658A2.0001,2.0001,0,0,0,104.00012,72ZM20.7688,63.0965A120.08227,120.08227,0,0,1,26.01166,52.0498a1.98087,1.98087,0,0,1,1.73193-.99707H76.257a1.98087,1.98087,0,0,1,1.73193.99707l.00049.001A166.05687,166.05687,0,0,1,86.4198,71h-68.683l3.05273-6.10547A1.99164,1.99164,0,0,0,20.7688,63.0965ZM4.34326,70a6.01017,6.01017,0,0,1,5.65723-4h5.24225c-.58264,1.45508-1.10858,2.80792-1.56079,4Zm.3714,21h15.054a9.01022,9.01022,0,0,1-8.76819,7H4.00793A31.20311,31.20311,0,0,1,4.71466,91Zm18.28577,31a2.00229,2.00229,0,0,1-2,2H11.00049a2.00229,2.00229,0,0,1-2-2v-6.4248H23.00043Zm71.99969,0a2.00229,2.00229,0,0,1-2,2H83.00018a2.00229,2.00229,0,0,1-2-2v-6.4248h13.6684c.10779,0,.22235.01813.33154.02246Zm3.06445-10.07129-.15918-.02441a20.49057,20.49057,0,0,0-3.23682-.3291H76.91425L74.47,109.16895a1.99952,1.99952,0,0,0-1.40283-.57422H30.93347a1.99952,1.99952,0,0,0-1.40283.57422l-2.44427,2.40625H6.43262a2.009,2.009,0,0,0-.62988.10156c-.43781-.91418-1.20227-3.3667-1.62042-9.67676h6.81818A13.00879,13.00879,0,0,0,23.8302,91H80.17041a13.00879,13.00879,0,0,0,12.82971,11h6.81671C99.35181,109.00818,98.46021,111.26166,98.06458,111.92871ZM99.99268,98H93.00012a9.01022,9.01022,0,0,1-8.76819-7h15.054A31.20311,31.20311,0,0,1,99.99268,98ZM98.09229,87H5.9082a25.715,25.715,0,0,1,9.3183-12H88.77338A25.718,25.718,0,0,1,98.09229,87ZM90.38635,70l-1.49994-4h5.11371a6.01017,6.01017,0,0,1,5.65723,4Z" />
                                <path
                                    d="M82.00018 107a2.0001 2.0001 0 0 0 2 2h9.99994a2 2 0 0 0 0-4H84.00018A2.0001 2.0001 0 0 0 82.00018 107zM20.00043 105H10.00049a2 2 0 0 0 0 4h9.99994a2 2 0 0 0 0-4zM63.00024 98H41.00037a2 2 0 0 0 0 4H63.00024a2 2 0 1 0 0-4zM81.50018 0H46.50031a8.009 8.009 0 0 0-7.99994 8V30a8.00907 8.00907 0 0 0 7.99994 8H81.50018a8.00909 8.00909 0 0 0 8-8V8A8.009 8.009 0 0 0 81.50018 0zm4 30a4 4 0 0 1-4 4H46.50031a4 4 0 0 1-3.99994-4V8a4 4 0 0 1 3.99994-4H81.50018a4 4 0 0 1 4 4z" />
                                <path
                                    d="M64.00024 9.35449a6.6324 6.6324 0 0 0-6.62494 6.625c0 .05621.007.1106.00842.16644-.00116.02832-.00842.05493-.00842.08356v10.416a2 2 0 1 0 3.99994 0v-4.586a6.62391 6.62391 0 1 0 2.625-12.705zm0 9.25a2.625 2.625 0 1 1 2.625-2.625A2.62818 2.62818 0 0 1 64.00024 18.60449zM124.22217 96H124V19a6.00655 6.00655 0 0 0-5.99994-6H93.50012v4h24.49994a2.00229 2.00229 0 0 1 2 2V96h-4V23a2.0001 2.0001 0 0 0-2-2H93.50012v4h18.49994V96h-.22217a3.89788 3.89788 0 0 0-3.77783 4v26a2 2 0 0 0 4 0l.01855-26H124v26a2 2 0 0 0 4 0V100A3.89788 3.89788 0 0 0 124.22217 96z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Parkir Keluar</span>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php "
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="h-6 w-6 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="15" y1="9" x2="9" y2="15" />  <line x1="9" y1="9" x2="15" y2="15" /></svg> <span class="flex-1 ml-3 whitespace-nowrap">
                                Log out</span>
                        </a>
                    </li>
                    <li>
        </aside>

        <!--ISI-->
        <div class="text-center pt-10 ml-[40vh] hidden ">
            <p>aldo febrian dirgantara mulyana </p>
        </div>


        <?php

if(isset($_GET['page']))
{
  $page=$_GET['page'];
  switch ($page) {
        case 'data_kendaraan':
               include('data_kendaraan.php');
        break;
        case 'parkir_masuk':
            include('parkir_masuk.php');
        break;
        case 'parkir_keluar':
            include('parkir_keluar.php');
        break;
        case 'bayar':
            include('bayar.php');
        break;
        case 'laporan':
            include('laporan.php');
        break;
    default:
          echo"Maaf Data Tidak Tersedia";
          break;
  }
}
?>


</body>

</html>