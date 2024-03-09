<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertemuan 3 no 2</title>
</head>
<body>
  
  <form action="" method="post">
    Nama                : <input type="text" name="name"><br>
    NIM                 : <input type="text" name="nim"><br>
    Mata Kuliah         : <input type="text" name="matkul"><br>
    Jumlah Kehadiran    : <input type="number" name="jumke"><b> max 18</b><br>
    Nilai Tugas         : <input type="number" name="nit"><br>
    UTS                 : <input type="number" name="uts"><br>
    UAS                 : <input type="number" name="uas"><br>

    <input type="submit" name="submit" value="Submit">

  </form>

  <?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['name'];
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $jumke = $_POST['jumke'];
    $nit = $_POST['nit'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    
    
    $niakhir = $jumke + ($nit * 0.2) + ($uts * 0.3) + ($uas * 0.4);

    if($jumke < 18){
      $nilaihad = $jumke * 0.1;
    }

    if($niakhir >= 65) {
      $status = "LULUS";
  } else {
      $status = "TIDAK LULUS";
  }


    if($niakhir >= 90){
     $grade = "Grade A";
     
    } else if($niakhir >= 70){
      $grade = "Grade B";
      
    } else if($niakhir >= 60){
      $grade = "Grade C";
     
    } else if($niakhir >= 50){
      $grade = "Grade D";
    
    } else if($niakhir <= 50){
      $grade = "Grade E";
      
    }

    echo "NILAI AKADEMIK     : $matkul <br>";
    echo "Nama               : $nama <br>";
    echo "NIM                : $nim <br>";
    echo "Jumlah Kehadiran   : $jumke ";
    echo " Nilai Kehadiran    : $nilaihad <br>";
    echo " Nilai Tugas        : $nit";
    echo "Nilai UTS          : $uts <br>";
    echo "Nilai UAS          : $uas";
    echo " Nilai Akhir        : $niakhir <br>";
    echo "Grade              : $grade <br>";
    echo "Keterangan         : $status <br>";
  }

  ?>

</body>
</html>