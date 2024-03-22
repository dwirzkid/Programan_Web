<?php
$file = 'comments.txt';

if (file_exists($file)) {
    $comments = file($file);

    foreach ($comments as $comment) {
        $data = explode(', ', $comment);
        $name = $data[0];
        $email = $data[1];
        $comment = $data[2];

        echo "<strong>Name:</strong> $name<br>";
        echo "<strong>Email:</strong> $email<br>";
        echo "<strong>Comment:</strong> $comment<hr>";
    }
} else {
    echo 'No comments yet.';
}
?>
