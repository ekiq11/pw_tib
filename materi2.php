<form method="POST">
    Masukkan Sebuah Angka : <input type="number" name="angka">
    <button type="submit" name="kirim">Kirim</button>
</form>

<?php

if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    for ($i = 1; $i <= $angka; $i++) {
        echo "<br>Nilai Anda : $i";
    }

}

?>