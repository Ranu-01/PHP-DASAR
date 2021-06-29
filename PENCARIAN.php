<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Word</title>
</head>

<body>
    <?php
    $word = "Nvidia dikabarkan akan mengurangi produksi kartu grafis lamanya untuk bisa meningkatkan volume produksi 
    lini kartu grafis terbarunya, RTX 3000.Dilansir Techspot, Selasa, hal ini diketahui dari postingan di 
    sebuah forum Board Channel, yang merupakan forum tertutup yang berisi distributor dan direksi rekanan pembuat kartu 
    grafis.Dalam sebuah postingan di forum tersebut diketahui kalau Nvidia mengirimkan pemberitahuan pada perusahaan pembuat kartu 
    grafis kalau mereka akan mengurangi pasokan chip RTX 2060 sampai setengahnya mulai bulan Juni ini";
    echo $word;
    echo '<br>';
    echo '<br>';
    ?>
    <form action="" method="post">
        <input type="text" name="search">
        <input type="submit" name="Submit" value="cari">
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        $search = $_POST['search'];
        echo $search . " berjumlah  ";
        echo substr_count($word, $search);
    }
    ?>
</body>

</html>