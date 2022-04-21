<?php
require_once 'class_bank.php';

$ab1 = new accountBank('0123', 3000000, 'Pandu');
$ab2 = new accountBank('0124', 2000000, 'Imron');
$ab3 = new accountBank('0125', 4000000, 'Yurino');

$ab1->cetak();
echo '<br>';
$ab2->cetak();
echo '<br>';
$ab1->transfer($ab2, 1000000);
echo 'Biaya Admin : '. accountBank::$biaya_admin;
echo '<hr>';
$ab1->cetak();
echo '<hr>';
$ab2->cetak();


$ar_bank = [$ab1, $ab2, $ab3];

?>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>No</th><th>No Account</th><th>Pemilik</th><th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_bank as $acc) {
            
         ?>
        <tr>
            <td><?= $no?></td>
            <td><?= $acc->nomor?></td>
            <td><?= $acc->customer?></td>
            <td><?= $acc->saldo?></td>
        </tr>
        <?php
        $no++; 
        }
        ?>
    </tbody>
</table>