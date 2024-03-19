<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>
    <?php
     /* SOAL NO 1
        Kelompokkan nama-nama di bawah ini ke dalam Array. 
        Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
        Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
        echo "<h3> Soal 1 </h3>";
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
        $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

        echo "Kids : ";
        foreach($kids as $ank){
            echo $ank. " ";
        }

        echo "<br>Adults : ";
        foreach($adults as $adl){
            echo $adl. " ";
        }
       
         /* SOAL NO 2
        Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
        echo "<h3> Soal 2</h3>";
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: ". count($kids);
         // Berapa panjang array kids echo "<br>"
        echo "<ol>";
        foreach($kids as $ank){
            echo "<li> $ank </li>";
        }
        // Lanjutkan
        echo "</ol>";
        echo "Total Adults: ". count($adults); // Berapa panjang array adults echo "<br>";
        echo "<ol>";
        foreach($adults as $adl){
            echo "<li> $adl </li>";
        }
        echo "</ol>";

        echo "<h3> Soal 3 </h3>";
         /* SOAL No 3
        Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
        Name: "Will Byers" Age: 12, Aliases: "Will the Wise" Status: "Alive" 
        Name: "Mike Wheeler" Age: 12, Aliases: "Dungeon Master" Status: "Alive" 
        Name: "Jim Hopper" Age: 43, Aliases: "Chief Hopper" Status: "Deceased"
        Name: "Eleven" Age: 12, Aliases: "El" Status: "Alive" */
        $output = array (
            array(
                "name" => "Will Byers",
                "Age" => "12",
                "Aliases" => "Will the Wise",
                "Status" => "Alive <br>"
            ),
            array(
                "name" => "Mike  Wheeler",
                "Age" => "12",
                "Aliases" => "Dungeon Master",
                "Status" => "Alive"
            ),
            array(
                "name" => "Jim Hopper",
                "Age" => "43",
                "Aliases" => "Chief Hopper",
                "Status" => "Deceased"
            ),
            array(
                "name" => "Eleven",
                "Age" => "12",
                "Aliases" => "El",
                "Status" => "Alive"
            ),   
        );
        echo "<pre>";
        print_r($output);
        echo "</pre>";
?>
</body>

</html>