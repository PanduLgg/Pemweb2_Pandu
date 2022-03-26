<?php
require_once "class_persegipanjang.php";

$persegiPanjang1 = new PersegiPanjang(10, 20);
$persegiPanjang2 = new PersegiPanjang(4, 40);

echo "<br/>Luas Persegi Panjang I = " . $persegiPanjang1->getLuas();
echo "<br/>Luas Persegi Panjang II = " . $persegiPanjang2->getLuas();


echo "<br/>";
echo "<br/>Keliling Persegi Panjang I = " . $persegiPanjang1->getKeliling();
echo "<br/>Keliling Persegi Panjang II = " . $persegiPanjang2->getKeliling();

?>