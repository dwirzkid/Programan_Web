

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordis 6</title>
</head>
<body>

<?php
    $segitiga = [
        [
            "als" => 54,
            "tgi" => 4
        ],
        [
            "als" => 66,
            "tgi" => 32
        ],
        [
            "als" => 98,
            "tgi" => 14
        ],
        [
            "als" => 38,
            "tgi" => 57
        ],
        [
            "als" => 17,
            "tgi" => 37
        ],
    ];

    function luas($las, $tin)
    {
        return (0.5 * $las * $tin);
    }
?>

    <h2 align="center">Segitiga:</h2>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Segitiga</th>
                <th>Alas</th>
                <th>Tinggi</th>
                <th>Luas</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($segitiga as $index => $data) {
            ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $data['als'] ?></td>
                    <td><?= $data['tgi'] ?></td>
                    <td><?= luas($data['als'], $data['tgi']) ?></td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <h2>Hitung Luas Segitiga</h2>
    1 
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" name="alasa" id="alas" required><br>
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggia" id="tinggi" required><br>
        <input type="submit" name="hitunga" value="Hitung">
    </form>
    <?php 
         function segitiga_a($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }
        if(isset($_POST['hitunga'])) {       
            $alas = $_POST['alasa'];
            $tinggi = $_POST['tinggia'];
            
            if($alas > 0 && $tinggi > 0) {           
                $luas = segitiga_a($alas, $tinggi);
                echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas";
            } else {
                echo "<p>Nilai alas dan tinggi harus lebih besar dari 0.</p>";
            }
        }
    ?>
<br>2
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" name="alasb" id="alas" required><br>
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggib" id="tinggi" required><br>
        <input type="submit" name="hitungb" value="Hitung">
    </form>
    <?php 
        function segitiga_b($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }
        if(isset($_POST['hitungb'])) {       
            $alas = $_POST['alasb'];
            $tinggi = $_POST['tinggib'];
            
            if($alas > 0 && $tinggi > 0) {           
                $luas = segitiga_b($alas, $tinggi);
                echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas";
            } else {
                echo "<p>Nilai alas dan tinggi harus lebih besar dari 0.</p>";
            }
        }
    ?>
<br>3
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" name="alasc" id="alas" required><br>
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggic" id="tinggi" required><br>
        <input type="submit" name="hitungc" value="Hitung">
    </form>
    <?php 
        function segitiga_c($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }
        if(isset($_POST['hitungc'])) {       
            $alas = $_POST['alasc'];
            $tinggi = $_POST['tinggic'];
            
            if($alas > 0 && $tinggi > 0) {           
                $luas = segitiga_c($alas, $tinggi);
                echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas";
            } else {
                echo "<p>Nilai alas dan tinggi harus lebih besar dari 0.</p>";
            }
        }
    ?>
<br>4
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" name="alasd" id="alas" required><br>
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggid" id="tinggi" required><br>
        <input type="submit" name="hitungd" value="Hitung">
    </form>
    <?php 
        function segitiga_d($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }
        if(isset($_POST['hitungd'])) {       
            $alas = $_POST['alasd'];
            $tinggi = $_POST['tinggid'];
            
            if($alas > 0 && $tinggi > 0) {           
                $luas = segitiga_d($alas, $tinggi);
                echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas";
            } else {
                echo "<p>Nilai alas dan tinggi harus lebih besar dari 0.</p>";
            }
        }
    ?>
    <br>5
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" name="alase" id="alas" required><br>
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggie" id="tinggi" required><br>
        <input type="submit" name="hitunge" value="Hitung">
    </form>
    <?php    
    function segitiga_e($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }
    if(isset($_POST['hitunge'])) {       
        $alas = $_POST['alase'];
        $tinggi = $_POST['tinggie'];
        
        if($alas > 0 && $tinggi > 0) {           
            $luas = segitiga_e($alas, $tinggi);
            echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas";
        } else {
            echo "<p>Nilai alas dan tinggi harus lebih besar dari 0.</p>";
        }
    }
    ?>
            
</body>
</html>

