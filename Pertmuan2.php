<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>

<body>
    <form action="" method="post">
        Data yang diinput: <br>
        Nama           :   <input type="text" name="nama"><br>
        Jurusan        :   <input type="text" name="jurus"><br>
        Nilai Tugas    :   <input type="text" name="ntug"><br>
        Nilai UTS      :   <input type="text" name="nuts"><br>
        Nilai UAS      :   <input type="text" name="nuas"><br>
        <input type="submit" value="kirim">
        <input type="reset" value="hapus">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name    = $_POST['nama']; 
        $jurusan = $_POST['jurus']; 
        $tugas   = $_POST['ntug']; 
        $uts     = $_POST['nuts'];
        $uas     = $_POST['nuas'];
        $rata    = ($tugas + $uts + $uas) / 3;
        echo "Nama : $name<br>";
        echo "Jurusan : $jurusan<br>";
        echo "Nilai Tugas : $tugas<br>";
        echo "Nilai UTS : $uts<br>";
        echo "Nilai UAS : $uas<br>";
        echo "Rata - Rata : $rata<br>";
    }
    ?>
  


</body>
</html>
