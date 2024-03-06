<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
echo "<h3> Soal No 1</h3>"; 

/* SOAL NO 1 Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! 
Tunjukkan juga jumlah kata di dalam kalimat tersebut!
Contoh: $string = "PHP is never old"; Output: Panjang string: 16, Jumlah kata: 4
*/
$first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
$pjg = strlen($first_sentence); 
$jum = str_word_count($first_sentence);
echo " $first_sentence : Panjang string: $pjg, jumlah kata: $jum <br>";

$second_sentence = "I'm ready for the challenges"; // Panjang string: 28, jumlah kata: 5 
$pjg = strlen($second_sentence);
$jum = str_word_count($first_sentence);
echo "$second_sentence : Panjang string: $pjg, jumlah kata: $jum";


echo "<h3> Soal No 2</h3>"; 
$string2 = "I love PHP"; 
/* SOAL NO 2 Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. */
echo "<label> String: </label> \"$string2\" <br>"; 
echo "Kata Pertama: " .substr($string2, 0, 1) . "<br>" ; 
echo "Kata Kedua: " .substr($string2, 2, 4) . "<br>" ; 
echo "Kata Ketiga: " .substr($string2, 6, 4) . "<br>" ; 
// Lanjutkan di bawah ini echo "Kata kedua: " ; echo "<br> Kata Ketiga: " ;

echo "<h3> Soal No 3 </h3>";
 /* SOAL NO 3 Mengubah karakter atau kata yang ada di dalam sebuah string. */
$string3 = "PHP is old but sexy!"; 
echo "Judul Asli {$string3} <br>";
echo "Judul Asli:" . str_replace("sexy", "Awesome", $string3) ." <br>";
// OUTPUT :

?>
</body>

</html>