<?php
include_once("../config/helper.php");
include_once("../config/config.php");
include_once '../config/function.php';
$masuk = query("SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id WHERE keterangan = 'Keluar' ORDER BY keterangan ASC");
?>
    <div class="w-screen-2/3 ml-[12.5rem] pl-[2rem] mt-[5rem]">
        <div class="bg-white shadow-md rounded my-6">
        <form action=" " methode="post">
            <label for="">Laporan</label>
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th
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
                            Jam Masuk</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Jam Keluar</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Harga</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Keterangan</th>
                    </tr>
                </thead>
                <?php $i =1; ?>
                <?php foreach ($masuk as $msk): ?>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $i ?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $msk ["jeniskendaraan"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $msk ["nomor_polisi"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $msk ["waktu_masuk"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $msk ["waktu_keluar"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $msk ["harga"]?></td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <?php echo $msk ["keterangan"]?></td>
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