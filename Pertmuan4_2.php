<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordis 4</title>
</head>
<body>
    <h1 style="align-content: center;">Loop</h1>
</body>
</html>
<?php

echo "<table border='1'>";
echo "<tr><th>*</th>";
for ($i = 1; $i <= 15; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 15; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= 15; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
