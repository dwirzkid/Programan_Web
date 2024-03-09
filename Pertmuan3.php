<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
</head>
<body>
<center>
  <br>
  <br>
<form action="" method="post">
            Nilai 1 
            <input type="text" name="n1" placeholder="">
            <select name="choic" id="choic">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            Nilai 2
            <input type="text" name="n2" placeholder="">
            <input type="submit" value="Submit">
        </form>
        </br>
</center>
        <?php   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['n1'];
        $nilai2 = $_POST['n2'];
        $pilih = $_POST['choic'];
    
        switch($operator) {
            case "+" : 
                $hasil = $nilai1 + $nilai2;
                break;
            case "-": 
                $hasil = $nilai1 - $nilai2;
                break;
            case "*":
                $hasil = $nilai1 * $nilai2;
                break;
            case "/": 
                $hasil = $nilai1 / $nilai2;
                break;
            default:
            echo "Kosong!!";
        }
            echo "<center><font size='3'>Hasil : $hasil </font></center>";
    }
?>
    
</body>
</html>