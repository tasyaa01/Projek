<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project</title>
</head>
<body>
    <form method="POST">
    <center>
        <h1>Program Segitiga Angka Di PHP</h1>
        <table>
            <tr>
                <td>
                    <ol>
                        <li>Segitiga Siku-Siku</li>
                        <li>Segitiga Terbalik</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>Pilihan</td>
                <td>:</td>
                <td><input type="number" name="pilihan"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="angka"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Ok"></td>
            </tr>
        </table>
        <br>
        <br>
    </center>
    </form>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
    $angka = $_POST['angka'];
    $pilih = $_POST['pilihan'];

    if($pilih == 1){
        echo "<center> Program Segitiga Siku-Siku </center><br>";
        for ($a = 1; $a <= $angka; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "$b &nbsp";
            }
            echo "<br>";
        }
    }else if($pilih == 2){
        echo "<center>";
        echo "Program Segitiga Terbalik<br>";
        for ($a = $angka; $a >= 1; $a--) {
            for ($b = 1; $b <= $a; $b++) {
                echo "$b &nbsp";
            }
            echo "<br>";
        }
        echo "</center>";
    }

}

?>