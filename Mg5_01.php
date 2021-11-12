<!DOCTYPE html>
<html>
<head>
    <title>Operasi Aritmatika</title>
    <link rel="stylesheet" type="text/css" href="Mg5_01_style.css">

</head>
<body> 
    <div class="container">
<?php

if(isset($_POST["hitung"])){
    $angka1 = $_POST["input1"];
    $angka2 = $_POST["input2"];
    $operator = $_POST["operator"];
    $hasil = $angka1 + $angka2;
    $bilangan = 100;
    $pembagi = 3;

    if ($operator == "tambah"){
    $hasil = $angka1 + $angka2;
    }elseif ($operator == "kurang"){
        $hasil = $angka1 - $angka2;
    }elseif ($operator == "kali"){
        $hasil = $angka1 * $angka2;
    }elseif ($operator == "bagi"){
        $hasil = $angka1 / $angka2;
    }elseif ($operator == "mod"){
        $sisaBagi = $bilangan % $pembagi;
        $hasil = ($bilangan - $sisaBagi) / $pembagi;
    }
       
}
?>
    <h2 class="judul">Operasi Aritmatika</h2>
    <form method="post" actions="">
        <input type ="text" name="input1" class="input" placeholder="input nilai pertama"><br><br>
        <input type ="text" name="input2" class="input" placeholder="input nilai kedua"><br><br>
        <select class="opt" name="operator">
            <option value="tambah">penjumlahan (+)</option>
            <option value="kurang">pengurangan (-)</option>
            <option value="kali">perkalian (*)</option>
            <option value="bagi">pembagian (/)</option>
            <option value="modulo">modulus (%)</option>
            <select><br><br>
			<input type="submit" name="hitung" value="Hasil" class="tombol">
</form>
<?php if(isset($_POST["hitung"])){ ?>
    <input type="text" value="<?php echo $hasil; ?>" class="input">
<?php }else{ ?>
    <input type="text" value="0" class="input">
<?php } ?>
</div>
</body>
</html>
