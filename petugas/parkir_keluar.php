<?php
include_once("../config/helper.php");
include_once("../config/function.php");
$masuk = query("SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id WHERE keterangan = 'Masuk' ORDER BY keterangan ASC");

if (isset($_POST['kata_kunci'])) {
    $kata_kunci=trim($_POST['kata_kunci']);
    $query="SELECT * FROM kendaraan WHERE nomor_polisi LIKE '%".$kata_kunci."%' BY kendaraan_id ASC";
} else {
    $query="SELECT * FROM kendaraan ORDER BY kendaraan_id ASC";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir Keluar</title>
</head>
<body>
<form action="index.php?page=parkir_keluar" method="get">
<div class="flex justify-center">
    <div class="mb-3 xl:w-96">
        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
        <input type="text" name="cari" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
        <button value="cari" class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
        </svg>
        </button>
        </div>
    </div>
</div>
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo"Hasil Pencarian : ".$cari."";
}
?>
</form>
    <div class="w-screen-2/3 ml-[12.5rem] pl-[2rem] mt-[5rem]">
        <div class="bg-white shadow-md rounded my-6">
        <form action=" " methode="post">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                    <   <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            No</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Jenis Kendaraan</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nomor Kendaraan</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Waktu Masuk</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Status</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Action</th>
                    </tr>
                    <?php
                        if (isset($_GET['cari'])) {
                            $cari = $_GET['cari'];
                            $data = mysqli_query("SELECT * FROM kendaraan WHERE nomor_polisi LIKE '%".$cari."%'");
                        } 
                    ?>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($masuk as $msk): ?>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light"><?php echo $i ?></td>
                        <td class="py-4 px-6 border-b border-grey-light"><?php echo $msk ["jeniskendaraan"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light"><?php echo $msk ["nomor_polisi"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light"><?php echo $msk ["waktu_masuk"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light"><?php echo $msk ["keterangan"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php ini_set('date.timezone','Asia/Jakarta'); ?>
                            <a href="keluar_parkir.php?id=<?=$msk["kendaraan_id"]?>&bayar=<?=$msk["bayar"]?>&waktu=<?=date("Y-m-d H:i:s")?>" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out mb-4">
                            Konfirmasi
                        </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </form>
    </div>
</div>  
</body>
</html>