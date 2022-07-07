<?php
include_once("../config/helper.php");
include_once("../config/config.php");
include_once '../config/function.php';
$masuk = mysqli_query($config,"SELECT * FROM user WHERE level LIKE '%Petugas%'");
?>
<div class="w-screen-2/3 ml-[12.5rem] pl-[2rem] mt-[5rem]">
<div class="bg-white shadow-md rounded my-6">
<form action="" method="post">
    <table class="text-left w-full border-collapse">
        <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
            No</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
            Nama</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
            Alamat</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
            Phone</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
            Action</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach ($masuk as $msk): ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $msk["nama"];?></td>
            <td><?php echo $msk["alamat"];?></td>
            <td><?php echo $msk["phone"];?></td>
            <td>
            <a href="index.php?page=hapus_petugas&user_id=<?php echo $msk['user_id']; ?>" onClick="return confirm('Yakin ingin menghapus data ini?')" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out mb-4">
                Hapus</a> | 
            <a href="index.php?page=update_petugas&user_id=<?php echo $msk['user_id']; ?>" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out mb-4">Update</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </table>
</form>
            </div>
            </div>
