<?php
	// Mendefinisikan Konstanta Phi
	define("PHI", 3.14);

	// Data variabel Persegi & Segitiga
	$sisi = 2;

	// Data variabel Trapesium
	$a = 2;
	$b = 3;
	$tinggi = 4;

	// Data variabel Tabung & Bola
	$jari2 = 10;
	$tinggi = 4;

	$luasPersegi = $sisi * $sisi;
	$luasSegitiga = $sisi * $sisi * $sisi;
	$luasTrapesium =  0.5 * ($a + $b) * $tinggi; 
	$luasPermukaanTabung = 2 * PHI * $jari2 * ($jari2 + $tinggi);
	$luasPermukaanBola = 4 * PHI * $jari2 * $jari2;

	echo "Luas Persegi: " . $luasPersegi . "cm2";
	echo "<br>";
	echo "Luas Segitiga: " . $luasSegitiga . "cm2";
	echo "<br>";
	echo "Luas Trapesium: " . $luasTrapesium . "cm2";
	echo "<br>";
	echo "Luas Permukaan Tabung: " . $luasPermukaanTabung . "cm2";
	echo "<br>";
	echo "Luas Permukaan Bola: " . $luasPermukaanBola . "cm2";
?>