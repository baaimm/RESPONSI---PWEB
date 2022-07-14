<!DOCTYPE html>
<head>
    <title>DATA</title>
</head>
<body bgcolor="#98AFC7">
<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$asal = $_POST['asal'];

$fp = fopen("TA.txt", "a+");
fputs($fp, "$nama |$asal |$email \n");
fclose($fp);


echo "<center><h1>SELAMAT DATANG</h1></center>";
$fp = fopen("TA.txt", "r");

echo "<center><table border='1' bgcolor='#C7B097'><pre>";
echo "<tr><td>Tanggal</td><td>Nama</td><td>Asal</td><td>Email</td></tr></center>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>";
    echo date('D-M-Y');
    echo "</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td></tr>";
    
}
echo "</pre>";
echo "</table>";


echo "<br><br>";
echo "Anda ingin membuka apa ?<br>"; 
echo "<a href='kalkulator.html'>kalkulator</a>";
echo "<br> Atau <br> ";
echo "<a href='kalender.php'>kalender";
?>
</body>
</html>